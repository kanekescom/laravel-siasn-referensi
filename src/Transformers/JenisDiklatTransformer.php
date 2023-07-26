<?php

namespace Kanekescom\SiasnReferensi\Transformers;

use Kanekescom\SiasnReferensi\Models\JenisDiklat;
use League\Fractal\TransformerAbstract;

class JenisDiklatTransformer extends TransformerAbstract
{
    /**
     * Transform the JenisDiklat entity.
     *
     * @param Kanekescom\SiasnReferensi\Entities\JenisDiklat $model
     *
     * @return array
     */
    public function transform(JenisDiklat $model)
    {
        return [
            'id' => $model->id,

            /* place your other model properties here */
            'nama' => $model->nama,
            'kode' => $model->kode,

            // 'created_at' => $model->created_at,
            // 'updated_at' => $model->updated_at,
            // 'deleted_at' => $model->deleted_at,
        ];
    }
}
