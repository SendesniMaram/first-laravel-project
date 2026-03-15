<!--<!DOCTYPE html> 
<html lang="fr"> 
<head> 
    <meta charset="UTF-8"> 
    <title>{{ $titre }}</title> 
 
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
    </style> 
</head> 
<body> 
 
    <h1>{{ $titre }}</h1> 
    <p>{{ $description }}</p> 
 
</body> 
</html> -->
@extends('layout.app') 
@section('title', 'À propos') 
@section('content') 
<h1 style="color: #FF2D20;">{{ $titre }}</h1> 
<p style="font-size: 18px; line-height: 1.6;">{{ $description }}</p> 
<h2 style="margin-top: 30px;">Notre équipe</h2> 
<div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px; margin
top: 20px;"> 
        <div style="background: white; padding: 20px; border: 2px solid #FF2D20; border
radius: 10px;"> 
            <h3>Alice Martin</h3> 
            <p>CEO & Fondatrice</p> 
        </div> 
        <div style="background: white; padding: 20px; border: 2px solid #FF2D20; border
radius: 10px;"> 
            <h3>Bob Dupont</h3> 
            <p>Lead Developer</p> 
        </div> 
        <div style="background: white; padding: 20px; border: 2px solid #FF2D20; border
radius: 10px;"> 
            <h3>Claire Lefebvre</h3> 
            <p>Designer</p> 
        </div> 
    </div> 
 
@endsection 
