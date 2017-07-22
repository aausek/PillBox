@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 align="center">New Rx Data</h1>
        <a href="{{ route('admin') }}" class="btn btn-primary">Return to Admin View</a>
        <br><br>

        @if (count($newrxs) > 0)
            <div class="panel panel-default">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead class="thead">
                            <tr>
                              <th>Medication Name</th>
                              <th>Prescribing Physician</th>
                              <th>Quantity Available</th>
                              <th>Directions</th>
                              <th>Written Date</th>
                            </tr>
                        </thead>
                    @foreach($newrxs as $newrx)
                            <tr>
                                <td class="active"><b>{{$newrx->name}}</td>
                                <td class="active"><b>{{$newrx->doctor}}</td>
                                <td class="active"><b>{{$newrx->quantity}}</td>
                                <td class="active"><b>{{$newrx->sig}}</td>
                                <td class="active"><b>{{$newrx->date}}</td>
                            </tr>
                    @endforeach            
                    </table>
                </div>
            </div>  
        @else
            <p>No Rxs recently added</p>
        @endif    
    </div>
@endsection
