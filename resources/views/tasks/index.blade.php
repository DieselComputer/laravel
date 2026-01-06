<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Список задач</title>
</head>
<body>
    <div>
        <h1>Список задач</h1>
        
        <a href="{{ route('tasks.create') }}">
            Добавить задачу
        </a>
        <ul>
            @foreach($tasks as $task)
                <li>
                    <span>
                        {{ $task->title }}
                    </span>
            <form action="{{ route('tasks.toggle', $task) }}" method="POST">
                @csrf
                @method('PATCH')
                <button type="submit">
                    {{ $task->completed ? '✔' : '❌' }}
                </button>
            </form>
                </li>
            @endforeach
        </ul>
    </div>
</body>
</html>