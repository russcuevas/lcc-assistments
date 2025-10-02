<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function AdminManagementPage()
    {
        return view('admin.admin_management');
    }

    public function AdminAddAdminPage()
    {
        return view('admin.add_admin');
    }
}
