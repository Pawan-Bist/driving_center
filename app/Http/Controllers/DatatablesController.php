<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;

use App\User;

class DatatablesController extends Controller
{
    public function getUserData(){
        return view('admin.datatables.users.index');
    }
    public function getUserAjax(){
        return Datatables::of(User::query())->make(true);
    }
}
