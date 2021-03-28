
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="buyagrade.css" type="text/css" rel="stylesheet" />
    <title>Document</title>
</head>
<body>
    <?php if ($_REQUEST['firstName'] =='' or $_REQUEST['sectionNum'] =='' or $_REQUEST['creditCard'] == '' or $_REQUEST['cardType'] =='' ) { ?>
        <h2>Sorry</h2>
        <p>You didn't fill out the form completely, <a href="../index.php">try again!</a></p>

    <?php } else {?>
        <?php
        $text = $_REQUEST['firstName'].';'.$_REQUEST['sectionNum'].';'.$_REQUEST['creditCard'].';'.$_REQUEST['cardType'].PHP_EOL;
        file_put_contents('suckers.txt',$text, FILE_APPEND)?>
        <h2>Thanks, sucker!</h2>
        <p>Your validation has been recorded</p>

        <dl>
            <dt>Name</dt>
            <dd>
                <?= $_REQUEST['firstName']?>
            </dd>

            <dt>Section</dt>
            <dd>
                <?= $_REQUEST['sectionNum']?>
            </dd>

            <dt>Credit Card</dt>
            <dd>
                <?=$_REQUEST['creditCard']?> (<?= $_REQUEST['cardType']?>)
            </dd>
        </dl>


        <h2>Here are all the suckers who have submitted here</h2>
        <?= file_get_contents('suckers.txt') ?>
    <?php } ?>
</body>
</html>
