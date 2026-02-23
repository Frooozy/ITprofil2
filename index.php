<?php
$content = file_get_contents('profile.json');
echo $content;

$Info_profile = json_decode($content, true);

$name = $Info_profile['name'];
$skills = $Info_profile['skill'];
$interests = $Info_profile['interests'];
?>

<?php
// Načtení dat ze souboru
$jsonData = file_get_contents('profile.json');

// Převod JSON na PHP pole (asociativní)
$profile = json_decode($jsonData, true);

// Základní proměnné
$name = $profile['name'] ?? 'Jméno nenalezeno';
$skills = $profile['skills'] ?? [];
$projects = $profile['projects'] ?? [];
?>

<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <title>Profil: <?php echo htmlspecialchars($name); ?></title>
</head>
<body>

    <h1><?php echo htmlspecialchars($name); ?></h1>

    <h2>Seznam dovedností:</h2>
    <ul>
        <?php foreach ($skills as $skill): ?>
            <li><?php echo htmlspecialchars($skill); ?></li>
        <?php endforeach; ?>
    </ul>

    <h2>Zájmy a projekty:</h2>
    <ul>
        <?php foreach ($interests as $interest): ?>
            <li><?php echo htmlspecialchars($project); ?></li>
        <?php endforeach; ?>
    </ul>

</body>
</html>