<?php


class Notifier implements ISend
{
    private $messange;

    public function __construct(string $messange) {
        $this->messange = $messange;
    }

    private function sendMail(): void {
        echo "Отправляем {$this->messange} по почте".PHP_EOL;
    }

    public function send(): string {
        $this->sendMail();
        return $this->messange;
    }
}