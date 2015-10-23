<?php

namespace HotelRooms;

class MainBuildingHotelRoom extends AbstractHotelRoom
{
    protected  $view;

    public function __construct($arr)
    {
        $this->init($arr);
    }

    public function paranormalActivity($activity)
    {
        if($activity==1)
        {
            echo "<br/>You are frightened by terrible gost!";
        }
        elseif($activity==2)
        {
            echo "<br/>You are killed by poltergeist!";
        }
        else
        {
            echo "<br/>You are inside a comfortable room in Main Building.";
        }
        return $activity;
    }
}


