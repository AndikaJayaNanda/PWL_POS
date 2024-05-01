<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class UserModel extends \Illuminate\Foundation\Auth\User
{
    public function getJWTIdentifier(){
        return $this->getKey();
    }
    public function getJWTCustomClaims(){
        return[];
    }

    protected $table ='m_user';
    protected $primaryKey = 'user_id';
    /**
     * The attributes that are mass assignable
     * 
     * @var array
     */
    protected $fillable = ["level_id", 'username', 'nama', 'password'];
    public function level(): BelongsTo {
        return $this->belongsTo(LevelModel::class, 'level_id', 'level_id');
    }
}   