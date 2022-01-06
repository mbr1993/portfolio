<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $link
 * @property string $icon
 * @property string $name
 * @property string $created_at
 * @property string $updated_at
 */
class Social extends Model
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
    protected $fillable = ['link', 'icon', 'name', 'created_at', 'updated_at'];

}
