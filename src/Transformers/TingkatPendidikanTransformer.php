<?php

namespace Kanekescom\SiasnReferensi\Transformers;

use Kanekescom\SiasnReferensi\Models\TingkatPendidikan;
use League\Fractal\TransformerAbstract;

class TingkatPendidikanTransformer extends TransformerAbstract
{
    /**
     * Transform the TingkatPendidikan entity.
     *
     * @param Kanekescom\SiasnReferensi\Entities\TingkatPendidikan $model
     *
     * @return array
     */
    public function transform(TingkatPendidikan $model)
    {
        return [
            'id' => $model->id,

            /* place your other model properties here */
            'nama' => $model->nama,
            'kelompok' => $model->kelompok,
            'golongan_terendah_id' => $model->golongan_terendah_id,
            'golongan_tertinggi_id' => $model->golongan_tertinggi_id,

            // 'created_at' => $model->created_at,
            // 'updated_at' => $model->updated_at,
            // 'deleted_at' => $model->deleted_at,
        ];
    }
}
