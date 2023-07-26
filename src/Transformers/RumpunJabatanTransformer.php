<?php

namespace Kanekescom\SiasnReferensi\Transformers;

use Kanekescom\SiasnReferensi\Models\RumpunJabatan;
use League\Fractal\TransformerAbstract;

class RumpunJabatanTransformer extends TransformerAbstract
{
    /**
     * Transform the RumpunJabatan entity.
     *
     * @param Kanekescom\SiasnReferensi\Entities\RumpunJabatan $model
     *
     * @return array
     */
    public function transform(RumpunJabatan $model)
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
