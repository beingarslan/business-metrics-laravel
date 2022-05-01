<?php

namespace App\Http\Livewire\BusinessMetrics;

use Livewire\Component;

class GrossProfitMargin extends Component
{
    public $revenue;
    public $cost_of_goods;
    public $grossProfitMargin;
    public $results = false;

    public function getGrossProfitMargin()
    {
        $this->validate([
            'revenue' => 'required|numeric|min:1',
            'cost_of_goods' => 'required|numeric|min:0',
        ]);

        $this->grossProfitMargin = (($this->revenue - $this->cost_of_goods) / $this->revenue) * 100;
        $this->results = true;
    }

    public function render()
    {
        return view('livewire.business-metrics.gross-profit-margin');
    }
}
