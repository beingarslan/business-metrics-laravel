<?php

namespace App\Http\Livewire\BusinessMetrics;

use Livewire\Component;

class DebtToEquityRatio extends Component
{
    public $total_liabilities;
    public $total_equity;
    public $debttoEquityRatio;
    public $results = false;

    public function getDebttoEquityRatio()
    {
        $this->validate([
            'total_liabilities' => 'required|numeric|min:0',
            'total_equity' => 'required|numeric|min:1',
        ]);

        $this->debttoEquityRatio = ($this->total_liabilities / $this->total_equity) ;
        $this->results = true;
    }

    public function render()
    {
        return view('livewire.business-metrics.debt-to-equity-ratio');
    }
}
