<?php 
$paragraph = trim($_GET['paragraph']);
$badWord = trim($_GET['badWord']);
$censoredWord = str_replace($badWord, "***", $paragraph);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>censoredWords</title>
</head>
<body>
    <div>
        <h2 class="text-primary"> Il paragrafo originale è lungo:
            <?php 
                echo ' '.strlen($paragraph)
            ?>
        </h2>
        <p>
            <?php 
                echo ' '.$paragraph
            ?>
        </p>
        <h2> Il nuovo paragrafo è lungo:
            <?php 
                echo ''.strlen($censoredWord)
            ?>
        </h2>
        <p>
            <?php 
                echo ' '.$censoredWord 
            ?>
        </p>
    </div>
</body>
</html>