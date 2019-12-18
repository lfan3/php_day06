<?php
Class Exemple{
    private $_att = 0;

    public function getAtt(){
        return $this->_att;
    }
    public function setAtt($v){
        $this->_att = $v;
        return;
    }
    public function __construct(array $kwargs){
        print('Constructor is called ' . PHP_EOL);
        $this->setAtt($kwargs['arg']);
        return;
    }
    public function __destruct(){
        print('Destructor is called' . PHP_EOL);
        return;
    }
    //copie une instance dans deux zone de memoir
    public function __clone(){
        print('Clone is called' . PHP_EOL);
        return;
    }
}

print('---- Sharing ----' . PHP_EOL);
$instance1 =  new Exemple(array('arg' => 42));
$instance2 = $instance1;
print('$instance1->getAtt(): ' . $instance1->getAtt() . PHP_EOL);
print('$instance2->getAtt(): ' . $instance2->getAtt() . PHP_EOL);
$instance2->setAtt(30);
print('$instance1->getAtt()' . $instance1->getAtt(). PHP_EOL);
print('$instance2->getAtt()' . $instance2->getAtt(). PHP_EOL);

print('---- Cloning ----' . PHP_EOL);
$instance3 =  new Exemple(array('arg' => 42));
$instance4 = clone $instance1;
print('$instance3->getAtt(): ' . $instance3->getAtt() . PHP_EOL);
print('$instance4->getAtt(): ' . $instance4->getAtt() . PHP_EOL);
$instance2->setAtt(40);
print('$instance3->getAtt()' . $instance3->getAtt(). PHP_EOL);
print('$instance4->getAtt()' . $instance4->getAtt(). PHP_EOL);
