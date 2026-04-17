@extends('layouts.app')
@section('title', 'Mes Tâches')

@section('content')

<style>
body {
    background-color: #f4f6f9;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

h1 {
    text-align: center;
    margin-top: 30px;
    font-weight: 600;
}

h1 span {
    background-color: #28a745;
    color: white;
    border-radius: 20px;
    padding: 5px 12px;
    font-size: 0.8em;
}

a[href*="tasks.create"] {
    display: block;
    width: fit-content;
    margin: 20px auto;
    background-color: #28a745;
    color: white;
    padding: 10px 15px;
    border-radius: 8px;
    text-decoration: none;
    transition: 0.3s;
}

a[href*="tasks.create"]:hover {
    background-color: #218838;
}

.card {
    max-width: 600px;
    margin: 10px auto;
    border-radius: 10px;
    border: 1px solid #ddd;
    transition: 0.3s;
    background: white;
}

.card:hover {
    transform: scale(1.02);
}

.card-body {
    padding: 15px;
}

.border-success {
    border-left: 5px solid #28a745 !important;
}

.text-decoration-line-through {
    text-decoration: line-through;
    color: #6c757d;
}

p {
    margin: 10px 0;
    color: #555;
}

.actions {
    display: flex;
    gap: 10px;
    align-items: center;
    margin-top: 10px;
}

.actions a {
    background-color: #0d6efd;
    color: white;
    padding: 6px 10px;
    border-radius: 6px;
    text-decoration: none;
}

.actions a:hover {
    background-color: #0b5ed7;
}

button {
    background-color: #dc3545;
    color: white;
    border: none;
    padding: 6px 10px;
    border-radius: 6px;
    cursor: pointer;
    transition: 0.3s;
}

button:hover {
    background-color: #c82333;
}

form {
    display: inline;
}

.empty-message {
    text-align: center;
    margin-top: 20px;
}

.empty-message a {
    color: #28a745;
    text-decoration: none;
    font-weight: 500;
}

.empty-message a:hover {
    text-decoration: underline;
}
</style>

<h1>Mes Tâches <span>{{ $tasks->count() }}</span></h1>
<a href="{{ route('tasks.create') }}">+ Nouvelle Tâche</a>

@forelse($tasks as $task)
    <div class="card mb-2 {{ $task->completed ? 'border-success' : '' }}">
        <div class="card-body">
            <h5 class="{{ $task->completed ? 'text-decoration-line-through' : '' }}">
                {{ $task->title }}
            </h5>

            <p>{{ $task->description }}</p>

            <div class="actions">
                <a href="{{ route('tasks.edit', $task) }}">✏️ Modifier</a>

                <form action="{{ route('tasks.destroy', $task) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Supprimer ?')">🗑 Supprimer</button>
                </form>
            </div>
        </div>
    </div>
@empty
    <p class="empty-message">
        Aucune tâche.
        <a href="{{ route('tasks.create') }}">Créer votre première tâche</a>
    </p>
@endforelse
*
@endsection