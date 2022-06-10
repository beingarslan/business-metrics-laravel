@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @livewire('business-metrics.break-even-point')
        </div>
    </div>
</div>
@endsection
