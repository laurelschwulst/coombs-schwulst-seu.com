<!DOCTYPE html>
<html>

<head>

  <title>Thank you!</title>

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
  <link rel="shortcut icon" type="image/png" href="images/favicon.png" />
  <link rel="stylesheet" href="../css/style.css" />

</head>

<!--


                      .      .       .       .
  .   .       .          .      . .      .         .          .    .
         .       .         .    .   .         .         .            .
    .   .    .       .         . . .        .        .     .    .
 .          .   .       .       . .      .        .  .              .
      .  .    .  .       .     . .    .       . .      .   .        .
 .   .       .    . .      .    . .   .      .     .          .     .
    .            .    .     .   . .  .     .   .               .
     .               .  .    .  . . .    .  .                 .
                        . .  .  . . .  . .
                            . . . . . .
                              . . . .
                               . . .
                                ...

-->

<body>

<?php

if(isset($_POST['email'])) {
    $data_simple = $_POST['email'];
    $data = $_POST['email'] . "\n";
    $ret = file_put_contents('emails.txt', $data, FILE_APPEND | LOCK_EX);
    if($ret === false) {
        die('There was an error writing this file …');
    }
    else {
        echo "Thanks for your interest … You are now subscribed, <i>$data_simple</i>.";
    }
}
else {
   die('No post data to process …');
}

?>

<p>
  <a href="../index.html" class="button">Return</a>
</p>

</body>

</html>
