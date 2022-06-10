<div>
    <div class="card">
        <div class="card-header">
            {{ __('Debt to Equity Ratio') }}
            <!-- <button class="btn btn-secondary ">Back</button> -->
        </div>

        <div class="card-body">
            <!-- Debt to Equity Ratio form -->
            <form wire:submit.prevent="getDebttoEquityRatio">

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Total Liabilities</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Total Liabilities" wire:model="total_liabilities">
                    @error('total_liabilities')
                    <span class="text-danger" role="alert">
                        {{ $message }}</span>
                    @enderror

                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Total Equity</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Total Equity" wire:model="total_equity">
                    @error('total_equity')
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
            {{ __('Debt to Equity Ratio Results') }}
        </div>

        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    Result: {{ $debttoEquityRatio }}
                </div>
            </div>
        </div>
    </div>
    @endif
</div>