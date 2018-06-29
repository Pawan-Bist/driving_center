<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use DataTables;

class DatatableController extends Controller
{
    public function userData(){
        return view('admin.datatables.users.data');
    }
    public function userAjax(){
        return Datatables::of(User::query())->make(true);
    }

}
