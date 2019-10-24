@extends('layouts.team')

@section('teamcontent')
<div class="row justify-content-center">
    <div class="col-md-3">
        <ul class="list-group mb-4">
            @include('teams.partials._nav')
        </ul>
    </div>
    <div class="col-md-9">
        <div class="card mb-4">
            <div class="card-header">
                Dashobard
            </div>
            <div class="card-body">
                This is you dashboard.
            </div>
        </div>
    </div>
</div>
@endsection
