<?php

class LevelEntity 
{
    private $pkLevel;
    private $level;

    public function __construct($pkLevel, $level) 
    {
        $this->pkLevel = $pkLevel;
        $this->level   = $level;
    }

    public function getPkLevel() 
    {
        return $this->pkLevel;
    }

    public function setPkLevel($pkLevel) 
    {
        $this->pkLevel = $pkLevel;
    }

    public function getLevel() 
    {
        return $this->level;
    }

    public function setLevel($level) 
    {
        $this->level = $level;
    }
}

?>
