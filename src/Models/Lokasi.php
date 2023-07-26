<?php

namespace Kanekescom\SiasnReferensi\Models;

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
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'nama',
        'kode_cepat',
        'kanreg_id',
        'lokasi_id',
        'jenis',
        'jenis_kabupaten',
        'jenis_desa',
        'ibu_kota',
    ];
}
