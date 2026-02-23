<?php
$content = file_get_contents('profile.json');
echo $content;

$Info_profile = json_decode($content, true);

$name = $Info_profile['name'];
$skills = $Info_profile['skill'];
$interests = $Info_profile['interests'];
?>