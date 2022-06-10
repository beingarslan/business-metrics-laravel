<?php

namespace App\Http\Livewire\BusinessMetrics;

use Livewire\Component;

class ReturnOnInvestment extends Component
{
    public $net_return_on_investment;
    public $cost_of_investment;
    public $returnoninvestment;
    public $results = false;


    public function getReturnoninvestment(){
        $this->validate([
            'net_return_on_investment' => 'required|numeric|min:0',
            'cost_of_investment' => 'required|numeric|min:1',
        ]);

        $this->returnoninvestment = ($this->net_return_on_investment / $this->cost_of_investment) * 100;
        $this->results = true;
    }

    public function render()
    {
        return view('livewire.business-metrics.return-on-investment');
    }
}
