<?php
// 1. Načtení obsahu souboru profile.json
// Funkce file_get_contents() přečte celý soubor do jednoho řetězce.
$jsonString = file_get_contents('profile.json');

// 2. Převod JSON řetězce na PHP asociativní pole
// Parametr 'true' zajistí, že se data převedou na pole, nikoliv na objekt.
$data = json_decode($jsonString, true);

// Příprava proměnných z pole (s kontrolou, zda existují)
$name = $data['name'] ?? 'Jméno nebylo zadáno';
$skills = $data['skill'] ?? []; // Ve tvém JSONu je klíč "skill"
$interests = $data['interests'] ?? [];
?>

<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil: <?php echo htmlspecialchars($name); ?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="container">
        <h1><?php echo htmlspecialchars($name); ?></h1>

        <h2>Moje dovednosti</h2>
        <ul>
            <?php foreach ($skills as $s): ?>
                <li><?php echo htmlspecialchars($s); ?></li>
            <?php endforeach; ?>
        </ul>

        <h2>Zájmy a projekty</h2>
        <ul>
            <?php foreach ($interests as $interest): ?>
                <li><?php echo htmlspecialchars($interest); ?></li>
            <?php endforeach; ?>
        </ul>
    </div>

</body>
</html>