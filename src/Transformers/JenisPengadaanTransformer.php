<?php

namespace Kanekescom\SiasnReferensi\Transformers;

use Kanekescom\SiasnReferensi\Models\JenisPengadaan;
use League\Fractal\TransformerAbstract;

class JenisPengadaanTransformer extends TransformerAbstract
{
    /**
     * Transform the JenisPengadaan entity.
     *
     * @param Kanekescom\SiasnReferensi\Entities\JenisPengadaan $model
     *
     * @return array
     */
    public function transform(JenisPengadaan $model)
    {
        return [
            'id' => $model->id,

            /* place your other model properties here */
            'nama' => $model->nama,

            // 'created_at' => $model->created_at,
            // 'updated_at' => $model->updated_at,
            // 'deleted_at' => $model->deleted_at,
        ];
    }
}
