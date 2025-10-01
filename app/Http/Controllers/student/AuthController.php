<?php

namespace App\Http\Controllers\student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function StudentLoginPage()
    {
        return view('student.auth.login');
    }
}
