@extends('layout')

@section('content')
    @foreach ($data as $item)
        <h1>{{ $item->name }}</h1>
    @endforeach
@endsection
