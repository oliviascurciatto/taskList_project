@extends('layouts.app')

@section('content0')
@include('form', ['task' => $task])
@endsection