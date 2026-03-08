<?php

use Illuminate\Support\Facades\Route;

Route::get('/home', function () {
    return view('home');
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



Route::get('/', function () {
    return view('welcome');
    });
Route::get('/profil', function () {
    return view('profil');
});
Route::get('/about', function(){
    return '<h1>a propos de nous</h1>
    <p>nous sommes une equipe laravel! </p>';
});
Route::get('/contact', function(){
    return '<h1>contactez-nous</h1>
    <p>Email : contact@laravel.com</p>';
});

Route::get('/services', function(){
    return '<h1>Nos services</h1>
    <ul>
    <li>dev. web</li>
    <li>Applications mobile</li>
    </ul>';
});
Route::get('/utilisateur/{nom}', function($nom){
    return "<h1>profile de $nom</h1>
    <p>bienvenue sur votre page !</p>";
});
Route::get('/bonjour/{nom?}', function($nom= 'visiteur'){
    return "<p>bienvenue sur votre page $nom !</p>";
});

Route::get('/produit/{id}', function($id){
    return "<h1>produit #$id</h1>";
})-> where('id' , '[0-9]+');

Route::get("/calculer/{a}/{b}", function($a , $b){
    $somme = $a+$b;
    return "<p>la somme de a et b est : $somme</p>";
});
Route::get("/age/{age}", function($age){
    if ($age >= 18) {
        return "Vous êtes majeur.";
    } else {
        return "Vous êtes mineur.";
    }
});

Route::get("/equipe/{membre?}", function($membre = null){
    $equipe = [
        "ala",
        "sara",
        "ranim",
        "yasmine"
    ];
 
    if ($membre === null) {
        return "Toute l'équipe";
    }
 
    if (in_array($membre, $equipe)) {
        return "Membre de l'équipe : " . $membre;
    }
 
    return "Ce membre n'existe pas";
});

 
