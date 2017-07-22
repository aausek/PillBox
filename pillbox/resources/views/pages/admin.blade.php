@extends('layouts.app')

@section('content')

<h1 align="center">Admin View</h1>
<h3 align="center">| Enter new prescription data |</h3><br>
<div class="container" align="center">
			<div class="btn-group">
				  <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				    Select A User <span class="caret"></span>
				  </button>
				  <ul class="dropdown-menu">
					  @foreach($names as $name)
					    	<li><a href="#">{{ $name->name}}</a></li>
					   @endforeach
				  </ul>
				  <a href="{{ url('/newrxs') }}" class="btn btn-primary">Recent Rxs</a>
			</div>

    {!! Form::open(['action' => 'AdminsController@store', 'method' => 'POST', 'class' => 'form']) !!}
    	<div class="form-group has-success has-feedback">
			<br>
    		{{Form::label('name', 'Medication Name & Strength', ['class' => 'form-label'])}}
    		{{Form::text('name', '', ['class' => 'form-control'])}}
    		<br>
    		{{Form::label('doctor', 'Physician Name', ['class' => 'form-label'])}}
    		{{Form::text('doctor', '', ['class' => 'form-control',
    		])}}
    		<br>
    		{{Form::label('quantity', 'Dispensable Quantity', ['class' => 'form-label'])}}
    		{{Form::number('quantity', '', ['class' => 'form-control'])}}
    		<br>
    		{{Form::label('sig', 'Directions for Use', ['class' => 'form-label'])}}
    		{{Form::textarea('sig', '', ['class' => 'form-control', 'rows' => 3, 'cols' => 5])}}
    		<br>
    		{{Form::label('date', 'Written Date', ['class' => 'form-label'])}}
    		{{Form::date('date',\Carbon\Carbon::now(), ['class' => 'input-group date'])}}
    	</div>
    	{{Form::submit('Submit New Rx', ['class' => 'btn btn-warning btn-lg btn-block'])}}
	{!! Form::close() !!}
</div>
@endsection