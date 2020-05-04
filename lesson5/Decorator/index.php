<?php

spl_autoload_register(function ($classname) {
    include_once ($classname.'.php');
});

function test(string $msg) {
    $msgSend = new Sms(
        new Social(
            new Notifier($msg)
        )
    );
    $msgSend->send();
}

test("привет");