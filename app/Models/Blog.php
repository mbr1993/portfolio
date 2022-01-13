<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $blog_tip_id
 * @property string $date
 * @property string $photo
 * @property string $title
 * @property string $content
 * @property string $created_at
 * @property string $updated_at
 * @property BlogTip $blogTip
 * @property Comment[] $comments
 */
class Blog extends Model
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
    protected $fillable = ['blog_tip_id', 'date', 'photo', 'title', 'content', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function blogTip()
    {
        return $this->belongsTo('App\Models\BlogTip');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function comments()
    {
        return $this->hasMany('App\Models\Comment');
    }
}
