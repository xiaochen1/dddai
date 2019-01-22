<?php
namespace App\Http\Controllers\Admin;
// use App\Http\Controllers\Controller;
use App\Http\Controllers\Controller;

class TestController extends Controller {
    function index() {
        return "Admin/TestController  hh";
    }

    function reg() {
        return view("test.user");
    }
}