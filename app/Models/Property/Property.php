<?php

namespace App\Models\Property;

use App\Models\User;
use BinaryCabin\LaravelUUID\Traits\HasUUID;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Hash;

class Property extends Model
{
    use HasFactory;

    use HasUUID;

    use SoftDeletes;

    protected $fillable = [
        'description',
        'price',
        'beds',
        'bath',
        'sqft',
        'floor_plan_pdf_url',
        'protected_password',
        'street1',
        'street2',
        'city',
        'state',
        'zip',
        'country',
    ];

    public function getRouteKeyName()
    {
        return 'uuid';
    }

    public function isProtected()
    {
        return isset($this->protected_password);
    }

    public function setProtectedPasswordAttribute($value)
    {
        $this->attributes['protected_password'] = Hash::make($value);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
