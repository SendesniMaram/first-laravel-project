<!--<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0"> <title>Accueil</title>
<style>
body {
font-family: Arial, sans-serif;
max-width: 800px;
margin: 50px auto;
padding: 20px;
}
h1 {
color: #FF2D20;
} </style>
</head>
<body>
<h1>Bienvenue sur mon site Laravel</h1>
<p>Ceci est ma première vue Blade !</p>
<p>Date actuelle : {{ date('d/m/Y') }}</p>
</body> </html> -->
@extends('layout.app') 
 
@section('title', 'Accueil') 
 
@section('content') 
 
    <h1 style="color: #FF2D20;">Bienvenue sur Mon Site</h1> 
    <p>Découvrez nos services et contactez-nous !</p> 
 
    <div style="background: #f5f5f5; padding: 30px; margin-top: 30px; border-radius: 
10px;"> 
        <h2>Pourquoi nous choisir ?</h2> 
        <ul> 
            <li>Expertise Laravel</li> 
            <li>Support 24/7</li> 
            <li>Prix compétitifs</li> 
</ul> 
</div> 
@endsection
