@extends('layouts.app')

@section('title', 'The list of tasks!')



@section('content')
    {{-- @if (count($tasks)) --}}
    @forelse ($tasks as $tasks)
        <div>
            <a href="{{ route('tasks.show', ['task' => $tasks->id]) }}">{{ $tasks->title }}</a>
        </div>
    @empty
        <div>There are no tasks!</div>
    @endforelse
    {{-- @endif --}}
@endsection
