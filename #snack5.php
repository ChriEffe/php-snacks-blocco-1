<!-- ## Snack 5
Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo. -->

<?php 

$text = 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugit velit officiis, cumque unde odit assumenda sit nam rerum eos. nemo nesciunt quia distinctio cupiditate a ut. Voluptatum et possimus odit?';

$textArray = explode(".", $text);

foreach ($textArray as $value) {
    var_dump($value);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p><?php echo $textArray[0] ?></p>
    <p><?php echo $textArray[1] ?></p>
    <p><?php echo $textArray[2] ?></p>
    <p><?php echo $textArray[3] ?></p>
</body>
</html>