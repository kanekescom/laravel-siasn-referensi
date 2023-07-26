<?php

namespace Kanekescom\SiasnReferensi\Models;

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
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'nama',
        'kode_cepat',
        'bup',
        'kelompok_jabatan_id',
        'jenjang',
        'status',
        'golongan_terendah_id',
        'golongan_tertinggi_id',
        'tunjangan',
    ];
}
