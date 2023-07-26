<?php

namespace Kanekescom\SiasnReferensi\Transformers;

use Kanekescom\SiasnReferensi\Models\JenisKawin;
use League\Fractal\TransformerAbstract;

class JenisKawinTransformer extends TransformerAbstract
{
    /**
     * Transform the JenisKawin entity.
     *
     * @param Kanekescom\SiasnReferensi\Entities\JenisKawin $model
     *
     * @return array
     */
    public function transform(JenisKawin $model)
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
