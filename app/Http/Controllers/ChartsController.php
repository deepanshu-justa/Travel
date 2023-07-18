<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use Illuminate\Http\Request;

class ChartsController extends Controller
{
    //  Get Popular Destinations as Pie Chart
    public function leadsJson() {
        $data = Lead::all();
        return response()->json($data);
    }
}
