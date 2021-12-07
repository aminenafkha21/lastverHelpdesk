<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


use App\Models\User ;



class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $usertype=Auth::user()->user_type;

        if($usertype =="1") {
            $this->allnotoftech = DB::table('notifications')
            ->select(
                'notifications.*',
                'users.id as userid',
                'users.name as username'
            )
            ->whereNull('notifications.sender_id')
            ->where('notifications.receiver_id',Auth::user()->id)
            ->leftJoin('users','users.id','=','notifications.receiver_id')
            ->limit(5)
            ->get(); 
            return view('technician.home',['allnotoftech' =>  $this->allnotoftech]);


        }
        elseif($usertype =="2") {
            $this->allnotofclient = DB::table('notifications')
            ->select(
                'notifications.*',
                'users.id as userid',
                'users.name as username'
            )
            ->whereNull('notifications.sender_id')
            ->where('notifications.receiver_id',Auth::user()->id)
            ->leftJoin('users','users.id','=','notifications.receiver_id')
            ->limit(5)

            ->get(); 
            return view('user.home',['allnotofclient' =>  $this->allnotofclient]);


        }
        else {

            $this->allnotofadminn = DB::table('notifications')
            ->select(
                'notifications.*',
                'users.id as userid',
                'users.name as username'
            )
            ->whereNull('notifications.receiver_id')
            ->leftJoin('users','users.id','=','notifications.sender_id')
            ->limit(5)

            ->get(); 

            return view('admin.home',['allnotofadminn' =>  $this->allnotofadminn]);

        }
    }

    public function error()
    {
        
        $usertype=Auth::user()->user_type;

        if($usertype =="1") {
            return view('technician.error');


        }
        elseif($usertype =="2") {
            return view('user.error');


        }
        else {
            return view('admin.error');

        }

    }


    public function users()
    {
        
        $usertype=Auth::user()->user_type;

        if($usertype =="0") {
            return view('admin.users');


        }

    }
    
    
   



 
}
