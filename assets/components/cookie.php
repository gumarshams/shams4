<?php
class Cookie
{
    private $type;

    private $emptyType;
    private $types = ['шоколадное', 'имбирное', 'бананновое', 'овсяное'];

    // private $sost = 0;
    public function setType($type)
    {
        if (in_array(mb_strtolower($type), array_map('mb_strtolower', $this->types))) {
            $this->type = "Печенье {$type} есть.";
        } else {
            $this->Type = "Печенье {$type} нет.";
        }
    }

    public function getType()
    {
        return $this->type ?? '—';
    }

    // public function getSost()
    // {
    //     return $this->sost;
    // }

    public function getTypes()
    {
        return $this->types;
    }
}
