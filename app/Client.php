<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Client extends Model
{
    use SoftDeletes;

    public $table = 'clients';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'name',
        'city',
        'email',
        'phone',
        'message',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function courses()
    {
        return $this->belongsToMany(Course::class);
    }

    public function events()
    {
        return $this->belongsToMany(Event::class);
    }
}
