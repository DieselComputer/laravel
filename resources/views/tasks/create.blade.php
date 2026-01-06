<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Добавить задачу</title>
</head>
<body>
    <div>
        <h1>Добавить задачу</h1>
        
        <form action="{{ route('tasks.store') }}" method="POST">
            @csrf
            <div>
                <label for="title">Название задачи:</label>
                <input type="text" name="title" id="title" required>
            </div>
            <div>
                <button type="submit">
                    Добавить
                </button>
                <a href="{{ route('tasks.index') }}">
                    ← Назад к списку
                </a>
            </div>
        </form>
    </div>
</body>
</html>