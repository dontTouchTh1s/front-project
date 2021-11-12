<?php
$messageError = "";
include("../php_actions/contact_process.php")
?>
<!DOCTYPE html>
<html lang = "fa">
<head>
    <meta charset = "UTF-8">
    <meta name="description" content="contact us">
    <meta name="author" content="AliM">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../style/style.css">
    <script src="https://kit.fontawesome.com/f5a43cdea2.js" crossorigin="anonymous"></script>
    <title>ارتباط با ما</title>
</head>
<body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<div class="container">
    <div class ="right-pizza"></div>
    <div class="content">
        <div class="form-container">
            <h1>تماس با ما</h1>
            <p>پس از تکمیل اطلاعات خود، متن پیام خود را نوشته و از دکمه ارسال استفاده کنید.</p>
            <form class="form-vertical" method="post" action=<?= $_SERVER["PHP_SELF"]?>>
                <div class="form-group m-1">
                    <select class="form-control form-control-select control-filled"  value="" name="message-title" id="message-title">
                        <option value="1">شکایات</option>
                        <option value="2">کنترل کیفی</option>
                        <option value="3">انتقادات و پیشنهادات</option>
                    </select>
                    <label class="placeholder" for="message-title">موضوع پیام</label>
                    <div class ="form-control-border"></div>
                </div>

                <div class="form-group m-1">
                    <input type="text" class="form-control form-control-input control-filled" value="" name="name" id="name" aria-labelledby="name-placeholder">
                    <label class="placeholder" for="name" id ="name-placeholder" >نام</label>
                    <div class ="form-control-border"></div>
                </div>

                <div class="form-group m-1">
                    <input type="email" class="form-control form-control-input control-filled" value="" name="email" id="email" aria-labelledby="email-placeholder">
                    <label class="placeholder" for="email" id ="email-placeholder" >ایمیل</label>
                    <div class ="form-control-border"></div>
                </div>

                <div class="form-group m-1">
                    <textarea class="form-control form-control-textarea control-filled" value="" name="message" id="message" aria-labelledby="message-placeholder"></textarea>
                    <label class="placeholder" for="message" id ="message-placeholder" >متن پیام</label>
                    <span class="textarea-hidden-overflow"></span>
                    <div class ="form-control-border"></div>
                </div>

                <div class="form-group h-1">
                    <label for="remember-me" class="checkbox-label">مرا به خاطر داشته باش</label>
                    <div class="checkbox-parent">
                        <input id="remember-me" type="checkbox" class ="form-control form-control-checkbox" >
                        <div class="checkbox-background">
                            <i class="fas fa-check"></i>
                        </div>
                        <div class="checkbox-ripple"></div>
                    </div>
                </div>

                <div class="form-group h-auto">
                    <button type="submit" class="btn btn-filled">ارسال</button>
                </div>
                <span><?= $messageError ?></span>
            </form>
        </div>
    </div>
</div>
<script src="../js/form_controls.js" type="text/javascript"></script>
<script src="../js/ripple_effect.js" type="text/javascript"></script>
</body>
</html>