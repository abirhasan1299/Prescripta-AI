<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Drug;
use App\Models\Generic;
use Illuminate\Http\Request;

class DrugController extends Controller
{
    public function index()
    {
        $drug = Drug::all();
        return view('admin.drug.index',compact('drug'));
    }
    public function generic()
    {
        $data = Generic::all();
        return view('admin.drug.generic',compact('data'));
    }
}

