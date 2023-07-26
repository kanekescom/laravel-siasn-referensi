<?php

namespace Kanekescom\SiasnReferensi\Transformers;

use Kanekescom\SiasnReferensi\Models\JenisKompetensi;
use League\Fractal\TransformerAbstract;

class JenisKompetensiTransformer extends TransformerAbstract
{
    /**
     * Transform the JenisKompetensi entity.
     *
     * @param Kanekescom\SiasnReferensi\Entities\JenisKompetensi $model
     *
     * @return array
     */
    public function transform(JenisKompetensi $model)
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
