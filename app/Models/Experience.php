<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property int $from
 * @property int $to
 * @property string $job_title
 * @property string $company_name
 * @property string $about
 * @property string $created_at
 * @property string $updated_at
 */
class Experience extends Model
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
    protected $fillable = ['from', 'to', 'job_title', 'company_name', 'about', 'created_at', 'updated_at'];

}
