<?php

namespace App\Http\Livewire\BusinessMetrics;

use Livewire\Component;

class InventoryShrinkage extends Component
{    
    public $recorded_inventory;
    public $actual_inventory;
    public $inventoryShrinkage;
    public $results = false;

    public function getInventoryShrinkage()
    {
        $this->validate([
            'recorded_inventory' => 'required|numeric|min:1',
            'actual_inventory' => 'required|numeric|min:0',
        ]);

        $this->inventoryShrinkage = (($this->recorded_inventory - $this->actual_inventory) / $this->recorded_inventory) * 100;
        $this->results = true;
    }


    public function render()
    {
        return view('livewire.business-metrics.inventory-shrinkage');
    }
}
