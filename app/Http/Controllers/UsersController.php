<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Yajra\Datatables\Datatables;

class UsersController extends Controller
{
    public function index() {
    	return view('users.index', compact('users'));
    }

    public function getUsers() {
    	// return DataTables::of(User::query())->make(true);
    	$users = User::select(['id', 'name', 'email', 'password', 'created_at', 'updated_at'])->get();

        return Datatables::of($users)
            ->addColumn('action', function ($user) {
                return '<a href="#edit-'.$user->id.'" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i> Edit</a>';
            })
            ->editColumn('id', 'ID: {{$id}}')
            ->removeColumn('password')
            ->make(true);


    }

    public function getTable(){
    	return DataTables::of(User::query())->make(true);
    }
}
