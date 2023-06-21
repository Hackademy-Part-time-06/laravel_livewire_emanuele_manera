<table class="table border mt-2">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Titolo</th>
            <th scope="col">Descrizione</th>
            <th scope="col"><a href="{{ route('tasks.create') }}" class="btn btn-success">Crea</a></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($tasks as $task)
            <tr>
                <th scope="row">{{ $task->id }}</th>
                <td>{{ $task->title }}</td>
                <td>{{ $task->description }}</td>
                <td>
                    <a href="{{ route('tasks.edit', $task) }}" class="btn btn-warning">Modifica</a>
                    <button wire:click="destroy({{ $task }})" class="btn btn-danger">Elimina</button>
                </td>
        @endforeach
    </tbody>
</table>
