<?php

namespace Kanekescom\SiasnReferensi\Transformers;

use Kanekescom\SiasnReferensi\Models\JenisKp;
use League\Fractal\TransformerAbstract;

class JenisKpTransformer extends TransformerAbstract
{
    /**
     * Transform the JenisKp entity.
     *
     * @param Kanekescom\SiasnReferensi\Entities\JenisKp $model
     *
     * @return array
     */
    public function transform(JenisKp $model)
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
