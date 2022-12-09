<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lokerja extends Model
{
    use HasFactory;
    protected $table = "lokerja";
    protected $primaryKey = "id";
    protected $fillable = [
        'id', 'nama', 'email', 'alamat', 'relation_code', 'posisi', 'deskripsi','kriteria'];
        public function perusahaan()
        {
            return $this->belongsTO(perusahaan::class);
        }
}
