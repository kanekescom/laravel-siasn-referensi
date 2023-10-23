<?php

namespace Kanekescom\Siasn\Referensi\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Lokasi extends Model
{
    use HasFactory;
    use SoftDeletes;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'siasn_referensi_lokasi';

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
    //     'kanreg_id',
    //     'lokasi_id',
    //     'nama',
    //     'kode_cepat',
    //     'jenis',
    //     'jenis_kabupaten',
    //     'removal_date',
    //     'jenis_desa',
    //     'tanggal_jorge',
    //     'kode_cepat_merger',
    //     'ibu_kota',
    // ];
}
