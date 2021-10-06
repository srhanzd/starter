<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\VerifiesEmails;

class AdminController extends Controller
{
   public function showAdminname(){
       return 'srhan the king';
   }
    public function showAdminlastname(){
        return 'zd';
    }
    public function showAdminmiddlename(){
        return 'ali';
    }
    public function login(){
        return 'you have to login first to access this route';
    }
    public function get_index(){
//        $data=[];
//        $data['objj']=new \stdClass();
//        $data['objj']->name='SRHAN';
//        $data['id']=92;
//        $data['name']='srhan2 the king';
//        $obj=new \stdClass();
//        $obj->name='srhan the king';
//        $obj->gender='male';
//        $obj->id=99;

        return view('front\home');//,compact('obj'),$data);
    }
    public function about(){


        return view('front\about');//,compact('obj'),$data);
    }
    public function welcome(){
//        $obj=new \stdClass();
//        $obj->name='srhan the king';
//        $obj->gender='male';
//        $obj->id=99;
$data=[];//['a'=>'srhan','b'=>'ali'];
        return view('front\welcome',compact('data'));//
        //->with('name','the king srhan');//['name'=>'the king srhan']
        //,compact('obj'),$data);
    }
    public function home(){
       return 'home page';
    }

}
