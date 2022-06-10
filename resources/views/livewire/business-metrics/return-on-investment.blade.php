<div>
    <div class="card">
        <div class="card-header">
            {{ __('Return on investment') }}
            <!-- <button class="btn btn-secondary ">Back</button> -->
        </div>

        <div class="card-body">
            <!-- Gross Profit Margin form -->
            <form wire:submit.prevent="getReturnoninvestment">

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Net Return on Investment</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Net Return on Investment" wire:model="net_return_on_investment">
                    @error('net_return_on_investment')
                    <span class="text-danger" role="alert">
                        {{ $message }}</span>
                    @enderror

                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Cost of Investment</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Cost of Investment" wire:model="cost_of_investment">
                    @error('cost_of_investment')
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
            {{ __('Return on investment Results') }}
        </div>

        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    Result: {{ $returnoninvestment }}%
                </div>
            </div>
        </div>
    </div>
    @endif
</div>
