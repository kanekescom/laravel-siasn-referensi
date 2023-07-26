<?php

namespace Kanekescom\SiasnReferensi\Transformers;

use Kanekescom\SiasnReferensi\Models\Pendidikan;
use League\Fractal\TransformerAbstract;

class PendidikanTransformer extends TransformerAbstract
{
    /**
     * Transform the Pendidikan entity.
     *
     * @param Kanekescom\SiasnReferensi\Entities\Pendidikan $model
     *
     * @return array
     */
    public function transform(Pendidikan $model)
    {
        return [
            'id' => $model->id,

            /* place your other model properties here */
            'nama' => $model->nama,
            'kode_cepat' => $model->kode_cepat,
            'tingkat_pendidikan_id' => $model->tingkat_pendidikan_id,
            'status' => $model->status,

            // 'created_at' => $model->created_at,
            // 'updated_at' => $model->updated_at,
            // 'deleted_at' => $model->deleted_at,
        ];
    }
}
