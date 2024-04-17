<?php

namespace App\Http\Controllers;
use App\DataTables\AdminsDataTable;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index(AdminsDataTable $table)
    {
        return $table->render('admin.content.test.index', ['dataTable' => $table]);
    }
}
