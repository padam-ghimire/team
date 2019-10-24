@extends('layouts.app')

@section('content')
<div class="container">
<h4 class="mb-5">{{$team->name}}</h4>
    @yield('teamcontent')
</div>
@endsection
