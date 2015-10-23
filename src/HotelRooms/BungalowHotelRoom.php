<?php

namespace HotelRooms;

class BungalowHotelRoom extends AbstractHotelRoom
{
    protected  $colour;

    public function __construct($arr)
    {
        $this->init($arr);
    }

    public function paranormalActivity($activity)
    {
        if($activity==1)
        {
            $this->parastatus="1";

        }
        else
        {
            $this->parastatus="0";

        }
        return $activity;
    }
}




