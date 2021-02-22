
@extends('top.layout')

@section('title', 'portfolio')

@section('content')

    @if (Auth::check())
    <div class="row p-side-origin ">
        <div class="col-sm-3">
        @include('shared.sidebar')
        </div>
        <div class="col-sm-9">
        @include('')
        </div>
    </div>

    @else
    @include('')
    @endif

@endsection