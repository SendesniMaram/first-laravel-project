@extends('layouts.app') 
@section('content') 
<meta charset="UTF-8">
<div class="card"> 
  <div class="card-header"><h4>nouvelle tâche</h4></div>  
  <div class="card-body"> 
    <form action="{{ route('tasks.store') }}" method="POST"> 
      @csrf 
      <div class="mb-3"> 
        <label>Titre *</label> 
        <input type="text" name="title" 
               class="form-control @error('title') is-invalid @enderror" 
               value="{{ old('title') }}"> 
        @error('title') 
          <div class="invalid-feedback">{{ $message }}</div> 
        @enderror 
      </div> 
      <div class="mb-3"> 
        <label>Description</label> 
        <textarea name="description" class="form-control">{{ old('description') 
}}</textarea> 
      </div> 
      <div>
    <label>Priorité</label>
    <select name="priority">
        <option value="haute">Haute</option>
        <option value="moyenne">Moyenne</option>
        <option value="basse">Basse</option>
    </select>
</div>
      <button type="submit" class="btn btn-success">enregistrer</button> 
      <a href="{{ route('tasks.index') }}" class="btn btn-secondary">Annuler</a> 
    </form> 
  </div> 
</div> 
<style>
body {
    background-color: #f4f6f9;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

.card {
    max-width: 600px;
    margin: 50px auto;
    border: none;
    border-radius: 12px;
    box-shadow: 0 4px 15px rgba(0,0,0,0.1);
    overflow: hidden;
}

.card-header {
    background: linear-gradient(135deg, #28a745, #20c997);
    color: white;
    padding: 15px 20px;
}

.card-body {
    padding: 25px;
    background-color: #fff;
}

.form-control {
    border-radius: 8px;
    border: 1px solid #ddd;
    padding: 10px;
}

.btn {
    border-radius: 8px;
    padding: 10px 15px;
}
</style>
@endsection