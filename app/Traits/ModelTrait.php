<?php
/**
 * Author: hitman
 * Date: 12/7/2016
 * Time: 4:25 PM
 */

namespace App\Traits;

trait ModelTrait
{
    public function scopeOfProperty($query, $name, $value, $required=0)
    {
        if (trim($value) == '' && !$required) {
            return $query;
        }

        return $query->where($name, $value);
    }
}
