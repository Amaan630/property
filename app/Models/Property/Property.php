<?php

namespace App\Models\Property;

use App\Models\Photo;
use App\Models\Team;
use BinaryCabin\LaravelUUID\Traits\HasUUID;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

/**
 * App\Models\Property\Property
 *
 * @property int $id
 * @property int $team_id
 * @property string $uuid
 * @property string $description
 * @property int $price
 * @property int|null $bed
 * @property int|null $bath
 * @property int|null $sqft
 * @property int|null $garage
 * @property string|null $floor_plan_pdf_url
 * @property string|null $protected_password
 * @property string $street1
 * @property string|null $street2
 * @property string $city
 * @property string $state
 * @property int $zip
 * @property string $country
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read mixed $primary_photo_url
 * @property-read Team $team
 * @method static \Illuminate\Database\Eloquent\Builder|Property byUUID($uuid)
 * @method static \Illuminate\Database\Eloquent\Builder|Property newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Property newQuery()
 * @method static \Illuminate\Database\Query\Builder|Property onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Property query()
 * @method static \Illuminate\Database\Eloquent\Builder|Property whereBath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Property whereBed($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Property whereCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Property whereCountry($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Property whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Property whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Property whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Property whereFloorPlanPdfUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Property whereGarage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Property whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Property wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Property whereProtectedPassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Property whereSqft($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Property whereState($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Property whereStreet1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Property whereStreet2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Property whereTeamId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Property whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Property whereUuid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Property whereZip($value)
 * @method static \Illuminate\Database\Query\Builder|Property withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Property withoutTrashed()
 * @mixin \Eloquent
 */
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

    public function team()
    {
        return $this->belongsTo(Team::class);
    }

    public function photos()
    {
        return $this->hasMany(Photo::class);
    }

    public function primaryPhoto()
    {
        return $this->photos()->where('is_primary', true)->first();
    }

    public function getPrimaryPhotoUrlAttribute()
    {
        return Storage::temporaryUrl(
            $this->primaryPhoto()->path, now()->addMinutes(5)
        );
//        return Storage::url();
    }

    public function photosUrls()
    {
        return $this->photos()->where('is_primary', false)->get()->pluck('path')->map(function ($path) {
            return Storage::url($path);
        });
    }
}
