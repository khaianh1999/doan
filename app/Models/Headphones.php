<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Headphones extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'headphones';
    protected $fillable = ['name','code','origin','price','picture','status','configuration','description'];
    public function scopeSearch($query, $data)
    {
        $paging_number = 10;
        if (isset($data)) {
            foreach ($data as $key => $value) {
                if (isset($value)) {
                    switch ($key) {
                        case 'q':
                            $query->where(function ($q) use ($value) {
                                $q->where('name', 'LIKE', "%$value%")->orWhere('price', 'LIKE', "%$value%")->orWhere('origin', 'LIKE', "%$value%");
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
