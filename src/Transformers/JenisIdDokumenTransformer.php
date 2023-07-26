<?php

namespace Kanekescom\SiasnReferensi\Transformers;

use Kanekescom\SiasnReferensi\Models\JenisIdDokumen;
use League\Fractal\TransformerAbstract;

class JenisIdDokumenTransformer extends TransformerAbstract
{
    /**
     * Transform the JenisIdDokumen entity.
     *
     * @param Kanekescom\SiasnReferensi\Entities\JenisIdDokumen $model
     *
     * @return array
     */
    public function transform(JenisIdDokumen $model)
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
