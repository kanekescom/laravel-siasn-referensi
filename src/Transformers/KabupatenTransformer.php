<?php

namespace Kanekescom\SiasnReferensi\Transformers;

use Kanekescom\SiasnReferensi\Models\Kabupaten;
use League\Fractal\TransformerAbstract;

class KabupatenTransformer extends TransformerAbstract
{
    /**
     * Transform the Kabupaten entity.
     *
     * @param Kanekescom\SiasnReferensi\Entities\Kabupaten $model
     *
     * @return array
     */
    public function transform(Kabupaten $model)
    {
        return [
            'id' => $model->id,

            /* place your other model properties here */
            'nama' => $model->nama,
            'lokasi_id' => $model->lokasi_id,
            'jenis' => $model->jenis,
            'jenis_kabupaten' => $model->jenis_kabupaten,
            'bps_provinsi_kode' => $model->bps_provinsi_kode,
            'bps_kabupaten_kode' => $model->bps_kabupaten_kode,
            'bps_kecamatan_kode' => $model->bps_kecamatan_kode,
            'tanggal_hapus' => $model->tanggal_hapus,

            // 'created_at' => $model->created_at,
            // 'updated_at' => $model->updated_at,
            // 'deleted_at' => $model->deleted_at,
        ];
    }
}
