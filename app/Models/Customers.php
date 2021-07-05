<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Customers extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'customers';
    protected $fillable = ['gender','full_name','phone','email','address'];
    public function scopeSearch($query, $data)
    {
        $paging_number = 10;

        if (!empty($data)) {
            foreach ($data as $key => $value) {
                if(!empty($value)) {
                    switch ($key) {
                        case 'q':
                            $query->where(function ($q) use ($value) {
                                $q->where('phone', 'LIKE', "%$value%")->orWhere('address', 'LIKE', "%$value%")->orWhere('phone', 'LIKE', "%$value%")->orWhere('email', 'LIKE', "%$value%")->orWhere('full_name', 'LIKE', "%$value%");
                            });
                            break;
                        case 'gender':
                            $query->where('gender', $value);
                            break;
                    }
                }
            }
        }

        return $query->orderBy('created_at', 'desc')->paginate($paging_number);
    }
}
