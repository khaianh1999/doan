<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable
{
    use HasFactory, Notifiable, SoftDeletes;

    protected $table = 'users';

    
    protected $fillable = [
        'full_name',
        'email',
        'password',
        'bp_agent_id',
        'phone',
        'address',
        'status',
        'join_date',
        'is_agent_admin',
        'last_login',
        'ip_address',
        'user_agent'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
    ];

 
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function scopeSearch($query, $data)
    {
        $paging_number = 10;

        if (isset($data)) {
            foreach ($data as $key => $value) {
                if (isset($value)) {
                    switch ($key) {
                        case 'q':
                            $query->where(function ($q) use ($value) {
                                $q->where('full_name', 'LIKE', "%$value%")->orWhere('email', 'LIKE', "%$value%")->orWhere('phone', 'LIKE', "%$value%");
                            });
                            break;
                        case 'status':
                            $query->where('status', $value);
                            break;
                     
                    }
                }
            }
        }

        return $query->orderBy('created_at', 'desc')->paginate($paging_number);
    }
   


}
