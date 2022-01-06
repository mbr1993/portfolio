<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
1
 * @property string $description
 * @property string $logo
 * @property string $created_at
 * @property string $updated_at
 */
class Service extends Model
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
    protected $fillable = ['title', 'description', 'logo', 'created_at', 'updated_at'];

}
