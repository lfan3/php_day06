<?php
class Exemple {
// la valeur attribue est toujours constant pour l'attribut.
    public $publicFoo = 0;
    private $_privateFoo = 'hello';

    function __construct(array $kwargs){
        print('Constructor called' . PHP_EOL);
        print('$this->publicFoo ' . $this->publicFoo . PHP_EOL);
        $this->publicFoo = 42;
        print('$this->publicfoo ' . $this->publicFoo . PHP_EOL);

        print('$this->privateFoo ' . $this->_privateFoo . PHP_EOL);
        $this->_privateFoo = 'world';
        print('$this->privateFoo ' . $this->_privateFoo . PHP_EOL);
        $this->publicBar();

        $this->publicBar();
        $this->_privateBar();
        return;
    }

    function __destruct(){
        print('Destructor called' . PHP_EOL);
        return;
    }

    function publicBar(){
        print('Method publicbar called' . PHP_EOL);
        return;
    }
    private function _privateBar(){
        print('Method _private bar called' . PHP_EOL);
    }

}

$instance = new Exemple();

?>