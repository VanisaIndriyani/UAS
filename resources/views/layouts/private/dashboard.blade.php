@extends('layouts.private.index')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    @if(auth()->check())
        <h1 class="h2 welcome-message">Welcome back, {{ auth()->user()->name }}</h1>
    @else
        <h1 class="h2 welcome-message">Welcome back, Guest</h1>
    @endif
</div>
@endsection
