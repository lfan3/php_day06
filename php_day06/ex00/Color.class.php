<?php

class Color {
// la valeur attribue est toujours constant pour l'attribut.
    public $red = 0;
    private $green = 0;
    public $blue = 0;
    public static $verbose = False;

    function getRed(){
        return $this->red;
    }
    function getGreen(){
        return $this->green;
    }
    function getBlue(){
        return $this->blue;
    }
    public static function doc(){
        return (file_get_contents('Color.doc.txt'));
    }
    function __construct(array $kwargs){
        if ( array_key_exists('rgb', $kwargs )){
            $kwargs['rgb'] = round($kwargs['rgb']);
            $this->red = ($kwargs['rgb'] & 0xFF0000 >> 16);
            $this->green = ($kwargs['rgb'] & 0xFF00 >> 8);
            $this->blue = ($kwargs['rgb'] & 0xFF);
        }
        else if( array_key_exists('red', $kwargs))
            $this->red = round($kwargs['red']);
        else if( array_key_exists('green', $kwargs))
            $this->green = round($kwargs['green']);
        else if ( array_key_exists('blue', $kwargs))
            $this->blue = round($kwargs['blue']);
        if (self::$verbose == True)
            print('Color( red:  ' . sprintf("%3s",$this->red) . ', green:  ' . sprintf("%3s",$this->getGreen()). ', blue:  ' . sprintf("%3s", $this->getBlue()) . ') constructed.' . PHP_EOL);
       /*
        if ($this->red < 0)
            $this->red = 0;
		if ($this->green < 0)
			$this->green = 0;
		if ($this->blue < 0)
			$this->blue = 0;
		if ($this->red > 255)
			$this->red = 255;
		if ($this->green > 255)
			$this->green = 255;
		if ($this->blue > 255)
			$this->blue = 255;     */      
        return;
    }
    public function __toString(){
        return 'Color( red:  ' . $this->getRed() . ', green:  ' . $this->getGreen() . ', blue:  ' . $this->getBlue() . ' )';
    }
    public function add($color){
        $n_color = new Color( array('red' =>($this->red + $color->red), 'green' =>($this->green + $color->green), 'blue' =>($this->blue + $color->blue)));
        return $n_color;
    }
    public function sub($color){
        $n_color = new Color( array('red' =>($this->red - $color->red), 'green' =>($this->green - $color->green), 'blue' =>($this->blue - $color->blue)));
        return $n_color;
    }
    public function mult($facteur){
        $n_color = new Color( array('red' =>($this->red * $facteur), 'green' =>($this->green * $facteur), 'blue' =>($this->blue * $facteur)));
        return $n_color;
    }
    function __destruct(){
        if(self::$verbose == True)
            print('Color( red:  ' . $this->getRed() . ', green:  ' . $this->getGreen() . ', blue:  ' . $this->getBlue() . ') destructed.' . PHP_EOL);
        return;
    }
}

?>