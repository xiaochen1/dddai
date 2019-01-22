<?php

namespace app\Http\Controllers;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use  DB;


class UserController extends BaseController {

    /*
    function index() {
        // return "user haha ";
        return view("user"); // 渲染 index.blade.php 模板
        // return view("test.user"); // 渲染 views/test/user.blade.php 模板
    }

    function reg() {
        // return "user haha ";
        // return view("user"); // 渲染 index.blade.php 模板
        return view("test.user"); // 渲染 views/test/user.blade.php 模板
    }

    function student() {
        return "student  oo" ;
    }

    function getUserInfoById(Request $request) {
        $name = $request->name;
        $age = $request->age;

        printf($name, $age);
        return $request;
    }


    function studentId($id) {
        return "studentId --> " . $id ;
    }

    function teacherId($id) {
        return "teacherId --->  "  .  $id ;
    }

    */
    function showEditView() {
        $username = $_GET["username"];
        $result = DB::table("users")->where("username", $username) -> get() -> first();
        return view("user.usereditview", ["result"=>$result]);
    }

    function showAddView() {
        return view("user.useraddview");
    }

    function list() {
        $username = $_GET["username"]? $_GET["username"] : "" ;
        // print_r($username);
        // print_r(DB::table("users") ->where("username", "like", '%'.$username.'%') -> get() )  ;
        $result = DB::table("users") ->where("username", "like", '%'.$username.'%') -> get() ->first();
        $returnResult = ["code" =>200, "result"=> $result ];
        return json_encode($returnResult);
    }

    function add() {
        $username = $_POST["username"];
        $password = $_POST["password"];
        $mobile = $_POST["mobile"];
        $sex = $_POST["sex"];
        $address = $_POST["address"];
        $email = $_POST["email"];
        $age = $_POST["age"];

        $result = [ "username" => $username,"password" => $password,"mobile" => $mobile, "sex" => $sex,  "address" => $address, "email" => $email, "age"=>$age];
        var_dump($result);

        print_r(DB::table("users") -> insert($result) )  ;

    }

    function edit() {
        $id = $_POST["id"];
        $username = $_POST["username"];
        $password = $_POST["password"];
        $mobile = $_POST["mobile"];
        $sex = $_POST["sex"];
        $address = $_POST["address"];
        $email = $_POST["email"];
        $age = $_POST["age"];

        $result = [ "username" => $username,"password" => $password,"mobile" => $mobile, "sex" => $sex,  "address" => $address, "email" => $email, "age"=>$age];
        var_dump($result);

        print_r(DB::table("users") -> where("id", $id) -> update($result) )  ;

    }

    function delete () {
        $username = $_GET["username"];
        print_r(DB::table("users") -> where("username", $username) -> delete());
    }

    


}