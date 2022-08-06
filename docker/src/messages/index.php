<?php

if( empty($_REQUEST) ){
    $response = $_ENV['RESPONSE'];
}elseif( !empty($_REQUEST['word'])){
    //$_ENV['RESPONSE'] = $_REQUEST['word'];
    writeData($_REQUEST['word'] . '', $fileName);
}

function readData()
{
    $fn = "env.txt";
    $file = fopen($fn, "r") or die("Unable to open file!");
    $res = fread($file, filesize($fn));
    fclose($file);
    return $res;
}

function writeData($text)
{
    $fn = "env.txt";
    $file = fopen($fn, "w") or die("Unable to open file!");
    fwrite($file, $text);
    fclose($file);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        span{
            text-transform: LOWERCASE;
        }
    </style>
    <title>Web App</title>
</head>

<body>
    <p><?php echo "ENV['RESPONSE']: "; ?><span><?php echo $_ENV['RESPONSE']; ?></span></p>
    <p><?php echo "In The File: "; ?><span><?php echo readData(); ?></span></p>

</body>

</html>