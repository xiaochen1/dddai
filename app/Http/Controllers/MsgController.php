<?php

namespace App\Http\Controllers;
use Illuminate\Routing\Controller;
use  DB;


class MsgController extends Controller {

    //展示 添加信息 的  页面
    function showaddview() {
        return view("msgs.showadd");
    }

    function index() {
        $row = DB::table("msgs")->get();
        // [{},  {},  {}]
        // return $row;
        return view("msgs.index", ["msgsdata"=> $row]);
    }

    function add() {
        // 添加单条数据
        // $row = ["title" => "标题啊" , "created_at" => date('Y-m-d H:i:s')];
        // var_dump(DB::table("msgs")->insert($row));  // true  添加成功了

        // 添加多条数据
        $mulRows = [
            ["title" => "标题啊" , "created_at" => date('Y-m-d H:i:s'),  "updated_at" =>  date('Y-m-d H:i:s')],
            ["title" => "标题1" , "created_at" => date('Y-m-d H:i:s'),  "updated_at" =>  date('Y-m-d H:i:s')],
            ["title" => "标题2" , "created_at" => date('Y-m-d H:i:s'),  "updated_at" =>  date('Y-m-d H:i:s')],
            ["title" => "标题3" , "created_at" => date('Y-m-d H:i:s'),  "updated_at" =>  date('Y-m-d H:i:s')]
        ];
        var_dump(DB::table("msgs")->insert($mulRows));  // true  添加成功了
    }


    function delete($id) {
        //根据id  删除某条数据
        print($id);
        var_dump(DB::table("msgs")->where("id", $id)->delete());  // true  删除成功了
    }

    function update($id) {
         //根据id  更改  click 的值  + 1;
         print($id);
         var_dump( DB::table("msgs")->where("id", $id)->increment("click",1)  );  // 修改成功
    }


    function find() {
        var_dump( DB::table("msgs")->get()  );  // 修改成功
   }

   function dopostmsg() {
       $title = $_POST["title"];
       $content = $_POST["content"];

       echo $title;
       echo $content;

       $row = ["title"=> $title,  "content"=> $content];
       return ( DB::table("msgs")->insert($row)  );
   }
}

