<?php

namespace App\Http\Livewire\BusinessMetrics;

use Livewire\Component;

class BreakEvenPoint extends Component
{
    public $sales_price_per_unit;
    public $fixed_costs;
    public $variable_costs_per_unit;
    public $breakEvenPoint;
    public $results = false;


    public function getBreakEvenPoint(){
        $this->validate([
            'fixed_costs' => 'required|numeric|min:0',
            'sales_price_per_unit' => 'required|numeric|min:1',
            'variable_costs_per_unit' => 'required|numeric|min:0',
        ]);

        $this->breakEvenPoint = ($this->fixed_costs / $this->sales_price_per_unit) - $this->variable_costs_per_unit;
        $this->results = true;
    }
    public function render()
    {
        return view('livewire.business-metrics.break-even-point');
    }
}
