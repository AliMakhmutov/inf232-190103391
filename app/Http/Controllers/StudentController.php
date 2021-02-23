<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function get_students(){
        static $students = array(0=>array('Ali', '20.12.2002', 18), 1=>array('Amirkhan', '28.06.2002', 18), 2=>array('Zhandos', '27.12.2001', 19));
        return $students;

    }
    public function show($id){
        $stud = $this->get_students();
        return view("student", ["name"=>$stud[$id[0]], "birth"=>$stud[$id[1]], "age"=>$stud[$id[2]]]);
    }
}
