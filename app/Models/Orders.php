<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Orders extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'orders';
    protected $fillable = ['tablets_id','phones_id','laptops_id','headphones_id','customer_id','price','number_of_product','description','status'];
    public function scopeSearch($query, $data)
    {
        $paging_number = 10;

        if (!empty($data)) {
            foreach ($data as $key => $value) {
                if(!empty($value)) {
                    switch ($key) {
                        case 'q':
                            $query->where(function ($q) use ($value) {
                                $q->where('phone', 'LIKE', "%$value%")->orWhere('email', 'LIKE', "%$value%")->orWhere('full_name', 'LIKE', "%$value%");
                            });
                            break;
                        case 'phone':
                            $query->where('phone', $value);
                            break;
                    }
                }
            }
        }

        return $query->orderBy('created_at', 'desc')->paginate($paging_number);
    }
}
