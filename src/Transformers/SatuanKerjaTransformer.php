<?php

namespace Kanekescom\SiasnReferensi\Transformers;

use Kanekescom\SiasnReferensi\Models\SatuanKerja;
use League\Fractal\TransformerAbstract;

class SatuanKerjaTransformer extends TransformerAbstract
{
    /**
     * Transform the SatuanKerja entity.
     *
     * @param Kanekescom\SiasnReferensi\Entities\SatuanKerja $model
     *
     * @return array
     */
    public function transform(SatuanKerja $model)
    {
        return [
            'id' => $model->id,

            /* place your other model properties here */
            'nama' => $model->nama,
            'instansi_id' => $model->instansi_id,

            // 'created_at' => $model->created_at,
            // 'updated_at' => $model->updated_at,
            // 'deleted_at' => $model->deleted_at,
        ];
    }
}
