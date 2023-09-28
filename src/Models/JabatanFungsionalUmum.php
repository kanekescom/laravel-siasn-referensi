<?php

namespace Kanekescom\Siasn\Referensi\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class JabatanFungsionalUmum extends Model implements Transformable
{
    use HasFactory;
    use SoftDeletes;
    use TransformableTrait;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'siasn_referensi_jabatan_fungsional_umum';

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
        'nama',
        'cepat_kode',
        'wajib_ganti_tertentu',
        'jenis_jabatan_umum_id',
        'merger_cepat_kode',
        'nama_asli',
        'kode_menpan',
        'instansi_id',
        'status',
        'asal_peraturan_id',
        'jfu_urusan_pemerintahan',
    ];
}
