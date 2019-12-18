<?php
Class Exemple {
    const CST1 = 1;
    const CST2 = 2;

    public function __construct(array $kwargs){
        print('Constructor is called' . PHP_EOL);
        //self::CST1  pour le constant
        if ($kwargs['arg'] == self::CST1)
            print('arg is CST1' . PHP_EOL);
        else if ($kwargs['arg'] == self::CST2)
            print('arg is CST2' .  PHP_EOL);
        else
            print('arg is not class constant' . PHP_EOL);
        return ;
    }

    public function __destruct(){
        print('Destructor is called' . PHP_EOL);
        return;
    }
}

$instance1 = new Exemple( array('arg' => Exemple::CST1));
$instance2 = new Exemple( array('arg' => Exemple::CST2));
$instance3 = new Exemple( array('arg' => 4));
