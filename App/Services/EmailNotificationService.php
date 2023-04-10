<?php


namespace App\Services;


use App\Contracts\UserNotificationInterface;
use App\Model\User;

class EmailNotificationService implements UserNotificationInterface
{
    public function notifyUser(User $user): void
    {
        echo 'Отправка email на ' . $user->email . PHP_EOL;
    }
}