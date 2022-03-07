<?php
include("path.php");
include SITE_ROOT . '/app/database/db.php';


$orders = selectAll('product_order',['id_user' => $_SESSION['id']]);
//foreach ($orders as $key => $order) :
//$products = selectProductsForProfile('product_order','product',$order['id_product']);
//
//endforeach;
//tt($orders);

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
<?php include("app/include/header.php"); ?>
<div class="container ">
    <h2>Заказы</h2>

    <table class="table table-hover">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Товар</th>
        <th scope="col">Количество</th>
        <th scope="col">Стоимость</th>
        <th scope="col">Статус</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($orders as $key => $order) : ?>
        <tr>
        <th scope="row"><?= $key + 1; ?></th>
        <td><?=$order['id_product'] ?></td>
        <td><?=$order['count'] ?></td>
        <td><?=$order['result'] ?> руб.</td>
        <td>готов</td>
    </tr>
    <?php endforeach; ?>

    </tbody>
</table>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>
