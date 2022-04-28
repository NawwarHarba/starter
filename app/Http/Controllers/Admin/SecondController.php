<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class SecondController extends Controller
{
    public function __construct(){
        $this -> middleware('auth');
    }
    public function ShowString0(){
        return 'static string0';
    }
    public function ShowString1(){
        return 'static string1';
    }
    public function ShowString2(){
        return 'static string2';
    }
    public function ShowString3(){
        return 'static string3';
    }
}
