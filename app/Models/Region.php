<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    use HasFactory;
    protected $table = 'regions';
    protected $primaryKey = 'id';
    protected $fillable = ['name'];

    // public function country(){
    //     return $this->hasMany(Country::class);
    // }
}
