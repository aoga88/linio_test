<?php
namespace App\Util;

class ModValidator {

    const MOD_15 = 'Linianos';
    const MOD_5 = 'IT';
    const MOD_3 = 'Linio';

    /**
     * @param $number
     * @return bool|mixed
     */
    public static function validate($number) {
        try {
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
        } catch (\Exception $e) {
            // I could use a is_numeric here but that would break the 1 if requirement
            return false;
        }
    }

}