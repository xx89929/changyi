<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CaseModel extends Model
{
    protected $table = 'case';

    public function snsCaseType(){
        return $this->hasOne(CaseTypeModel::class,'id','case_type');
    }
}
