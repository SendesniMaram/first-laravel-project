<!-- <!DOCTYPE html> 
<html lang="fr"> 
<head> 
    <meta charset="UTF-8"> 
    <title>Contact</title> 
 
    <style> 
        body { 
            font-family: Arial; 
            max-width: 800px; 
            margin: 50px auto; 
            padding: 20px; 
        } 
 
        h1 { 
            color: #FF2D20; 
        } 
 
        .info { 
            background: #f5f5f5; 
            padding: 15px; 
            margin: 10px 0; 
            border-left: 4px solid #FF2D20; 
        } 
    </style> 
</head> 
<body> 
 
    <h1>Contactez-nous</h1> 
 
    <div class="info"> 
        <strong>Email :</strong> {{ $contacts['email'] }} 
    </div> 
 
    <div class="info"> 
        <strong>Téléphone :</strong> {{ $contacts['telephone'] }} 
    </div> 
 
    <div class="info"> 
        <strong>Adresse :</strong> {{ $contacts['adresse'] }} 
    </div> 
 
</body> 
</html> -->
@extends('layout.app') 
 
@section('title', 'Contact') 
 
@section('content') 
 
    <h1 style="color: #FF2D20;">Contactez-nous</h1> 
 
    <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px; margin
top: 30px;"> 
        <div style="background: #f5f5f5; padding: 20px; border-left: 4px solid #FF2D20;"> 
            <h3>Email</h3> 
            <p>{{ $contacts['email'] }}</p> 
        </div> 
 
        <div style="background: #f5f5f5; padding: 20px; border-left: 4px solid #FF2D20;"> 
            <h3>Téléphone</h3> 
            <p>{{ $contacts['telephone'] }}</p> 
        </div> 
 
        <div style="background: #f5f5f5; padding: 20px; border-left: 4px solid #FF2D20;"> 
            <h3>Adresse</h3> 
            <p>{{ $contacts['adresse'] }}</p> 
        </div> 
    </div> 
 
@endsection 
