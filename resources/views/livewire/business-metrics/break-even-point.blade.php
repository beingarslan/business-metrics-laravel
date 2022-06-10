<div>
    <div class="card">
        <div class="card-header">
            {{ __('Break-even Point') }}
            <!-- <button class="btn btn-secondary ">Back</button> -->
        </div>

        <div class="card-body">
            <!-- Debt to Equity Ratio form -->
            <form wire:submit.prevent="getBreakEvenPoint">

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Fixed Costs</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Fixed Costs" wire:model="fixed_costs">
                    @error('fixed_costs')
                    <span class="text-danger" role="alert">
                        {{ $message }}</span>
                    @enderror

                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Sales Price Per Unit</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Sales Price Per Unit" wire:model="sales_price_per_unit">
                    @error('sales_price_per_unit')
                    <span class="text-danger" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
               
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Variable Costs Per Unit</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Variable Costs Per Unit" wire:model="variable_costs_per_unit">
                    @error('variable_costs_per_unit')
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
            {{ __('Break-even Point Results') }}
        </div>

        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    Result: {{ $breakEvenPoint }}
                </div>
            </div>
        </div>
    </div>
    @endif
</div>