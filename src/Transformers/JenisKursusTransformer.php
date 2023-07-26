<?php

namespace Kanekescom\SiasnReferensi\Transformers;

use Kanekescom\SiasnReferensi\Models\JenisKursus;
use League\Fractal\TransformerAbstract;

class JenisKursusTransformer extends TransformerAbstract
{
    /**
     * Transform the JenisKursus entity.
     *
     * @param Kanekescom\SiasnReferensi\Entities\JenisKursus $model
     *
     * @return array
     */
    public function transform(JenisKursus $model)
    {
        return [
            'id' => $model->id,

            /* place your other model properties here */
            'nama' => $model->nama,
            'kode_cepat' => $model->kode_cepat,

            // 'created_at' => $model->created_at,
            // 'updated_at' => $model->updated_at,
            // 'deleted_at' => $model->deleted_at,
        ];
    }
}
