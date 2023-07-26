<?php

namespace Kanekescom\SiasnReferensi\Transformers;

use Kanekescom\SiasnReferensi\Models\JabatanFungsionalUmum;
use League\Fractal\TransformerAbstract;

class JabatanFungsionalUmumTransformer extends TransformerAbstract
{
    /**
     * Transform the JabatanFungsionalUmum entity.
     *
     * @param Kanekescom\SiasnReferensi\Entities\JabatanFungsionalUmum $model
     *
     * @return array
     */
    public function transform(JabatanFungsionalUmum $model)
    {
        return [
            'id' => $model->id,

            /* place your other model properties here */
            'nama' => $model->nama,
            'kode_cepat' => $model->kode_cepat,
            'status' => $model->status,

            // 'created_at' => $model->created_at,
            // 'updated_at' => $model->updated_at,
            // 'deleted_at' => $model->deleted_at,
        ];
    }
}
