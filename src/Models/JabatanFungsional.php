<?php

namespace Kanekescom\Siasn\Referensi\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class JabatanFungsional extends Model implements Transformable
{
    use HasFactory;
    use SoftDeletes;
    use TransformableTrait;

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
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'min_golongan_id',
        'max_golongan_id',
        'nama',
        'bup_usia',
        'tunjangan_jabatan',
        'bobot',
        'kelompok_jabatan_id',
        'cepat_kode',
        'merger_cepat_kode',
        'jenis',
        'cepat_kode_new',
        'status',
        'jumlah_formasi',
        'nama_asli',
        'jenjang',
        'jf_ex_medis',
        'is_syarat_jabatan',
    ];
}
