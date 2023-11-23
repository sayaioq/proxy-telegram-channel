<?php

error_reporting(0);
session_start();
    include_once 'captcha.php';
    //generate and show captcha
    $captcha_str=CAPTCHA::show(array(
                                'font'=>
                                        array(
                                            0=>'fonts/1.ttf',
                                            1=>'fonts/2.ttf',
                                            2=>'fonts/1.ttf',
                                            3=>'fonts/2.ttf',
                                            4=>'fonts/1.ttf',
                                        )
                                ),$_GET["captcha"]
                            );
    $_SESSION['captcha']=$captcha_str;//set captcha value into session
    unlink("error_log");

<?php

error_reporting(0);
session_start();
    include_once 'captcha.php';
    //generate and show captcha
    $captcha_str=CAPTCHA::show(array(
                                'font'=>
                                        array(
                                            0=>'fonts/1.ttf',
                                            1=>'fonts/2.ttf',
                                            2=>'fonts/1.ttf',
                                            3=>'fonts/2.ttf',
                                            4=>'fonts/1.ttf',
                                        )
                                ),$_GET["captcha"]
                            );
    $_SESSION['captcha']=$captcha_str;//set captcha value into session
    unlink("error_log");

    ?>

    ?>
