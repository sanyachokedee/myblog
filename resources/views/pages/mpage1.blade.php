<!-- การเรียกใช้งาน Tempate -->
@extends('layouts.main_template')
@section('title') เข้าสู่ระบบ @endsection
@section('content')

<div class="container d-flex align-items-center" style="height: 70vh;">
        
   <?php echo "abc"; 
   for($i=1;$i<=10;$i++) {
    //    $i++;
       echo "<br>$i วันนี้ ".date('d-m-y');
   }
   
   
   
   ?>


</div>


@endsection