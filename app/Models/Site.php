<?php

namespace App\Models;

use BinaryCabin\LaravelUUID\Traits\HasUUID;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Site extends Model
{
    use HasFactory;

    use HasUUID;

    use SoftDeletes;

    protected $fillable = [
        'title',
        'type',
        'team_id'
    ];

    public function getRouteKeyName()
    {
        return 'uuid';
    }

    public function team()
    {
        return $this->belongsTo(Team::class);
    }
}
