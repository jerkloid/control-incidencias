<?php

namespace App\Models\Incidecias;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Incidence extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'category',
        'type',
        'priority',
        'imgUrl',
        'content',
        'emailDetail',

    ];
        //relacion uno a muchos inversa
    public function user(){
        return $this->belongsTo(User::class);
    }
    //relacion uno a muchos
    public function solutions(){
        return $this->hasMany(Solution::class);
    }
}
