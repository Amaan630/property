<?php

namespace App\Models;

use BinaryCabin\LaravelUUID\Traits\HasUUID;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Topic extends Model
{
    use HasFactory;

    use HasUUID;

    use SoftDeletes;

    protected $fillable = [
        'text',
        'site_id'
    ];

    public function getRouteKeyName()
    {
        return 'uuid';
    }


    public function site()
    {
        return $this->belongsTo(Site::class);
    }

    public function questions()
    {
        return $this->hasMany(Question::class);
    }
}
