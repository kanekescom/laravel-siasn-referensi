<?php

namespace Kanekescom\Siasn\Referensi\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
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

    public function golonganMin(): BelongsTo
    {
        return $this->belongsTo(Golongan::class, 'min_gol_id');
    }

    public function golonganMax(): BelongsTo
    {
        return $this->belongsTo(Golongan::class, 'max_gol_id');
    }

    public function kelompokJabatan(): BelongsTo
    {
        return $this->belongsTo(KelJabatan::class, 'kel_jabatan_id');
    }
}
