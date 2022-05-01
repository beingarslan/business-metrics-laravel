<?php

namespace App\Http\Livewire\BusinessMetrics;

use Livewire\Component;

class OperatingProfitMargin extends Component
{
    public $gross_profit;
    public $operating_expenses;
    public $revenue;
    public $operatingProfitMargin;
    public $results = false;

    public function getOperatingProfitMargin()
    {
        $this->validate([
            'gross_profit' => 'required|numeric|min:0',
            'operating_expenses' => 'required|numeric|min:0',
            'revenue' => 'required|numeric|min:1',
        ]);

        $this->operatingProfitMargin = ($this->gross_profit - ($this->operating_expenses / $this->revenue)) * 100;
        $this->results = true;
    }

    public function render()
    {
        return view('livewire.business-metrics.operating-profit-margin');
    }
}
