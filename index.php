<?php

spl_autoload_register(function ($class) {
    $class = str_replace('MyProject\\', '', $class);
    $class = str_replace('\\', DIRECTORY_SEPARATOR, $class);
    $filepath = __DIR__ . DIRECTORY_SEPARATOR . 'includes' . DIRECTORY_SEPARATOR . 'classes' . DIRECTORY_SEPARATOR . $class . '.php';
    require_once $filepath;
});

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Anime Character Hierarchy — Assignment 2</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>⚔️ Anime Character Hierarchy</h1>

    <?php

    use MyProject\Characters\Heroes\Swordsman;
    use MyProject\Characters\Heroes\Mage;
    use MyProject\Characters\Villains\DarkLord;
    use MyProject\Characters\Support\Mentor;

    // Swordsman  (Swordsman → Hero → AnimeCharacter) + Trainable trait
    echo "<h2><span class='tag'>Swordsman → Hero → AnimeCharacter</span>Roronoa Zoro</h2>";
    $zoro = new Swordsman('Roronoa Zoro', 'One Piece', 4200, 'Santoryu: Oni Giri', 'Wado Ichimonji', 'Three Sword Style');
    echo "<p>" . $zoro->introduce()          . "</p>";
    echo "<p>" . $zoro->fight('Mihawk')      . "</p>";
    echo "<p>" . $zoro->levelUp(300)         . "</p>";
    echo "<p>" . $zoro->train('Koby')        . "</p>";

    // Mage  (Mage → Hero → AnimeCharacter)
    echo "<h2><span class='tag'>Mage → Hero → AnimeCharacter</span>Natsu Dragneel</h2>";
    $natsu = new Mage('Natsu Dragneel', 'Fairy Tail', 5800, 'Fire Dragon Roar', 'Fire');
    echo "<p>" . $natsu->introduce()         . "</p>";
    echo "<p>" . $natsu->fight('Zeref')      . "</p>";
    echo "<p>" . $natsu->levelUp(500)        . "</p>";

    // DarkLord  (DarkLord → Villain → AnimeCharacter)
    echo "<h2><span class='tag'>DarkLord → Villain → AnimeCharacter</span>Madara Uchiha</h2>";
    $madara = new DarkLord('Madara Uchiha', 'Naruto Shippuden', 9500, 'Activate the Infinite Tsukuyomi', 1000);
    echo "<p>" . $madara->introduce()              . "</p>";
    echo "<p>" . $madara->fight('Hashirama')       . "</p>";
    echo "<p>" . $madara->levelUp(200)             . "</p>";
    echo "<p>Minion army size: " . $madara->getMinionCount() . "</p>";

    // Mentor  (Mentor → SupportCharacter → AnimeCharacter) + Trainable trait
    echo "<h2><span class='tag'>Mentor → SupportCharacter → AnimeCharacter</span>Jiraiya</h2>";
    $jiraiya = new Mentor('Jiraiya', 'Naruto', 8800, 'Sage Sensei', 'Never give up, that is the ninja way.', 'Sage Mode Training');
    echo "<p>" . $jiraiya->introduce()             . "</p>";
    echo "<p>" . $jiraiya->fight('Pain')           . "</p>";
    echo "<p>" . $jiraiya->train('Naruto')         . "</p>";
    echo "<p>Training style: " . $jiraiya->getTrainingStyle() . "</p>";

    ?>
</body>
</html>