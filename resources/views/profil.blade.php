<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<title>Profil</title>

<style>
body {
    font-family: Arial, sans-serif;
    max-width: 600px;
    margin: 50px auto;
    padding: 20px;
    background: #f5f5f5;
}

.card {
    background: white;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 2px 2px 10px rgba(0,0,0,0.1);
}

h1 {
    color: #FF2D20;
    margin-top: 0;
}
</style>

</head>
<body>

<?php
$nom = "Marouma";
$age = 24;
$ville = "Tunis";
?>

<div class="card">

<h1>Profil de <?php echo $nom; ?></h1>

<p><strong>Âge :</strong> <?php echo $age; ?> ans</p>
<p><strong>Ville :</strong> <?php echo $ville; ?></p>

<?php if ($age >= 18) { ?>
<p style="color:green;">Vous êtes majeur</p>
<?php } else { ?>
<p style="color:orange;">Vous êtes mineur</p>
<?php } ?>

</div>

</body>
</html>