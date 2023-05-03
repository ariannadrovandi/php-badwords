<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>php-badwords</title>
</head>
<body class="bg-primary-subtle d-flex align-items-center justify-content-center p-5">
    <div class="w-75 d-flex align-items-center justify-content-center flex-column">
        <h1 class="fs-1">BadWords</h1>
        <form class="container mt-5 mx-auto" action="./page/censoredWords.php">
            <label class="form-label mt-3 text-primary" for="paragraph">Inserisci il paragrafo</label>
            <input class="form-control w-75" type="text" name="paragraph" id="paragraph" placeholder="Inserisci il paragrafo">
            <label class="form-label mt-3 text-primary" for="badWord">Inserisci la parola da censurare</label>
            <input class="form-control w-50 border bg-danger-subtle text-danger" type="text" name="badWord" id="badWord" placeholder="Inserisci la parola da censurare">
            <input class="btn mt-3 btn-primary" type="submit" value="Invia">
        </form>
    </div>
</body>
</html>