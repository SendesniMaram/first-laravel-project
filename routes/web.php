<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\TaskController;

/*
Route::get('/', [PageController::class, 'home']);
Route::get('/home', [PageController::class, 'home']);
Route::get('/about', [PageController::class, 'about']);
Route::get('/contact', [PageController::class, 'contact']);
Route::get('/services', [PageController::class, 'services']);
Route::get('/blog', [PageController::class, 'blog']);

Route::get('/profil', function () {
    return view('profil');
});

Route::get('/produits', function () {
    $produits = [
        ['nom' => 'Ordinateur', 'prix' => 899],
        ['nom' => 'Souris', 'prix' => 25],
        ['nom' => 'Clavier', 'prix' => 65],
        ['nom' => 'Écran', 'prix' => 299],
    ];
    return view('produits', ['produits' => $produits]);
});

Route::get('/utilisateur/{nom}', function ($nom) {
    return "<h1>Profil de $nom</h1><p>Bienvenue sur votre page !</p>";
});

Route::get('/bonjour/{nom?}', function ($nom = 'visiteur') {
    return "<p>Bienvenue sur votre page $nom !</p>";
});

Route::get('/produit/{id}', function ($id) {
    return "<h1>Produit #$id</h1>";
})->where('id', '[0-9]+');

Route::get('/calculer/{a}/{b}', function ($a, $b) {
    $somme = $a + $b;
    return "<p>La somme de a et b est : $somme</p>";
});

Route::get('/age/{age}', function ($age) {
    if ($age >= 18) {
        return "Vous êtes majeur.";
    }
    return "Vous êtes mineur.";
});

Route::get('/equipe/{membre?}', function ($membre = null) {
    $equipe = [
        'ala',
        'sara',
        'ranim',
        'yasmine'
    ];

    if ($membre === null) {
        return "Toute l'équipe";
    }

    if (in_array($membre, $equipe)) {
        return "Membre de l'équipe : " . $membre;
    }

    return "Ce membre n'existe pas";
});
*/
Route::get('/', fn() => redirect()->route('tasks.index'));
Route::resource('tasks', TaskController::class);