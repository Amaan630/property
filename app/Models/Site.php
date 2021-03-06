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

    /**
     * @var mixed
     */

    public function getRouteKeyName()
    {
        return 'uuid';
    }

    public function team()
    {
        return $this->belongsTo(Team::class);
    }

    public function topics()
    {
        return $this->hasMany(Topic::class);
    }

    public function links()
    {
        return $this->hasMany(Link::class);
    }
}
