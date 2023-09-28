<?php

namespace Kanekescom\Siasn\Referensi\Transformers;

use Kanekescom\Siasn\Referensi\Models\JabatanFungsionalUmum;
use League\Fractal\TransformerAbstract;

class JabatanFungsionalUmumTransformer extends TransformerAbstract
{
    /**
     * Transform the JabatanFungsionalUmum model.
     *
     * @param  Kanekescom\Siasn\Referensi\Models\JabatanFungsionalUmum  $model
     */
    public function transform(JabatanFungsionalUmum $model): array
    {
        return [
            'id' => $model->id,

            /* place your other model properties here */
            'nama' => $model->nama,
            'cepat_kode' => $model->cepat_kode,
            'wajib_ganti_tertentu' => $model->wajib_ganti_tertentu,
            'jenis_jabatan_umum_id' => $model->jenis_jabatan_umum_id,
            'merger_cepat_kode' => $model->merger_cepat_kode,
            'nama_asli' => $model->nama_asli,
            'kode_menpan' => $model->kode_menpan,
            'instansi_id' => $model->instansi_id,
            'status' => $model->status, // ? From int
            'asal_peraturan_id' => $model->asal_peraturan_id, // ? From int
            'jfu_urusan_pemerintahan' => $model->jfu_urusan_pemerintahan, // ? From int

            // 'created_at' => $model->created_at,
            // 'updated_at' => $model->updated_at,
            // 'deleted_at' => $model->deleted_at,
        ];
    }
}
