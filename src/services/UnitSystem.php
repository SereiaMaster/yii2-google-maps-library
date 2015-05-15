<?php
/**
 * @link https://github.com/2amigos/yii2-google-maps-library
 * @copyright Copyright (c) 2013-2015 2amigOS! Consulting Group LLC
 * @license http://opensource.org/licenses/BSD-3-Clause
 */

namespace dosamigos\google\maps\services;


/**
 * UnitSystem
 *
 * The valid unit systems that can be specified in a DirectionsRequest.
 *
 * @author Antonio Ramirez <amigo.cobos@gmail.com>
 * @link http://www.ramirezcobos.com/
 * @link http://www.2amigos.us/
 * @package dosamigos\google\maps\services
 */
class UnitSystem
{
    const IMPERIAL = 'google.maps.UnitSystem.IMPERIAL';
    const METRIC = 'google.maps.UnitSystem.METRIC';

    /**
     * Checks whether value is a valid [UnitSystem] constant.
     *
     * @param $value
     *
     * @return bool
     */
    public static function getIsValid($value){
        return in_array(
            $value,
            [
                static::METRIC,
                static::IMPERIAL
            ]
        );
    }
}