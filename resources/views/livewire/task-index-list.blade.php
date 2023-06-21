<div>
    <ol>
    @foreach ($tasks as $task)
<li>{{$task->title}}</li>
<a href="{{ route('tasks.edit', $task) }}" class="btn btn-warning">Modifica</a>
<button wire:click="destroy({{$task}})" class="btn btn-danger">Elimina</button>
@endforeach
</ol>

</div>