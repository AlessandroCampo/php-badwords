<?php
$user_paragraph = $_GET['user_paragraph'];
$censored_word = $_GET['censored_word'];

function censorParagraph($user_paragraph, $censored_word)
{
    if (str_contains($user_paragraph, $censored_word)) {
        $user_paragraph = str_replace($censored_word, '***', $user_paragraph);
    }
    return $user_paragraph;
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing</title>
</head>

<body>
    <p>
        <? echo censorParagraph($user_paragraph, $censored_word) ?>
    </p>
</body>

</html>