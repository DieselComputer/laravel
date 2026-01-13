<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Задачи</title>
</head>
<body>
    <div>
        <h2>Список задач</h2>
        
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
                    <a href="{{ route('tasks.create') }}">Добавить</a>
        </ul>
    </div>
</body>
</html>
