<?php

namespace Tots\Device\Http\Controllers;

use Illuminate\Http\Request;
use Tots\Device\Http\Requests\UpdateDeviceRequest;
use Tots\Device\Http\Responses\DeviceResponse;
use Tots\Device\Models\TotsDevice;
use Tots\Device\Repositories\TotsDeviceRepository;

class DeviceController extends \Laravel\Lumen\Routing\Controller
{
    protected TotsDeviceRepository $repository;

    public function __construct(TotsDeviceRepository $repository)
    {
        $this->repository = $repository;
    }

    public function update($id, Request $request)
    {
        // Validation
        $this->validate($request, UpdateDeviceRequest::rules());
        // Update device
        $device = $this->repository->updateByUser($id, $request->user()->id, [
            'device_token' => $request->input('device_token'),
            'device_type' => $request->input('device_type'),
            'app_version' => $request->input('app_version'),
            'device_model' => $request->input('device_model'),
            'language_id' => $request->input('language_id'),
        ]);
        // Reponse
        return DeviceResponse::make($device);
    }
}