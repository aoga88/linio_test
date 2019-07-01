<?php
namespace App\Util;

class ModValidator {

    const MOD_15 = 'Linianos';
    const MOD_5 = 'IT';
    const MOD_3 = 'Linio';


    public static function validate($number) {
        if (!is_numeric($number)) {
            return false;
        }

        $mods = [
            15 => self::MOD_15,
            5 => self::MOD_5,
            3 => self::MOD_3
        ];

        $response = $number;

        foreach($mods as $mod => $string) {
            if ($number%$mod == 0) {
                $response = $string;
                break;
            }
        }

        return $response;
    }

}