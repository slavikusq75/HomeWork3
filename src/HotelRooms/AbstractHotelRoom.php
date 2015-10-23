<?php

namespace HotelRooms;

abstract class AbstractHotelRoom
{
    public  $parastatus;
    public  $price;
    public  $number;

    abstract public function paranormalActivity($activity);

    public function init($arr) //Room initialization
    {
        $this->parastatus   = $arr['parastatus'];
        $this->price        = $arr['price'];
        $this->number       = $arr['number'];
    }

    public function  dataOutput()
    {
        echo "<br/>";
        print_r($this);
    }
}

