<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property int $from
 * @property int $to
 * @property string $name
 * @property string $country
 * @property string $about
 * @property string $created_at
 * @property string $updated_at
 */
class Education extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'educations';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['from', 'to', 'name', 'country', 'about', 'created_at', 'updated_at'];

}
