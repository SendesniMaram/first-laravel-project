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

@if(count($articles) > 0)

    @foreach ($articles as $article)

        <div class="produit">
            <h3>{{ $article['nomarticle'] }}</h3>
            <p>Prix : {{ $article['prix'] }}</p>
            <p>Description : {{ $article['description'] }}</p>
        </div>

    @endforeach

@else

<p>Aucun produit disponible.</p>

@endif

</body>
</html>