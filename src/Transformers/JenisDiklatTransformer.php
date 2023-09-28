<?php

namespace Kanekescom\Siasn\Referensi\Transformers;

use Kanekescom\Siasn\Referensi\Models\JenisDiklat;
use League\Fractal\TransformerAbstract;

class JenisDiklatTransformer extends TransformerAbstract
{
    /**
     * Transform the JenisDiklat model.
     *
     * @param  Kanekescom\Siasn\Referensi\Models\JenisDiklat  $model
     */
    public function transform(JenisDiklat $model): array
    {
        return [
            'id' => $model->id,

            /* place your other model properties here */
            'jenis_diklat' => $model->jenis_diklat,

            // 'created_at' => $model->created_at,
            // 'updated_at' => $model->updated_at,
            // 'deleted_at' => $model->deleted_at,
        ];
    }
}
