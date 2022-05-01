<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BusinessMetricsController extends Controller
{
    public function grossProfitMargin()
    {
        return view('business-metrics.gross-profit-margin');
    }
}
