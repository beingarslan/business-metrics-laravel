<div>
    <div class="card">
        <div class="card-header">
            {{ __('Net Profit Margin') }}
            <!-- <button class="btn btn-secondary ">Back</button> -->
        </div>

        <div class="card-body">
            <!-- Gross Profit Margin form -->
            <form wire:submit.prevent="getNetProfitMargin">

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Net Income</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Net Income" wire:model="net_income">
                    @error('net_income')
                    <span class="text-danger" role="alert">
                        {{ $message }}</span>
                    @enderror

                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Total Revenue</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Total Revenue" wire:model="total_revenue">
                    @error('total_revenue')
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
            {{ __('Net Profit Margin Results') }}
        </div>

        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    Result: {{ $netProfitMargin }}%
                </div>
            </div>
        </div>
    </div>
    @endif
</div>
