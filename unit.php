<?php

class Unit
{
    const AUTHORISED_DIRECTION = ['right', 'left', 'top', 'bottom'];

     /**
     * @var Int
     */
    private $pv;

    /**
     * @var Array
     */
    private $position = [0,0];

    /**
     * @var Int
     */
    private $speed;    

    /**
     * @return int
     */
    public function getSpeed(): int
    {
        return $this->speed;
    }

    /**
     * @return int
     */
    public function setSpeed(int $speed): Unit
    {
        $this->speed = $speed;
        return $this;
    }

    /**
     * @return int
     */
    public function getPosition(): array
    {
        return $this->position;
    }

    /**
     * @return Unit
     */
    public function setPosition(array $position): Unit
    {
        $this->position = $position;
        return $this;
    }

    public function walk(string $direction) : Unit
    {
        if(in_array($direction,self::AUTHORISED_DIRECTION)) {
            switch ($direction) {
                case "right":
                    $this->position[0] += $this->speed;
                    break;
                case "left":
                    $this->position[0] -= $this->speed;
                    break;
                case "top":
                    $this->position[1] += $this->speed;
                    break;
                case "bottom":
                    $this->position[1] -= $this->speed;
                    break;
            }
        }
        return $this;
        
    } 
    
    public function __toString()
    {
        $posUnit =  $this->getPosition();
        
        $str = 'le Unit est situé aux coordonnées x = ' . $posUnit[0] . ' et y = ' . $posUnit[1];
        $str .= '<br>';
        return $str;
    }
}

class Elf extends Unit
{
    public function attack() : string
    {
        return "À l'attaque";    
    }

    
}

class Soldier extends Unit
{
    public function attack() : string
    {
        return "à l'attaque";  
    }
}