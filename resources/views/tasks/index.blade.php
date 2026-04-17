@extends('layouts.app') 
@section('title', 'Mes Tâches') 
 
@section('content') 
<h1>Mes Tâches <span>{{ $tasks->count() }}</span></h1> 
<a href="{{ route('tasks.create') }}">+ Nouvelle Tâche</a> 
 
@forelse($tasks as $task) 
    <div class="card mb-2 {{ $task->completed ? 'border-success' : '' }}"> 
        <div class="card-body"> 
            <h5 class="{{ $task->completed ? 'text-decoration-line-through' : '' 
}}"> 
                {{ $task->title }} 
            </h5> 
            <p>{{ $task->description }}</p> 
                                                          Modifier</a> 
            <form action="{{ route('tasks.destroy', $task) }}" method="POST"> 
                @csrf 
                @method('DELETE') 
                <button onclick="return confirm('Supprimer ?')">� </button> 
            </form> 
        </div> 
    </div> 
@empty 
    <p>Aucune tâche. <a href="{{ route('tasks.create') }}">Créer votre première 
tâche</a></p> 

@endforelse 