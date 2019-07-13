<?php include '../vendor/autoload.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>FizzBuzz Test</title>
</head>
<body>
<?php $fizzbuzz = new \App\FizzBuzz() ?>

<?= $fizzbuzz->playFizzBuzz(100); ?>
</body>
</html>