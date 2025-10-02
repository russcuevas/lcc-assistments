<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ExaminersController extends Controller
{
    public function AdminExaminersPage()
    {
        return view('admin.examiners_management');
    }

    public function AdminAddExaminersPage()
    {
        return view('admin.add_examiners');
    }

    public function AdminExamineesListPage()
    {
        return view('admin.examinees_list');
    }

}
