<?php

namespace Kanekescom\SiasnReferensi\Transformers;

use Kanekescom\SiasnReferensi\Models\Penghargaan;
use League\Fractal\TransformerAbstract;

class PenghargaanTransformer extends TransformerAbstract
{
    /**
     * Transform the Penghargaan entity.
     *
     * @param Kanekescom\SiasnReferensi\Entities\Penghargaan $model
     *
     * @return array
     */
    public function transform(Penghargaan $model)
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
