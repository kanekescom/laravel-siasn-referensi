<?php

namespace Kanekescom\SiasnReferensi\Transformers;

use Kanekescom\SiasnReferensi\Models\JenisPensiun;
use League\Fractal\TransformerAbstract;

class JenisPensiunTransformer extends TransformerAbstract
{
    /**
     * Transform the JenisPensiun entity.
     *
     * @param Kanekescom\SiasnReferensi\Entities\JenisPensiun $model
     *
     * @return array
     */
    public function transform(JenisPensiun $model)
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
