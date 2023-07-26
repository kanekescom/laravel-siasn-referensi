<?php

namespace Kanekescom\SiasnReferensi\Transformers;

use Kanekescom\SiasnReferensi\Models\JenisUnor;
use League\Fractal\TransformerAbstract;

class JenisUnorTransformer extends TransformerAbstract
{
    /**
     * Transform the JenisUnor entity.
     *
     * @param Kanekescom\SiasnReferensi\Entities\JenisUnor $model
     *
     * @return array
     */
    public function transform(JenisUnor $model)
    {
        return [
            'id' => $model->id,

            /* place your other model properties here */
            'nama' => $model->nama,
            'jenis' => $model->jenis,

            // 'created_at' => $model->created_at,
            // 'updated_at' => $model->updated_at,
            // 'deleted_at' => $model->deleted_at,
        ];
    }
}
