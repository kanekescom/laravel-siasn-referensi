<?php

namespace Kanekescom\Siasn\Referensi\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Lokasi extends Model implements Transformable
{
    use HasFactory;
    use SoftDeletes;
    use TransformableTrait;

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
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'kanreg_id',
        'lokasi_id',
        'nama',
        'cepat_kode',
        'jenis',
        'jenis_kabupaten',
        'removal_date',
        'removal_date__formatted',
        'jenis_desa',
        'tanggal_jorge',
        'tanggal_jorge__formatted',
        'merger_cepat_kode',
        'ibu_kota',
    ];
}
