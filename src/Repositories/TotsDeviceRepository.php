<?php

namespace Tots\Device\Repositories;

use Tots\Device\Models\TotsDevice;

/**
 *
 * @author matiascamiletti
 */
class TotsDeviceRepository
{
    public function allByUserId($userId)
    {
        return TotsDevice::where('user_id', $userId)->get();
    }

    public function updateByUser($deviceId, $userId, $data)
    {
        $device = TotsDevice::where('id', $deviceId)->where('user_id', $userId)->firstOrFail();
        $device->fill($data);
        $device->save();
        return $device;
    }

    public function removeByUserId($userId)
    {
        TotsDevice::where('user_id', $userId)->delete();
    }
}