<?php

namespace Kanekescom\Siasn\Referensi\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class KelJabatan extends Model
{
    use HasFactory;
    use SoftDeletes;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'siasn_referensi_kel_jabatan';

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
    //     'rumpun_jabatan_id',
    //     'nama',
    //     'lingkup',
    //     'tugas_pokok',
    //     'pejabat_pak',
    //     'pembina_id',
    //     'jenis_jabatan_umum_id',
    //     'status',
    //     'kode_rumpun',
    //     'kode_kelompok',
    //     'jenis_jabatan_umum_baru_id',
    //     'kesehatan_nonmedis',
    // ];
}
