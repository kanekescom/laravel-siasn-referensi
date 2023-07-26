<?php

namespace Kanekescom\SiasnReferensi\Transformers;

use Kanekescom\SiasnReferensi\Models\Instansi;
use League\Fractal\TransformerAbstract;

class InstansiTransformer extends TransformerAbstract
{
    /**
     * Transform the Instansi entity.
     *
     * @param Kanekescom\SiasnReferensi\Entities\Instansi $model
     *
     * @return array
     */
    public function transform(Instansi $model)
    {
        return [
            'id' => $model->id,

            /* place your other model properties here */
            'nama' => $model->nama,
            'kode_cepat' => $model->kode_cepat,
            'jenis' => $model->jenis,
            'jenis_instansi' => $model->jenis_instansi,

            // 'created_at' => $model->created_at,
            // 'updated_at' => $model->updated_at,
            // 'deleted_at' => $model->deleted_at,
        ];
    }
}
