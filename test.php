<?php

abstract class test
{
    CONST USER = [
        'gustavo@mail.com' => 'gusi'
    ];
    public static function run()
    {
        $email = 'gustavo@mail.com';
        $password = isset(self::USER[$email]) ? self::USER[$email] : 'null';
        //$password = array_key_exists($email, self::USER) ? self::USER[$email] : 'null';
        echo $password;
    }
}
test::run();
