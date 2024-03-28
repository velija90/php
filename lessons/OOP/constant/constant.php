<?php

class GoodBye {

    const LEAVING_MESSAGE = "Thank you for visiting w3Schools.com!";
    public function byebye{
        echo self ::LEAVING_MESSAGE
    }
}

$goodbye = new Goodbye();
$goodbye->byebye();