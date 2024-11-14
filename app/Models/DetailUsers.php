<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DetailUsers extends Model
{
    // use HasFactory;
    use SoftDeletes;
    public $table = 'detail_users';
    protected $primaryKey = 'id_detail_users';
    protected $fillable = [
        'id_users',
        'phone_num',
        'address',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];
}
