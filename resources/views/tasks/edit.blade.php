@extends('layouts.app') 

@section('content') 

<div class="card"> 

  <form action="{{ route('tasks.update', $task) }}" method="POST"> 
    @csrf 
    @method('PUT') 

    <input type="text" name="title" value="{{ old('title', $task->title) }}"> 
    @error('title') <div>{{ $message }}</div> @enderror 

    <textarea name="description">{{ old('description', $task->description) }}</textarea> 

    <div>
        <label>Priorité</label>
        <select name="priority">
            <option value="haute" {{ old('priority', $task->priority) == 'haute' ? 'selected' : '' }}>Haute</option>
            <option value="moyenne" {{ old('priority', $task->priority) == 'moyenne' ? 'selected' : '' }}>Moyenne</option>
            <option value="basse" {{ old('priority', $task->priority) == 'basse' ? 'selected' : '' }}>Basse</option>
        </select>
        @error('priority') 
            <div style="color:red">{{ $message }}</div> 
        @enderror
    </div>

    <input type="checkbox" name="completed" {{ $task->completed ? 'checked' : '' }}> 
    <label>Marquer comme terminée</label> 

    <button type="submit">Mettre à jour</button> 
    <a href="{{ route('tasks.index') }}">Annuler</a> 

  </form> 

</div> 

@endsection