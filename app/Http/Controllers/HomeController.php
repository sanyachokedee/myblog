<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// use Illuminate\Support\Facades\DB; //เขีนแบบเต็ม
use DB; //เขียนแบบย่อ

use function PHPSTORM_META\map;

class HomeController extends Controller
{
    public function home(){
        return view('pages.home');
    }

    public function about(){
        return view('pages.about');
    }

    public function service(){
        return view('pages.service');
    }

    public function contact(){
        return view('pages.contact');
    }  

    public function login(){
        return view('pages.login');
    }
    
    public function mpage1(){
        return view('pages.mpage1');
    }

    public function employees() {
        // อ่านข้อมูลทั้งหมด all
        // $employees = DB::table('employees')->get();  // select * from employees
        
        // อ่านเพียงรายการเดียว 
        // $employees = DB::table('employees')->first();  // select * from employees limit 1;
        
        // อ่านระบุ field ที่ต้องการ
        // $employees = DB::table('employees')->first(['fullname','gender','email']);  // อ่านเพียงรายการเดียวระบุ field select * from employees limit 1;

        // อ่านแบบระบุเงื่อนไข
        // $employees = DB::table('employees')->where('id',1)->get(); //เงื่อนไข id= 1

        // อ่านแบบมีเงื่อนไข id มากกว่าเท่ากับ 2
        // $employees = DB::table('employees')->where('id','<=',2)->get();

        // อ่านแบบมีเงื่อนไข id มากกว่าเท่ากับ 2 + เอา field fullname, email
        // $employees = DB::table('employees')->where('id','<=',2)->get(['fullname','email']);

        // มีมากกว่า 1 เงื่อนไข
        // $employees = DB::table('employees')
        //             ->where('id',2)
        //             ->where('status',2)
        //             ->orwhere('age',20)
        //             // ->first();
        //             ->get();

        //ค้นหาโดยระบุ id โดยตรงไม่สาารถระบุ field  ได้
        $employees = DB::table('employees')->find(3);  // select * from employees where id =3 ไม่สาารถระบุ field  ได้

        // นับจำนวน record 
        // $employees  = DB::table('employees')->count();

        // Max
        // $employees  = DB::table('employees')->max('age');

        //Min
        // $employees  = DB::table('employees')->min('age');

        //Average
        // $employees  = DB::table('employees')->average('age');

        //Order by ASC
        // $employees  = DB::table('employees')->orderby('id')->get();
        //Order by DESC
        // $employees  = DB::table('employees')->orderbyDESC('id')->get();

        //Limit
        // $employees  =   DB::table('employees')
        //                 ->orderbyDESC('age')
        //                 ->limit(2)
        //                 ->get();

        // การเพิ่มข้อมูลเข้าไปในตาราง
        // $data = array(
        //     'fullname' => 'Samit Koyan',
        //     'gender' => 'Male',
        //     'email' => 'samit@gmail.com',
        //     'tel' => '089-395-6659',
        //     'age' => 30,
        //     'address' => '126 laddprow',
        //     'avatar' => 'samit.jpg',
        //     'status' => 3
        // );

        // $employees = DB::table('employees')->insert($data);

        // การแก้ไขข้อมูลเข้าในในตาราง  ------------Update
        $data = array(
            'email' => 'samitkk@gmail.com',
            'tel' => '022224444',
            'age' => 42
        );

        $employees = DB::table('employees')->where('id',4)->update($data);

        return $employees;


    }
}
