<?php


namespace App\Http\Controllers\Front;

use Illuminate\Routing\Controller;

class UserController extends Controller{

    public function showUserName(){
        return 'ahmed eman';
    }

    public function getIndex(){
       $data=['ahmed' , 'bassem'];
  
    return view('welcome' , compact('data'));
    }
}