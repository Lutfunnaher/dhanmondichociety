<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Children extends Model
{
    use HasFactory;

    protected $guarded = ['created_at', 'updated_at'];
//     protected $fillable = ['member_id', 'name', 'gender', 'age'];

    // public function member()
    // {
    //     $this->belongsTo(Member::class);
    // }
}
