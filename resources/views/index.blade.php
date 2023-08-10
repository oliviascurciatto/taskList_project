<h1>
    The list of tasks!
</h1>

<div>
    {{-- @if (count($tasks)) --}}
    @forelse ($tasks as $tasks)
        <div>
            <a href="{{ route('tasks.show', ['id' => $tasks->id]) }}">{{ $tasks->title }}</a>
        </div>
    @empty
        <div>There are no tasks!</div>
    @endforelse
    {{-- @endif --}}
</div>
