<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'title'
    ];

    /**
     * @var mixed
     */
    private $created_at;

    /**
     * Get the categories of the product.
     *
     * @return BelongsToMany
     */
    public function products(): BelongsToMany
    {
        return $this->belongsToMany(Product::class);
    }

    /**
     * Get the creation date with
     *
     * @return mixed
     */
    public function getCreatedDateAttribute()
    {
        return $this->created_at->format('d/m/y H:i a');
    }

}
