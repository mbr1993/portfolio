<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $work_tip_id
 * @property string $name
 * @property string $image
 * @property string $created_at
 * @property string $updated_at
 * @property WorkTip $workTip
 */
class Work extends Model
{
    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['work_tip_id', 'name', 'image', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function workTip()
    {
        return $this->belongsTo('App\Models\WorkTip');
    }
}
