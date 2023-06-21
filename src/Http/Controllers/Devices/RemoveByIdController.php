<?php

namespace Tots\Blog\Http\Controllers\Posts;

use Illuminate\Http\Request;
use Tots\Device\Models\TotsDevice;

class RemoveByIdController extends \Laravel\Lumen\Routing\Controller
{
    public function handle($id, Request $request)
    {
        $item = TotsDevice::where('id', $id)->where('user_id', $request->user()->id)->first();
        if($item === null) {
            throw new \Exception('Item not exist');
        }
        $item->delete();
        return ['delete' => $id];
    }
}