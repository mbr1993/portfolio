<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $user_id
 * @property string $job
 * @property string $about_user
 * @property int $age
 * @property string $residence
 * @property boolean $is_available
 * @property string $address
 * @property string $phone
 * @property string $email
 * @property string $avatar
 * @property string $created_at
 * @property string $updated_at
 * @property User $user
 */
class Profile extends Model
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
    protected $fillable = ['user_id', 'job', 'about_user', 'age', 'residence', 'is_available', 'address', 'phone', 'email', 'avatar', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
