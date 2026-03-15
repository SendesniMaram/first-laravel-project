<html lang="fr">
<head>
<style>
.produit {
    border-left: 4px solid #FF2D20;
}
</style>
</head>

<body>

<h1>Liste des articles</h1>

@if(count($produits) > 0)

@foreach ($produits as $article)

<div class="produit">
<h3>{{ $article['nom'] }}</h3>
<p>Prix : {{ $article['prix'] }} €</p>

</div>

@endforeach

@else

<p>Aucun produit disponible.</p>

@endif

</body>
</html>