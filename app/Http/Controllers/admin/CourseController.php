<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function AdminCoursePage()
    {
        return view('admin.course');
    }

    public function AdminAddCoursePage()
    {
        return view('admin.add_course');
    }
}
