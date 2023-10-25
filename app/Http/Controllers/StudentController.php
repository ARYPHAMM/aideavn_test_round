<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function show($id)
    {
        $student = DB::select('select user_tests.*, students.last_name as last_name, students.first_name as first_name, subjects.name as subject_name from user_tests,users,students, subjects where user_tests.user_id = '.$id.' and users.id = user_tests.user_id and students.user_id = users.id and subjects.id = user_tests.subject_id');
        dd($student);
    }
}
