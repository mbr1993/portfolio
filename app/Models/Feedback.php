<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $full_name
 * @property string $email
 * @property string $message
 * @property integer $status
 * @property string $created_at
 * @property string $updated_at
 */
class Feedback extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'feedbacks';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['full_name', 'email', 'message', 'status', 'created_at', 'updated_at'];

}
