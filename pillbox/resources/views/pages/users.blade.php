@extends('layouts.app')

@section('content')
<div class="container">
    @if (Auth::check())
    	<p>{{$email}}</p>
    @else
    	<p>Please log in</p>
	@endif
</div>
@endsection