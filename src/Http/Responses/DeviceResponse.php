<?php

namespace Tots\Device\Http\Responses;

use Tots\Device\Models\TotsDevice;

/**
 * Description of Model
 *
 * @author matiascamiletti
 */
class DeviceResponse
{
    static public function make(TotsDevice $device)
    {
        return $device->toArray();
    }
}