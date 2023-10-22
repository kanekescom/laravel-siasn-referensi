<?php

namespace Kanekescom\Siasn\Referensi\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Instansi extends Model
{
    use HasFactory;
    use SoftDeletes;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'siasn_referensi_instansi';

    /**
     * The data type of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'string';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    // protected $fillable = [
    //     'id',
    //     'lokasi_id',
    //     'nama',
    //     'jenis',
    //     'kode_cepat',
    //     'proses_berkas_dipusat',
    //     'kode_cepat_merger',
    //     'status',
    //     'kode_cepat5',
    //     'kode_cepat5_lama',
    //     'nama_baru',
    //     'nama_jabatan',
    //     'jenis_instansi_id',
    // ];
}
