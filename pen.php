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