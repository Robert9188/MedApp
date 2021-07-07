<?php


namespace App\Helpers;


use Carbon\Carbon;

class SetRdvDate
{

    public static function setDate($day)
    {
        $date = Carbon::parseFromLocale($day);

        return $date->format('d-m-Y');

    }

}
