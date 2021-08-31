<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Issuer extends Model
{
    protected $table = "issuers";

    public function info(){
        return $this->hasMany(IsuInfo::class,'isu_cd', 'isu_cd');
    }
}
