<?php

namespace App\Models\Incidecias;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Solution extends Model
{
    use HasFactory;
    protected $fillable = [
        'incidence_id',
        'content',
        'imgUrl',
        'emailDetail',


    ];


        //relacion uno a muchos inversa
        public function incidence(){
            return $this->belongsTo(Incidence::class);
        }
}
