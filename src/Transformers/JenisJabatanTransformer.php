<?php

namespace Kanekescom\SiasnReferensi\Transformers;

use Kanekescom\SiasnReferensi\Models\JenisJabatan;
use League\Fractal\TransformerAbstract;

class JenisJabatanTransformer extends TransformerAbstract
{
    /**
     * Transform the JenisJabatan entity.
     *
     * @param Kanekescom\SiasnReferensi\Entities\JenisJabatan $model
     *
     * @return array
     */
    public function transform(JenisJabatan $model)
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
