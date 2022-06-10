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

    public function returnToEquity()
    {
        return view('business-metrics.return-to-equity');
    }

    public function breakEvenPoint()
    {
        return view('business-metrics.break-even-point');
    }

    public function debtToEquityRatio()
    {
        return view('business-metrics.debt-to-equity-ratio');
    }

    public function inventoryShrinkage()
    {
        return view('business-metrics.inventory-shrinkage');
    }

    public function returnOnInvestment()
    {
        return view('business-metrics.return-on-investment');
    }
}
