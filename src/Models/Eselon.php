<?php

namespace Kanekescom\Siasn\Referensi\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Eselon extends Model
{
    use HasFactory;
    use SoftDeletes;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'siasn_referensi_eselon';

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

    public function jenjangJabatan(): BelongsTo
    {
        return $this->belongsTo(AsnJenjangJabatan::class, 'asn_jenjang_jabatan_id');
    }

    public function golonganTerendah(): BelongsTo
    {
        return $this->belongsTo(Golongan::class, 'terendah_id');
    }

    public function golonganTertinggi(): BelongsTo
    {
        return $this->belongsTo(Golongan::class, 'tertinggi_id');
    }
}
