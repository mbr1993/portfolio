<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $full-name
 * @property string $job_title
 * @property string $logo
 * @property string $quote
 * @property string $created_at
 * @property string $updated_at
 */
class Testemonial extends Model
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
    protected $fillable = ['full-name', 'job_title', 'logo', 'quote', 'created_at', 'updated_at'];

}
