<?php
include("__PATH__.php");
Authentication::check_login();
$productBasketListInfo = $productBasketList = $mbList = [];
/** @var array $productsList */
include(USERS_PATH . "/products/dashboard/liked-products-action.php");
?>
<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="contact us">
    <meta name="author" content="AliM">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?= STYLE_URL . '/style.css' ?>">
    <script src="https://kit.fontawesome.com/f5a43cdea2.js" crossorigin="anonymous"></script>
    <title>محصوات مورد علاقه</title>
</head>
<body class="layout">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<?php
include(PUBLIC_PATH . '/header.php');
$onFocus = "محصولات موردعلاقه";
if (Authorisation::get_roll() >= ROLL_ADMIN)
    include(ASSETS_PATH . "/template/admin-navigation-drawer.php");
else
    if (Authorisation::get_roll() >= ROLL_ADMIN)
        include(ASSETS_PATH . "/template/admin-navigation-drawer.php");
    else
        include(ASSETS_PATH . "/template/user-navigation-drawer.php");
?>
<aside>
    <div class="content content-aside">
    </div>
</aside>
<div class="container">
    <div class="content content-products">
        <div class="card-container">
            <?php
            if ($productsList != []) {
                foreach ($productsList as $product) {
                    $card = new card(CARD_FILLED, $product[0]);
                    $card->title($product[3]);
                    $card->price($product[4]);
                    $card->description($product[5]);
                    $card->picture($product[6]);
                    $card->buy_button("خرید", 5, CARD_BTN_OUTLINED, "fas fa-shopping-cart");
                    $card->action(CARD_ACTION_LIKE);
                    $card->action(CARD_ACTION_BOOKMARK);
                    $card->add();
                }
            } else echo "<h1>محصولی برای نمایش وجود ندارد.</h1>"
            ?>
        </div>
    </div>
    <div class="pError">
        <span></span>
    </div>
    <?php
    foreach ($mbList as $ms)
        $ms->add();
    ?>
</div>
<?php include(PUBLIC_PATH . '/footer.php'); ?>
<script src="<?= JS_URL . '/javaScriptDynamicLoad.js' ?>" type="text/javascript"></script>
</body>
</html>