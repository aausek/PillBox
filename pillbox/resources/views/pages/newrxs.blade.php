@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>New Rx Data</h1>
        <a href="{{ url('/admin') }}" class="btn btn-primary">Return to Admin View</a><hr>
        
        @if (count($newrxs) > 0)
            @foreach($newrxs as $newrx)
                <table class="table table-bordered">
                    <td>Medication name: {{$newrx->name}}</td>
                    <td>Prescribing physician: {{$newrx->doctor}}</td>
                    <td>Quantity available: {{$newrx->quantity}}</td>
                    <td>Directions: {{$newrx->sig}}</td>
                    <td>Written date: {{$newrx->date}}</td>
                </table>
            @endforeach
        @else
            <p>No Rxs recently added</p>
        @endif    
    </div>
@endsection
