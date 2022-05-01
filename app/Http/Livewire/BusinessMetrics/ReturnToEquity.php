<?php

namespace App\Http\Livewire\BusinessMetrics;

use Livewire\Component;

class ReturnToEquity extends Component
{
    public $net_profit;
    public $shareholders_equity;
    public $returnToEquity;
    public $results = false;

    public function getreturnToEquity()
    {
        $this->validate([
            'net_profit' => 'required|numeric|min:0',
            'shareholders_equity' => 'required|numeric|min:1',
        ]);

        $this->returnToEquity = ($this->net_profit / $this->shareholders_equity);
        $this->results = true;
    }

    public function render()
    {
        return view('livewire.business-metrics.return-to-equity');
    }
}
