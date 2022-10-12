<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Member;

class Survey extends Model
{
    use HasFactory;

    public function member()
    {
        return $this->hasMany(Member::class,'survey_id');
    }
}
