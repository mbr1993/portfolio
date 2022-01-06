<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $price_id
 * @property string $name
 * @property boolean $is_include
 * @property string $created_at
 * @property string $updated_at
 * @property Price $price
 */
class PriceItem extends Model
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
    protected $fillable = ['price_id', 'name', 'is_include', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function price()
    {
        return $this->belongsTo('App\Models\Price');
    }
}
