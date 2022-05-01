<div>
    <div class="card">
        <div class="card-header">
            {{ __('Return to Equity') }}
            <!-- <button class="btn btn-secondary ">Back</button> -->
        </div>

        <div class="card-body">
            <!-- Gross Profit Margin form -->
            <form wire:submit.prevent="getreturnToEquity">

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Net Profit</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Net Profit" wire:model="net_profit">
                    @error('net_profit')
                    <span class="text-danger" role="alert">
                        {{ $message }}</span>
                    @enderror

                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Shareholder's Equity</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Shareholder's Equity" wire:model="shareholders_equity">
                    @error('shareholders_equity')
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
            {{ __('Return to Equity Results') }}
        </div>

        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    Result: {{ $returnToEquity }}%
                </div>
            </div>
        </div>
    </div>
    @endif
</div>
