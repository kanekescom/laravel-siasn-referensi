<?php

namespace Kanekescom\SiasnReferensi\Transformers;

use Kanekescom\SiasnReferensi\Models\JenisHukuman;
use League\Fractal\TransformerAbstract;

class JenisHukumanTransformer extends TransformerAbstract
{
    /**
     * Transform the JenisHukuman entity.
     *
     * @param Kanekescom\SiasnReferensi\Entities\JenisHukuman $model
     *
     * @return array
     */
    public function transform(JenisHukuman $model)
    {
        return [
            'id' => $model->id,

            /* place your other model properties here */
            'nama' => $model->nama,
            'tingkat_hukuman_id' => $model->tingkat_hukuman_id,

            // 'created_at' => $model->created_at,
            // 'updated_at' => $model->updated_at,
            // 'deleted_at' => $model->deleted_at,
        ];
    }
}
