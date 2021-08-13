<?php

namespace App\Http\Controllers;

use App\Models\Employee;

// use Illuminate\Support\Facades\DB; //เขีนแบบเต็ม
//เขียนแบบย่อ

//เรียก model Employee

class HomeController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function service()
    {
        return view('pages.service');
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function login()
    {
        return view('pages.login');
    }

    public function mpage1()
    {
        return view('pages.mpage1');
    }

    public function employees()
    {
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
        // $employees = DB::table('employees')->find(3);  // select * from employees where id =3 ไม่สาารถระบุ field  ได้

        // นับจำนวน record
        // $employees  = DB::table('employees')->count();

        // Max
        // $employees  = DB::table('employees')->max('age');

        //Min
        // $employees  = DB::table('employees')->min('age');

        //Average
        // $employees  = DB::table('employees')->average('age');

        // การจัดเรียงข้อมูล
        //Order by ASC
        // $employees  = DB::table('employees')->orderby('id')->get();
        //Order by DESC
        // $employees  = DB::table('employees')->orderbyDESC('id')->get();

        //Limit
        // $employees  =   DB::table('employees')
        //                 ->orderbyDESC('age')
        //                 ->limit(2)
        //                 ->get();

        // -----insert การเพิ่มข้อมูลเข้าไปในตาราง
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

        // --------การแก้ไขข้อมูลเข้าในในตาราง  ------------Update
        // $data = array(
        //     'email' => 'samitkk@gmail.com',
        //     'tel' => '022224488',
        //     'age' => 42
        // );

        // $employees = DB::table('employees')->where('id',4)->update($data);

        //-------- การลบข้อมูล delete
        // $employees = DB::table('employees')->where('id',1)->delete();
        // $employees ="";
        // $where = DB::table('employees')->where('email','Somchaij@emai.com')->get();
        // $employees = DB::table('employees')->where('email',1)->delete();

        // $where1 = json_decode($where);

        // return $employees;
    }

    public function employeelist()
    {
        // อ่านข้อมูลทั้งหมด all
        // $employees = Employee::all(); // = select * from employees

        // ระบุบาง field
        // $employees = Employee::all(['email']);
        // return $employees;

        // first
        // $employees = Employee::first();

        // อ่านแบบระบุเงื่อนไข
        //   $employees = Employee::where('id',2)->get();

        // where อายุมากกว่า 20
        //   $employees = Employee::where('age','>','20')->get();

        // การจัดเรียงข้อมูล
        // อ่านระบุ field ที่ต้องการ
        //    $employees = Employee::where('age','>=',27)
        //                         ->orderbyDESC('age')
        //                         ->get();

        // // -----insert การเพิ่มข้อมูลเข้าไปในตาราง
        //  $data = array(
        //         'fullname' => 'Sanya Chokedee',
        //         'gender' => 'Male',
        //         'email' => 'sanyac@gmail.com',
        //         'tel' => '081-20202020',
        //         'age' => 25,
        //         'address' => '20 soi A',
        //         'avatar' => 'sanyac.jpg',
        //         'status' => 2
        //     );

        // $employees = Employee::create($data);

        // update
        // $data = array(
        //     'fullname' => 'Sanya M',
        //     'gender'   => 'undefine',
        //     'email'    => 'sanyam@gmail.com',
        //     'tel'      => '081-20202020',
        //     'age'      => 25,
        //     'address'  => '20 soi A',
        //     'avatar'   => 'sanyac.jpg',
        //     'status'   => 2
        // );

        // $employees = Employee::where('id',5)->update($data);

        //-------- การลบข้อมูล delete
        // $employees = Employee::where('id',5)->delete();


        //--------- การส่งไปที่ view
        // $employees = Employee::all();
        $employees = Employee::paginate(2);
        // return $employees;
        return view('pages.employeelist',compact('employees'));
    }
}
