<?php
class Exemple {
// la valeur attribue est toujours constant pour l'attribut.
    public $att1 = 0;
    public $att2 = 0;
    public $att3 = 0;
    
    //$kwargs, key worlds arguments !!!!
    public function __construct(array $kwargs){
        print('Constructor called' . PHP_EOL);

        if ( array_key_exists('arg1', $kwargs ))
            $this->att1 = $kwargs['arg1'];
        else
            $this->att1 = -1; 
        
        $this->att2 = $kwargs['arg2'];

        if ( array_key_exists('arg3', $kwargs ))
            $this->att3 = $kwargs['arg3'];
        else
            $this->att3 = $this->att1; 
        print( '$this->att1: ' . $this->att1 . PHP_EOL);
        print( '$this->att2: ' . $this->att2 . PHP_EOL);
        print( '$this->att3: ' . $this->att3 . PHP_EOL);

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

$instance = new Exemple(array('arg1' => 53, 'arg2' => 42, 'arg3' => 31));
$instance = new Exemple(array('arg2' => 142));

?>