<?php

namespace Kanekescom\SiasnReferensi\Transformers;

use Kanekescom\SiasnReferensi\Models\AlasanHukdis;
use League\Fractal\TransformerAbstract;

class AlasanHukdisTransformer extends TransformerAbstract
{
    /**
     * Transform the AlasanHukdis entity.
     *
     * @param Kanekescom\SiasnReferensi\Entities\AlasanHukdis $model
     *
     * @return array
     */
    public function transform(AlasanHukdis $model)
    {
        return [
            'id' => $model->id,

            /* place your other model properties here */
            'nama' => $model->nama,
            'keterangan' => $model->keterangan,

            // 'created_at' => $model->created_at,
            // 'updated_at' => $model->updated_at,
            // 'deleted_at' => $model->deleted_at,
        ];
    }
}
