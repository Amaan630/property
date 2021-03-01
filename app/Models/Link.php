<?php

namespace App\Models;

use BinaryCabin\LaravelUUID\Traits\HasUUID;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Link extends Model
{
    use HasFactory;

    use HasUUID;

    use SoftDeletes;

    protected $fillable = [
        'url',
        'title',
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
}
