<?php
    Class Exemple {
        private $_att = 0;

        public function getAtt(){
            return $this->_att;
        }
        public function setAtt( $v ){
            $this->_att = $v;
            return;
        }

        public function __construct(array $kwargs) {
            print ('Constructor is called' . PHP_EOL);
            $this->setAtt( $kwargs['arg']);
            return;
        }

        public function __destruct(){
            print('Desctructor called' . PHP_EOL);
            return;
        }

        public function __toString(){
            return 'Exemple( $_att = ' . $this->getAtt() . ')';
        }
    }

    $instance = new Exemple( array('arg' => 42));
    print( $instance . PHP_EOL );