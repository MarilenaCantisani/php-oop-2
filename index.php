<?php
require_once __DIR__ . "/models/Product.php";
require_once __DIR__ . "/models/User.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop</title>
</head>

<body>
    <header>
        <h1>Shop</h1>
    </header>
    <main>
        <section id="product">
            <h2>Products / <?= $product_1->getCategory() ?></h2>
            <h3><?= $book_1->getName() ?></h3>
            <address>Autore: <?= $book_1->getAuthor() ?></address>
            <span>Genere:<?= $book_1->getGenre() ?></span>
        </section>
        <section id="user">
            <h2>User</h2>
            <h3><?= $user_1->getFullName() ?></h3>
            <div>Email: <?= $user_1->getEmail() ?></div>
            <div>Numero: <?= $user_1->getNumber() ?></div>
        </section>
    </main>

</body>

</html>