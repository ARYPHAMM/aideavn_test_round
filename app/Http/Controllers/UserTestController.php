<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserTestController extends Controller
{
    public function create(Request $request)
    {
        $data = $request->only(
            'user_id',
            'subject_id',
            'points',
            'class_id',
            'coefficient',
            'semester'
        );
        DB::table('user_tests')->insert($data);
        return ["msg" => true, "status_code" => 200];
    }
    public function update($id, Request $request)
    {
        $data = $request->only(
            'user_id',
            'subject_id',
            'points',
            'class_id',
            'coefficient',
            'semester'
        );
        DB::table('user_tests')->where('id', $id)->update($data);
        return ["msg" => true, "status_code" => 200];
    }
}
