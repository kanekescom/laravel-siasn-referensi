<?php

namespace Kanekescom\SiasnReferensi\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class TingkatHukuman extends Model implements Transformable
{
    use HasFactory;
    use SoftDeletes;
    use TransformableTrait;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'siasn_referensi_tingkat_hukuman';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'nama',
    ];
}
