@extends('app')
@section('content')
    @include('homePartials.home')
    {{-- @include('homePartials.about') --}}
    @include('homePartials.work')
    @include('homePartials.services')
    {{-- @include('homePartials.employment') --}}
    {{-- @include('homePartials.skill') --}}
    {{-- @include('homePartials.education') --}}
    @include('homePartials.contact')
@endsection
