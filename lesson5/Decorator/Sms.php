<?php


class Sms extends SendDecorator
{
    public function sendSms($msg) {
        echo "Отправляем {$msg} по sms".PHP_EOL;
    }

    public function send(): string
    {
        $msg = $this->content->send();
        $this->sendSms($msg);
        return $msg;
    }
}