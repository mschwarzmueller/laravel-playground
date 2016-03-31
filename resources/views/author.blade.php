@extends('layouts.master')

@section('content')
    <h1>New Article</h1>
    <a href="{{ route('author.article') }}">Generate!</a>
@endsection