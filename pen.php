<?php

/**
 * Class SimplePen
 * basic class for pen or pencil
 */
class SimplePen
{
    public $core;
    public $penBody;
    public $colorBody;

    /**
     * SimplePen constructor.
     * @param string $core
     * @param string $penBody
     * @param string $colorBody
     */
    function __construct($core = 'ink',$penBody = 'plastic',
                         $colorBody = 'green')
    {
        $this->core      = $core;
        $this->penBody   = $penBody;
        $this->colorBody = $colorBody;
    }


    function write()
    {
        echo "This " . $this->penBody . " pen writes by " . $this->core;
        echo "<hr>";
    }

}

/**
 * Class FountainPen
 * make fountain pen
 */
class FountainPen extends SimplePen
{
    public $pushButton;

    /**
     * FountainPen constructor.
     * @param string $core
     * @param string $penBody
     * @param string $colorBody
     * @param bool $pushButton
     */
    function __construct($core = 'ink', $penBody = 'plastic',
                         $colorBody = 'black', $pushButton = true)
    {
        parent::__construct($core, $penBody, $colorBody);
        $this->pushButton = $pushButton;
    }


    function write()
    {
        if($this->pushButton){
            parent::write();
        }else{
            echo "Sorry you need click on the push button!";
            echo "<hr>";
        }
    }

    function pushOpen()
    {
        $this->pushButton = true;
    }

    function pushClose()
    {
        $this->pushButton = false;
    }

}

/**
 * Class FountainPencil
 * make fountain pencil from fountain pen
 */
class FountainPencil extends FountainPen
{
    /**
     * FountainPencil constructor.
     * @param string $core
     * @param string $penBody
     * @param string $colorBody
     * @param bool $pushButton
     */
    function __construct($core = 'graphite', $penBody = 'wood',
                         $colorBody = 'yellow', $pushButton = true)
    {
        parent::__construct($core, $penBody, $colorBody, $pushButton);
    }

    function write()
    {
        echo "This " . $this->penBody . " pencil writes by " . $this->core;
        echo "<hr>";
    }

    function erase()
    {
        echo "Erase";
        echo "<hr>";
    }

}

/**
 * Class FountainPenColor
 * make fountain pen with many colors
 * from fountain pencil
 */
class FountainPenColor extends FountainPencil
{
    public $color;

    /**
     * FountainPenColor constructor.
     * @param string $core
     * @param string $penBody
     * @param string $colorBody
     * @param bool $pushButton
     * @param string $color
     */
    function __construct($core = 'ink', $penBody = 'plastic',
                         $colorBody = 'blue', $pushButton = true,
                         $color = 'red')
    {
        parent::__construct($core, $penBody, $colorBody, $pushButton);
        $this->color = $color;
    }

    function write()
    {
        echo "This " . $this->penBody . " pen writes by " . $this->core . " with " . $this->color . " color";
        echo "<hr>";
    }

    function erase()
    {
        echo "This is a pen! You can't erase.. ";
        echo "<hr>";
    }

    function changeColor($color)
    {
        $this->color = $color;
    }
}