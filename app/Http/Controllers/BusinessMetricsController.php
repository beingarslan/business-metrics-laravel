<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BusinessMetricsController extends Controller
{
    public function grossProfitMargin()
    {
        return view('business-metrics.gross-profit-margin');
    }

    public function netProfitMargin()
    {
        return view('business-metrics.net-profit-margin');
    }

    public function operatingProfitMargin()
    {
        return view('business-metrics.operating-profit-margin');
    }
}
