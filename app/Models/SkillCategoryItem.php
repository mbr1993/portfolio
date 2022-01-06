<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $skill_category_id
 * @property string $name
 * @property int $degree
 * @property string $created_at
 * @property string $updated_at
 * @property SkillCategory $skillCategory
 */
class SkillCategoryItem extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'skill_category_items';

    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['skill_category_id', 'name', 'degree', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function skillCategory()
    {
        return $this->belongsTo('App\Models\SkillCategory');
    }
}
