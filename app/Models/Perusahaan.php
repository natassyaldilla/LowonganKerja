<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Perusahaan;

class Perusahaan extends Model
{
    use HasFactory;
    protected $table = "perusahaan";
    protected $guarded = ["id"];
    // protected $fillable = [
    //     'id', 'nama', 'email', 'alamat'];
    public function loker()
    {
        return $this->hasMany(loker::class);
    }
}

