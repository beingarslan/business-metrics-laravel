@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @livewire('business-metrics.gross-profit-margin')
        </div>
    </div>
</div>
@endsection