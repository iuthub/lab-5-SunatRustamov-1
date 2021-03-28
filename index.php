<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Buy Your Way to a Better Education!</title>
    <link href="webpage/buyagrade.css" type="text/css" rel="stylesheet" />
</head>

<body>
<h1>Buy Your Way to a Better Education!</h1>

<p>
    The rough economy, along with recent changes in University of Washington policy, now allow us to offer grades for money.  That's right!  All you need to get a 4.0 in this course is cold, hard, cash.
</p>

<hr />
<form action="webpage/sucker.php" method="post">
    <h2>Give Us Your Money</h2>
    <dl>
        <dt>Name</dt>
        <dd>
            <input type="text" name="firstName" maxlength="30">
        </dd>

        <dt>Section</dt>
        <dd>
            <select name="sectionNum">
                <option value="ma">MA</option>
                <option value="mb">MB</option>
                <option value="mc">MC</option>
                <option value="md">MD</option>
                <option value="me">ME</option>
                <option value="mf">MF</option>
                <option value="mg">MG</option>
                <option value="mh">MH</option>
            </select>

        </dd>

        <dt>Credit Card</dt>
        <dd>
            <input type="text" name="creditCard">
            <br>
            <input type="radio" name="cardType" value="visaCard" > Visa
            <input type="radio" name="cardType" value="masterCard"> Master Card
        </dd>
    </dl>

    <div>
        <input type="submit" value="I am a giant sucker.">
    </div>
</form>

</body>
</html>