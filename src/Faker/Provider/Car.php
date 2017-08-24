<?php

namespace Faker\Provider;

/**
 * @author iamraccoon
 */
class Car extends Base
{
    protected static $carFormats = array(
        '{{carBrand}} {{carModel}}',
    );

    protected static $brandNames = array(
        'Audi',
        'Mercedes',
        'Zaz'
    );

    protected static $modelNames = array(
        '100',
        's500'
    );

    /**
     * @example 'Mercedes s500'
     */
    public function car()
    {
        $format = static::randomElement(static::$carFormats);

        return $this->generator->parse($format);
    }

    /**
     * @example 'Sandero StepWay'
     */
    public static function carModel()
    {
        return static::randomElement(static::$modelNames);
    }

    /**
     * @example 'Aston Martin'
     */
    public static function carBrand()
    {
        return static::randomElement(static::$brandNames);
    }
}
