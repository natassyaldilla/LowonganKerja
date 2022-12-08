<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lamaran extends Model
{
    use HasFactory;
    protected $table = "lamaran";
    protected $primaryKey = "id";
    protected $fillable = [
        'id', 'nama', 'email', 'notelp', 'perusahaan', 'posisi'];
}
