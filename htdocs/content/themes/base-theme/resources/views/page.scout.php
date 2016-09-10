@extends('layouts.default')

@section('content')

    @loop
        <h1>{{ Loop::title() }}</h1>
        {{ Loop::content() }}
    @endloop

@overwrite