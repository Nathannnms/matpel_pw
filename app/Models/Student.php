<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Student extends Model
{
    protected $primaryKey = 'std_id';

    use HasFactory;

    protected $table = 'students';
    protected $fillable = [
        'std_name',
        'std_classes_id',
        'std_age',
        'std_nis',
        'std_gender',
    ];

    public function class()
    {
        return $this->belongsTo(Classes::class, 'std_classes_id', 'cls_id' );
    }
}
