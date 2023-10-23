<?php

namespace Kanekescom\Siasn\Referensi\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class JabatanFungsional extends Model
{
    use HasFactory;
    use SoftDeletes;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'siasn_referensi_jabatan_fungsional';

    /**
     * The data type of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'string';

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    // protected $fillable = [
    //     'id',
    //     'min_golongan_id',
    //     'max_golongan_id',
    //     'nama',
    //     'usia_bup',
    //     'tunjangan_jabatan',
    //     'bobot',
    //     'kel_jabatan_id',
    //     'kode_cepat',
    //     'kode_cepat_merger',
    //     'jenis',
    //     'kode_cepat_new',
    //     'status',
    //     'jumlah_formasi',
    //     'nama_asli',
    //     'jenjang',
    //     'jf_ex_medis',
    //     'is_syarat_jabatan',
    // ];
}
