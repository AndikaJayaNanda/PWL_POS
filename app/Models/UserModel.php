<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Tymon\JWTAuth\Contracts\JWTSubject;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Foundation\Auth\User as Authenticatable;

class UserModel extends Authenticatable implements JWTSubject
{
    /**
     * Get the identifier that will be stored in the subject claim of the JWT.
     *
     * @return mixed
     */
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    /**
     * Return a key value array, containing any custom claims to be added to the JWT.
     *
     * @return array
     */
    public function getJWTCustomClaims()
    {
        return [];
    }

    protected $table ='m_user';
    protected $primaryKey = 'user_id';
    /**
     * The attributes that are mass assignable
     * 
     * @var array
     */
    protected $fillable = ['level_id', 'username', 'nama', 'password', 'image'];

    /**
     * Relationship with LevelModel
     *
     * @return BelongsTo
     */
    public function level(): BelongsTo
    { 
        return $this->belongsTo(LevelModel::class, 'level_id', 'level_id');
    }
    protected function image(): Attribute
    {
        return Attribute::make(
            get: fn($image) => url('/storage/posts'.$image),
        );
    }
}  
