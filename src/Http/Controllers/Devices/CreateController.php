<?php

namespace Tots\Device\Http\Controllers\Devices;

use Illuminate\Http\Request;
use Tots\Device\Models\TotsDevice;

class CreateController extends \Laravel\Lumen\Routing\Controller
{
    public function handle(Request $request)
    {
        // Process validations
        $this->validate($request, [
            'device_token' => 'required|min:3',
        ]);
        // Create new model
        $item = new TotsDevice();
        $item->device_type = $request->input('device_type');
        $item->device_token = $request->input('device_token');
        $item->app_version = $request->input('app_version');
        $item->device_model = $request->input('device_model');
        $item->language_id = $request->input('language_id');
        $item->user_id = $request->user()->id;
        // Save new model
        $item->save();
        // Return data
        return $item;
    }
}