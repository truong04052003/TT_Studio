<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class Group extends Model
{
    use HasFactory,SoftDeletes;
    protected $table = 'groups';
    protected $fillable = ['name'];
    function users()
    {
        return $this->hasMany(User::class);
    }
    public function roles()
    {
        return $this->belongsToMany(Role::class, 'group_role', 'group_id', 'role_id');
    }
    public function scopesearch($query)
    {
        if ($key = request()->search) {
            $query = $query->where('name', 'like', '%' . $key . '%');
        }
        return $query;
    }
}
