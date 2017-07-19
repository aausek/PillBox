@extends('layouts.app')

@section('content')
<div class="container">
    @if (Auth::user()->admin)
            <a href="/admin" class="btn btn-primary">Admin View</a>
    @endif
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Your Dashboard</div>
                    <table class="table table-striped">
                        <tr>
                            <th>Prescription #</th>
                            <th>Medication</th>
                            <th>Refills Remaining</th>
                        </tr>
                    </table>
                <div class="panel-body">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection