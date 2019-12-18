<?php
Class Exemple {

    public function __construct(){
        print('Constructor called' . PHP_EOL);
        return;
    }

    public function __destruct(){
        print('Destructor called' . PHP_EOL);
        return;
    }

    public function __call($f, $args){
        print('Attemp to call function \'' . $f . '\' with param ');
        print_r($args);
        return;
    }

    public static function __callstatic($f, $args){
        print('Attempt to call static function \'' . $f . '\' with param ');
        print_r($args);
    }
}

$instance = new Exemple();
$instance->foo(1, 2, 3);
Exemple :: bar(4,5,4);

