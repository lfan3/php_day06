<?php

Class ExempleStaticMethod {
    // static method
        //seulement dans le scope class
        // no $ signe $this n'exist pas dans static
        // can be acces by instance or no instance
    public static function doc(){
        return "static exemple";
    }
}

class ExempleStaticAttribut{
    //static attribut
        //dns le scope class
    public static $nbInstances = 0;
    public function __construct(){
        print('Constructor called' . PHP_EOL);
        self::$nbInstances++;
        return;
    }
    public function __destruct(){
        print('Destructor called' . PHP_EOL);
        self::$nbInstances--;
        print('nb instances: ' . self::$nbInstances . PHP_EOL);
        return;
    }
}



print('nb instances: ' . ExempleStaticAttribut::$nbInstances . PHP_EOL);
$instance1 = new ExempleStaticAttribut();
print('nb instances: ' . ExempleStaticAttribut::$nbInstances . PHP_EOL);
$instance2 = new ExempleStaticAttribut();
print('nb instances: ' . ExempleStaticAttribut::$nbInstances . PHP_EOL);
$instance2 = new ExempleStaticAttribut();
