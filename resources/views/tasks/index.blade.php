@extends('layouts.app')

@section('title', 'Mes Tâches')
@section('content')
<h1>Mes Tâches <span>{{ $tasks->count() }}</span></h1>

<a href="{{ route('tasks.create') }}">+ Nouvelle Tâche</a>

@forelse($tasks as $task)
    <div class="actions"class="card mb-2 {{ $task->completed ? 'border-success' : '' }}">
        <div class="card-body">
            <h5 class="{{ $task->completed ? 'text-decoration-line-through' : '' }}">
                {{ $task->title }}
            </h5>
<p>Priorité : {{ $task->priority }}</p>
            <p>{{ $task->description }}</p>

            <a href="{{ route('tasks.edit', $task) }}">Modifier</a>

            <form action="{{ route('tasks.destroy', $task) }}" method="POST">
                @csrf
                @method('DELETE')

                <button type="submit" onclick="return confirm('Supprimer ?')">
                    Supprimer
                </button>
            </form>
        </div>
    </div>
@empty
    <p>
        Aucune tâche.
        <a href="{{ route('tasks.create') }}">Créer votre première tâche</a>
    </p>
@endforelse
@endsection