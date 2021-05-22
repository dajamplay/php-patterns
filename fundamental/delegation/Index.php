<?php include '../../vendor/autoload.php';

/*
 * Design Patterns: fundamental
 * Delegation
 * Делегирование
 */

class Index {

    public static function show() {

        $data = new AppMessenger();

        $data->toEmail()
            ->setSender('sender')
            ->setRecipient('recipient')
            ->setMessage('message')
            ->send();

        var_dump($data);

        $data->toSMS()
            ->setSender('sender')
            ->setRecipient('recipient')
            ->setMessage('message')
            ->send();

        var_dump($data);

    }

}

Index::show();