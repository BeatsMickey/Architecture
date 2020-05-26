<?php


class Social extends SendDecorator
{
    public function sendSocial($msg) {
        echo "Отправляем {$msg} по социалке".PHP_EOL;
    }

    public function send(): string
    {
        $msg = $this->content->send();
        $this->sendSocial($msg);
        return $msg;
    }
}