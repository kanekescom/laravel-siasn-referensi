<?php

namespace Kanekescom\Siasn\Referensi\Transformers;

use Kanekescom\Siasn\Referensi\Models\Lokasi;
use League\Fractal\TransformerAbstract;

class LokasiTransformer extends TransformerAbstract
{
    /**
     * Transform the Lokasi model.
     *
     * @param  Kanekescom\Siasn\Referensi\Models\Lokasi  $model
     */
    public function transform(Lokasi $model): array
    {
        return [
            'id' => $model->id,

            /* place your other model properties here */
            'kanreg_id' => $model->kanreg_id,
            'lokasi_id' => $model->lokasi_id,
            'nama' => $model->nama,
            'cepat_kode' => $model->cepat_kode,
            'jenis' => $model->jenis,
            'jenis_kabupaten' => $model->jenis_kabupaten,
            'removal_date' => $model->removal_date,
            'removal_date__formatted' => $model->removal_date__formatted,
            'jenis_desa' => $model->jenis_desa,
            'tanggal_jorge' => $model->tanggal_jorge,
            'tanggal_jorge__formatted' => $model->tanggal_jorge__formatted,
            'merger_cepat_kode' => $model->merger_cepat_kode,
            'ibu_kota' => $model->ibu_kota,

            // 'created_at' => $model->created_at,
            // 'updated_at' => $model->updated_at,
            // 'deleted_at' => $model->deleted_at,
        ];
    }
}
