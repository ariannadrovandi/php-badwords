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
        <p>
            <?php 
                echo $paragraph. '. Numero di caratteri nel paragrafo: '.strlen($paragraph)
            ?>
        </p>
        <p>
            <?php 
                echo $censoredWord. '. Numero di caratteri nel paragrafo: '.strlen($censoredWord)
            ?>
        </p>
    </div>
</body>
</html>