<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
    	return view('admin.index', [
    		'navActive' => 'Write Post'
    	]);
    }

    public function list()
    {
    	return view('admin.list', [
    		'navActive' => 'List Post'
    	]);
    }
}
