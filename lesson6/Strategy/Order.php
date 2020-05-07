<?php


class Order
{
    private $sum;
    private $phone;
    private $products;

    public function __construct(int $id)
    {
        $this->products = $id;
        $this->sum = $id;
        $this->phone = $id;
    }

    private function getProducts(int $id) {
        return [['носоки красные', 'большие'], ['носоки синие', 'маленькие']];
    }

    private function getSum(int $id) {
        return 320;
    }

    public function setPhone(int $id, int $phone) {
        $this->phone = $phone;
    }

    private function parseProductToString(array $products) {
        $productsString = '';
        foreach ($products as $product) {
            $productsString .= "Название продукта: {$product[0]}, цвет: {$product[1]}".PHP_EOL;
        }
        return $productsString;
    }

    public function paymentOrder(IPayment $payment) {
        echo 'Начинаем оплату'.PHP_EOL;
        $productsString = $this->parseProductToString($this->products);
        if($payment->payment($productsString, $this->sum, $this->phone)) {
            echo 'Оплата успешно совершена. Спасибо за ваш заказ!'.PHP_EOL;
        } else {
            echo 'Что-то пошло не так. Повторите пожалуйста позже.'.PHP_EOL;
        }
    }

}