<?php

namespace Kanekescom\SiasnReferensi\Transformers;

use Kanekescom\SiasnReferensi\Models\JenisKelamin;
use League\Fractal\TransformerAbstract;

class JenisKelaminTransformer extends TransformerAbstract
{
    /**
     * Transform the JenisKelamin entity.
     *
     * @param Kanekescom\SiasnReferensi\Entities\JenisKelamin $model
     *
     * @return array
     */
    public function transform(JenisKelamin $model)
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
