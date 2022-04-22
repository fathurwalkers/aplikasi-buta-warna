<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Hasil;

class Login extends Model
{
    use HasFactory;
    protected $table = 'login';
    protected $guarded = [];
    protected $primaryKey = 'id';

    public function hasil()
    {
        return $this->hasMany(Hasil::class);
    }
}
