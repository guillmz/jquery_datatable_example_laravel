<?php

namespace App\Http\Controllers;
use Datatables;
// use Yajra\Datatables\Datatables;

use Illuminate\Http\Request;

class DatatablesController extends Controller
{
    public function getIndex()
	{
	    return view('datatables.index');
	}

	public function anyData()
	{
	    return Datatables::of(User::query())->make(true);
	}
}
