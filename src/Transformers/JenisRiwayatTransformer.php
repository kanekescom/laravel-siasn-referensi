<?php

namespace Kanekescom\SiasnReferensi\Transformers;

use Kanekescom\SiasnReferensi\Models\JenisRiwayat;
use League\Fractal\TransformerAbstract;

class JenisRiwayatTransformer extends TransformerAbstract
{
    /**
     * Transform the JenisRiwayat entity.
     *
     * @param Kanekescom\SiasnReferensi\Entities\JenisRiwayat $model
     *
     * @return array
     */
    public function transform(JenisRiwayat $model)
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
