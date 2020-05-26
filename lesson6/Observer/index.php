<?php
//Наблюдатель: имеется сайт HandHunter.gb. На нем работники могут подыскать себе вакансию РНР программиста.
//Необходимо реализовать классы искателей с их именем, почтой и стажем работы.
//Также реализовать возможность в любой момент встать на биржу вакансий (подписаться на уведомления), либо же напротив выйти из гонки за местом.
//Таким образом, как только появится новая вакансия программиста, все жаждущие автоматически получат уведомления на почту (можно реализовать условно)
spl_autoload_register(function ($classname) {
    include_once ($classname.'.php');
});


$user1 = new User("user1", "mail1", "resume1");
$user2 = new User("user2", "mail2", "resume2");
$user3 = new User("user3", "mail3", "resume3");

$observable = UserObservable::getInstance();

$observable->attach($user1, "PHP");
$observable->attach($user2, "JavaScript");
$observable->attach($user3);

$observable->notify("PHP");
$observable->notify("JavaScript");
$observable->notify();

$observable->detach($user2, "JavaScript");
$observable->notify("JavaScript");

