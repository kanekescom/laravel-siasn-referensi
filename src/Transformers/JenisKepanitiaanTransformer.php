<?php

namespace Kanekescom\SiasnReferensi\Transformers;

use Kanekescom\SiasnReferensi\Models\JenisKepanitiaan;
use League\Fractal\TransformerAbstract;

class JenisKepanitiaanTransformer extends TransformerAbstract
{
    /**
     * Transform the JenisKepanitiaan entity.
     *
     * @param Kanekescom\SiasnReferensi\Entities\JenisKepanitiaan $model
     *
     * @return array
     */
    public function transform(JenisKepanitiaan $model)
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
