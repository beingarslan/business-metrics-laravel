<?php

namespace App\Http\Livewire\BusinessMetrics;

use Livewire\Component;

class NetProfitMargin extends Component
{
    public $net_income;
    public $total_revenue;
    public $netProfitMargin;
    public $results = false;

    public function getNetProfitMargin()
    {
        $this->validate([
            'net_income' => 'required|numeric|min:1',
            'total_revenue' => 'required|numeric|min:0',
        ]);

        $this->netProfitMargin = ($this->net_income / $this->total_revenue) * 100;
        $this->results = true;
    }

    public function render()
    {
        return view('livewire.business-metrics.net-profit-margin');
    }
}
