<?php

namespace Kanekescom\Siasn\Referensi\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pendidikan extends Model
{
    use HasFactory;
    use SoftDeletes;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'siasn_referensi_pendidikan';

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
    //     'tingkat_pendidikan_id',
    //     'nama',
    //     'kode_cepat',
    //     'kode_cepat_merger',
    //     'nama_asli',
    //     'status',
    //     'sub_rumpun_prog_id',
    //     'kode_cepat_induk',
    //     'sub_rumpun_prog_kode',
    // ];
}
