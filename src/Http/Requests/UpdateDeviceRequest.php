<?php

namespace Tots\Device\Http\Requests;

/**
 * Description of Model
 *
 * @author matiascamiletti
 */
class UpdateDeviceRequest
{
    static public function rules()
    {
        return [
            'device_token' => 'required|min:3',
            'device_type' => 'required|integer',
        ];
    }
}