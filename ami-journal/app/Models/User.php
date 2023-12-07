<?php

namespace App\Models;

use App\Traits\ApiKey;
use App\Traits\ApiResource;
use App\Traits\UUID;
use DateTime;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Silber\Bouncer\Database\HasRolesAndAbilities;

class User extends Authenticatable
{
    use HasFactory, Notifiable, ApiResource, UUID, HasRolesAndAbilities, ApiKey;

    protected $fillable = [
        'name', 'email', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token', 'api_key'
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function reviews() : HasMany {
        return $this->hasMany(Revision::class)->withPivot(['state', 'content']);
    }
}
