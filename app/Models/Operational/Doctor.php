<?php

namespace App\Models\Operational;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Doctor extends Model
{
    // use HasFactory;
    use SoftDeletes;

    // declare table name
    public $table = 'doctor';

    // this field must type date yyyy-mm-dd hh:mm:ss
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    // declare fillable fields
    protected $fillable = [
        'specialist_id',
        'user_id',
        'name',
        'fee',
        'photo',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function specialist()
    {
        return $this->belongsTo('App\Models\MasterData\Specialist', 'specialist_id', 'id');
    } 

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id', 'id');
    } 

    public function appointment()
    {
        return $this->hasOne('App\Models\Operational\Appointment', 'doctor_id');
    }
}
