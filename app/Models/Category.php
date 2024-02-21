<?php

namespace App\Models;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'is_active'];

    protected   $table="main_categories";

    public function products()
    {
        return $this->hasMany(Product::class);
    }
    public function images()
    {
        return $this->hasMany(Image::class, 'category_id');
    }

    public function setDescriptionAttribute($value)
    {
        $this->attributes['description'] =Str::slug($value, '_');

    }

}
