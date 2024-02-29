<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>badwords</title>
</head>

<body>
    <form action="landing.php" method="get">
        <div class="mb-3">
            <label for="user_paragraph" class="form-label">Inserire paragrafo</label>
            <textarea id="user_paragraph" name="user_paragraph" rows="4" cols="50" class="form-control" required></textarea>
        </div>
        <div class="mb-3">
            <label for="censored_word" class="form-label">Password</label>
            <input type="text" class="form-control" id="censored_word" name="censored_word" pattern="[A-Za-z]+" required>
        </div>
        <button type="submit" class="btn btn-primary">CENSURA</button>
    </form>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>