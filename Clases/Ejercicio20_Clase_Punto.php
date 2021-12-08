<?php

class Punto
{
    private $_x = 0;
    private $_y = 0;

    public function __construct($x, $y)
    {
        $this->_x = $x;
        $this->_y = $y;
    }

    public function get_X()
	{
		return $this->_x;
	}

    public function get_Y()
	{
		return $this->_y;
	}
}

?>