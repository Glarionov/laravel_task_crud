<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{

    protected $fillable = ['name', 'description', 'status_id', 'necessary_execution_date', 'percent_for_mediator'];

    use HasFactory, SoftDeletes;

//    /**
//     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
//     */
//    public function users()
//    {
//        return $this->belongsToMany(User::class, UserRoles::class, 'role_id', 'user_id');
//    }
}
