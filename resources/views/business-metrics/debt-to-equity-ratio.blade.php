@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @livewire('business-metrics.debt-to-equity-ratio')
        </div>
    </div>
</div>
@endsection
