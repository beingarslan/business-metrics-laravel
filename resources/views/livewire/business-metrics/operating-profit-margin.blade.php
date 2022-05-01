<div>
    <div class="card">
        <div class="card-header">
            {{ __('Operating Profit Margin') }}
            <!-- <button class="btn btn-secondary ">Back</button> -->
        </div>

        <div class="card-body">
            <!-- Gross Profit Margin form -->
            <form wire:submit.prevent="getOperatingProfitMargin">

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Gross Profit</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Gross Profit" wire:model="gross_profit">
                    @error('gross_profit')
                    <span class="text-danger" role="alert">
                        {{ $message }}</span>
                    @enderror

                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Operating Expenses</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Operating Expenses" wire:model="operating_expenses">
                    @error('operating_expenses')
                    <span class="text-danger" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Revenue</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Revenue" wire:model="revenue">
                    @error('revenue')
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
            {{ __('Operating Profit Margin Results') }}
        </div>

        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    Result: {{ $operatingProfitMargin }}%
                </div>
            </div>
        </div>
    </div>
    @endif
</div>
