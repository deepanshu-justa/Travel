<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use Illuminate\Http\Request;

class ReportsController extends Controller
{
    //
    public function index()
    {
        $leads = Lead::all();
        return view ('admin.reports.index', compact('leads'));
    }
}
