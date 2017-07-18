@extends('layouts.app')

@section('content')

<div class="container">
	<a href="{{ url('/newrxs') }}" class="btn btn-default">Recent Rxs</a>
	<h1>Admin View | Enter new prescription data</h1>
    {!! Form::open(['action' => 'AdminsController@store', 'method' => 'POST']) !!}
    	<div class="form-group">
			<br><br>

    		{{Form::label('name', 'Medication name & Strength')}}
    		{{Form::text('name', '', ['class' => 'form-control'])}}
    		<br>
    		{{Form::label('doctor', 'Physician Name')}}
    		{{Form::text('doctor', '', ['class' => 'form-control',
    		])}}
    		<br>
    		{{Form::label('quantity', 'Dispensable quantity')}}
    		{{Form::number('quantity', '', ['class' => 'form-control'])}}
    		<br>
    		{{Form::label('sig', 'Directions for use')}}
    		{{Form::textarea('sig', '', ['class' => 'form-control', 'rows' => 5, 'cols' => 5])}}
    		<br>
    		{{Form::label('date', 'Written Date')}}
    		{{Form::date('date',\Carbon\Carbon::now())}}
    	</div>
    	{{Form::submit('Submit New Rx', ['class' => 'btn btn-default'])}}
	{!! Form::close() !!}
</div>
@endsection