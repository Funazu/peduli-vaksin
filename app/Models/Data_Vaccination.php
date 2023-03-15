<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data_Vaccination extends Model
{
    use HasFactory;

    protected $table = 'data__vaccinations';
    protected $primaryKey = 'id';

    protected $guarded = ['id'];

    public function id_penduduk() {
        return $this->belongsTo(Warga_Masyarakat::class);
    }

    public function id_master_vaksinasi() {
        return $this->belongsTo(Master_Vaccination::class);
    }

    public function id_lokasi() {
        return $this->belongsTo(Master_Location_Vaccination::class);
    }
}
