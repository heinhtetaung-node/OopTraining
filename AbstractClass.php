<?php

/**
 * Abstract class
 */
abstract class PersonAbstractClass
{
    abstract public function register() : string;
    abstract public function login() : int;
    abstract public function logout() : int;
}

class Customer extends PersonAbstractClass {
    public function register() : string {
        return 'register from parent class';
    }

    public function login() : int {
        return 1;
    }

    public function logout() : int {
        return 0;
    }
}

$customer = new Customer();
echo $customer->register();
echo '<br>';
echo $customer->login();
echo '<br>';
echo $customer->logout();
echo '<br>';










