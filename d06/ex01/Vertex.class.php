<?php

require_once 'Color.class.php';

class Vertex{

	public static $verbose = False;

	private $_x = 0.0;
	private $_y = 0.0;
	private $_z = 0.0;
	private $_w = 1.0;
	private $_color = False;

	static public function doc()
	{
		return file_get_contents("Vertex.doc.txt") . PHP_EOL;
	}

	public function __construct(array $kwargs)
	{
		if (!isset($kwargs['x']) || !isset($kwargs['y']) || !isset($kwargs['z']))
            return False;
        if (isset($kwargs['color']) && !($kwargs['color'] instanceof Color))
            return False;
        if (!isset($kwargs['color']))
            $kwargs['color'] = new Color(['red' => 255, 'green' => 255, 'blue' => 255]);
        foreach (['x', 'y', 'z', 'w', 'color'] as $var)
            if (isset($kwargs[$var]))
                $this->{"_$var"} = $kwargs[$var];
		if (self::$verbose)
            echo $this->__toString() . " constructed." . PHP_EOL;
        return True;
	}

	public function __destruct()
	{
		if (self::$verbose)
            echo $this->__toString() . " destructed." . PHP_EOL;
	}

	public function __ToString()
	{
		$value = sprintf("Vertex( x: %.2f, y: %.2f, z:%.2f, w:%.2f", $this->_x, $this->_y, $this->_z, $this->_w);
		if (Vertex::$verbose)
			$value = $value . ", " . $this->_color;
		return $value . " )";
	}

 	public function getX()
    {
        return $this->_x;
    }
    public function setX($x)
    {
        $this->_x = $x;
    }
    public function getY()
    {
        return $this->_y;
    }
    public function setY($y)
    {
        $this->_y = $y;
    }
    public function getZ()
    {
        return $this->_z;
    }
    public function setZ($z)
    {
        $this->_z = $z;
    }
    public function getW()
    {
        return $this->_w;
    }
    public function setW($w)
    {
        $this->_w = $w;
    }
    public function getColor()
    {
        return $this->_color;
    }
    public function setColor(Color $color)
    {
        $this->_color = $color;
    }
    public function __get($name)
    {
        return false;
    }
    public function __set($name, $value)
    {
        return false;
    }


}

?>