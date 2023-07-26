<?php

namespace Kanekescom\SiasnReferensi\Transformers;

use Kanekescom\SiasnReferensi\Models\Lokasi;
use League\Fractal\TransformerAbstract;

class LokasiTransformer extends TransformerAbstract
{
    /**
     * Transform the Lokasi entity.
     *
     * @param Kanekescom\SiasnReferensi\Entities\Lokasi $model
     *
     * @return array
     */
    public function transform(Lokasi $model)
    {
        return [
            'id' => $model->id,

            /* place your other model properties here */
            'nama' => $model->nama,
            'kode_cepat' => $model->kode_cepat,
            'kanreg_id' => $model->kanreg_id,
            'lokasi_id' => $model->lokasi_id,
            'jenis' => $model->jenis,
            'jenis_kabupaten' => $model->jenis_kabupaten,
            'jenis_desa' => $model->jenis_desa,
            'ibu_kota' => $model->ibu_kota,

            // 'created_at' => $model->created_at,
            // 'updated_at' => $model->updated_at,
            // 'deleted_at' => $model->deleted_at,
        ];
    }
}
