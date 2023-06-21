<?php

namespace Tots\Device\Models;

use Illuminate\Database\Eloquent\Model;
use Tots\Auth\Models\TotsUser;

/**
 * Description of Model
 * @property int $id ID of item
 * @property int $device_type ID of item
 * @property mixed $device_token Description for variable
 * @property mixed $app_version Description for variable
 * @property mixed $device_model Description for variable
 * @property mixed $language_id Description for variable
 * @property mixed $creator_id Description for variable
 * @property mixed $created_at Description for variable
 * @property mixed $updated_at Description for variable
 *
 * @author matiascamiletti
 */
class TotsDevice extends Model
{
    protected $table = 'tots_device';
    
    //protected $casts = ['data' => 'array'];
    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    //public $timestamps = false;

    /**
    * 
    * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
    */
    public function user()
    {
        return $this->belongsTo(TotsUser::class, 'user_id');
    }


    
}