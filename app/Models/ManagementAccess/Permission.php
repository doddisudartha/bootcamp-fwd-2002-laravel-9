<?php

namespace App\Models\ManagementAccess;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Permission extends Model
{
    //use HasFactory;
    use SoftDeletes;

    //declare table name
    public $table = 'permission';

    // this field must type date yyyy-mm-dd hh:ii:ss
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ]

    //declare fillable fields
    protected $fillable = [

    ]
}
