<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Images extends Model
{
    use HasFactory;
    protected $fillable = ['url'];
    protected function url(): Attribute
    {
        return Attribute::make(
            get: fn (string $value) => asset($value),
        );
    }
}