<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Services;

class Clients extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'rfc',
        'email',
        'phone',
        'address',
    ];

    public function services()
    {
        return $this->hasMany(Services::class);
    }
}
