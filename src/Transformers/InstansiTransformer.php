<?php

namespace Kanekescom\Siasn\Referensi\Transformers;

use Kanekescom\Siasn\Referensi\Models\Instansi;
use League\Fractal\TransformerAbstract;

class InstansiTransformer extends TransformerAbstract
{
    /**
     * Transform the Instansi model.
     *
     * @param  Kanekescom\Siasn\Referensi\Models\Instansi  $model
     */
    public function transform(Instansi $model): array
    {
        return [
            'id' => $model->id,

            /* place your other model properties here */
            'lokasi_id' => $model->lokasi_id,
            'nama' => $model->nama,
            'jenis' => $model->jenis,
            'cepat_kode' => $model->cepat_kode,
            'proses_berkas_dipusat' => $model->proses_berkas_dipusat,
            'merger_cepat_kode' => $model->merger_cepat_kode,
            'status' => $model->status,
            'cepat_kode5' => $model->cepat_kode5,
            'cepat_kode5_lama' => $model->cepat_kode5_lama,
            'nama_baru' => $model->nama_baru,
            'nama_jabatan' => $model->nama_jabatan,
            'jenis_instansi_id' => $model->jenis_instansi_id,

            // 'created_at' => $model->created_at,
            // 'updated_at' => $model->updated_at,
            // 'deleted_at' => $model->deleted_at,
        ];
    }
}
