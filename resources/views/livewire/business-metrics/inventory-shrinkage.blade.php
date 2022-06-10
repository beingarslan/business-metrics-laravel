<div>
    <div class="card">
        <div class="card-header">
            {{ __('Inventory Shrinkage') }}
            <!-- <button class="btn btn-secondary ">Back</button> -->
        </div>

        <div class="card-body">
            <!-- Gross Profit Margin form -->
            <form wire:submit.prevent="getInventoryShrinkage">

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Recorded Inventory</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Recorded Inventory" wire:model="recorded_inventory">
                    @error('recorded_inventory')
                    <span class="text-danger" role="alert">
                        {{ $message }}</span>
                    @enderror

                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Actual Inventory</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Actual Inventory" wire:model="actual_inventory">
                    @error('actual_inventory')
                    <span class="text-danger" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <button type="submit" class="btn btn-secondary">Calculate</button>
                <div wire:loading class="text-warning">
                    Calculating...
                </div>
            </form>
        </div>
    </div>

    <!-- results -->
    @if($results)
    <div class="card mt-2">
        <div class="card-header">
            {{ __('Inventory Shrinkage Results') }}
        </div>

        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    Result: {{ $inventoryShrinkage }}%
                </div>
            </div>
        </div>
    </div>
    @endif
</div>
