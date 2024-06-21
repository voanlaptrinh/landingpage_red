@extends('user.index')
@section('content')


@foreach ($landingpages as $landingPage)
@include('user.content.block01')
@include('user.content.block02')
@include('user.content.block03')
@include('user.content.block04')
@include('user.content.block05')
@include('user.content.block06')
@include('user.content.block07')
@include('user.content.block08')
@endforeach
@endsection