<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Role extends Model
{
    use HasFactory;



    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];



    /**
     * Scope a query to only include
     *
     * @param  \Illuminate\Database\Eloquent\Builder $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeSuperAdmin($query)
    {
        return $query->where('is_super_admin', 1);
    }

    /**
     * Scope a query to only include
     *
     * @param  \Illuminate\Database\Eloquent\Builder $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeIsnotSuperAdmin($query)
    {
        return $query->where('is_super_admin', 0);
    }


    /**
     * Get the user associated with the Role
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function users(): HasMany
    {
        return $this->hasMany(User::class);
    }


    /**
     * Get the permission associated with the Role
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function permission(): HasOne
    {
        return $this->hasOne(Permission::class);
    }
}
