<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class StuController extends Controller
{
    function showStu() {
        return "Hello Vikas";
    }

    //calling view in contoller
    function showHome() {
        return view('home');
    }

    //getting value from route in controller
    function showStuName($username) {
        return "Hello ".$username;
    }

    //getting value from route in controller and pass it to view
    function showStuNameToView($username) {
        echo "Hello ".$username;
        return view('stu', ['st'=>$username]);
    }

    //check if view page exist
    function isViewExists() {
        if (view::exists('admin.login'))
        {
        echo "Welcome Admin ";
        return view('admin.login');
        }
        else{
            echo "View not exists";
        }
    }

    //pass arry to view from controller
    function getArray()
    {
        $count=2;
        $students=['ram', 'sham', 'mohna', 'sohan'];
        return view('welcome',['count'=>$count, 'students'=>$students]);
    }
}
