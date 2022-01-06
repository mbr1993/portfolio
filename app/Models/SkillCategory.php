<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $name
 * @property string $icon
 * @property string $type
 * @property string $created_at
 * @property string $updated_at
 * @property SkillCategoryItem[] $skillCategoryItems
 */
class SkillCategory extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'skill_categories';

    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['name', 'icon', 'type', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function skillCategoryItems()
    {
        return $this->hasMany('App\Models\SkillCategoryItem');
    }
}
