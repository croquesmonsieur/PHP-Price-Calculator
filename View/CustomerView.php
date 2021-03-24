<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>School of many</title>
    <meta name="author" content="Marte, Micha, Jens, Anton">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta property="og:title" content="School">
    <meta property="og:type" content="School of many">
    <meta property="og:url" content="../img/logo.jpeg">
    <meta property="og:image" content="img/logo.jpeg">


    <link rel="stylesheet" href="../../css/normalize.css">
    <link rel="stylesheet" href="../../css/main.css">

    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@1,600&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <meta name="theme-col p-2or" content="#fafafa">

</head>

<body>
<header>
    <h1>Home</h1>
</header>

<h2>Choose your product</h2>
<form method="post">
    <label class="form-label" for="product">Product:</label>
    <select name="product" id="product">
        <?php foreach ($products as $product): ?>
            <option value="<?php echo $product['name'] ?>"><?php echo $product['name'] ?></option>
        <?php endforeach; ?>
    </select>
    <label class="form-label" for="customer">Customer:</label>
    <select name="product" id="product">
        <?php foreach ($customers as $customer): ?>
            <option value="<?php echo $customer['firstname'] ?>"><?php echo $customer['firstname'] ?></option>
        <?php endforeach; ?>
    </select>
    <br>
    <input type="submit" value="Calculate"/>
</form>
</body>