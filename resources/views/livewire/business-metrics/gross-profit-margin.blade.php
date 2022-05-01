<div>
    <div class="card">
        <div class="card-header">
            {{ __('Gross Profit Margin') }}
            <!-- <button class="btn btn-secondary ">Back</button> -->
        </div>

        <div class="card-body">
            <!-- Gross Profit Margin form -->
            <form wire:submit.prevent="getGrossProfitMargin">

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Revenue</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Revenue" wire:model="revenue">
                    @error('revenue')
                    <span class="text-danger" role="alert">
                        {{ $message }}</span>
                    @enderror

                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Cost of goods</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Cost of goods" wire:model="cost_of_goods">
                    @error('cost_of_goods')
                    <span class="text-danger" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <button type="submit" class="btn btn-secondary">Calculate</button>
            </form>
        </div>
    </div>

    <!-- results -->
    @if($results)
    <div class="card mt-2">
        <div class="card-header">
            {{ __('Gross Profit Margin Results') }}
        </div>

        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    Result: {{ $grossProfitMargin }}%
                </div>
            </div>
        </div>
    </div>
    @endif
</div>
