<?php

namespace Kanekescom\Siasn\Referensi\Transformers;

use Kanekescom\Siasn\Referensi\Models\JabatanFungsional;
use League\Fractal\TransformerAbstract;

class JabatanFungsionalTransformer extends TransformerAbstract
{
    /**
     * Transform the JabatanFungsional model.
     *
     * @param  Kanekescom\Siasn\Referensi\Models\JabatanFungsional  $model
     */
    public function transform(JabatanFungsional $model): array
    {
        return [
            'id' => $model->id,

            /* place your other model properties here */
            'min_golongan_id' => $model->min_golongan_id,
            'max_golongan_id' => $model->max_golongan_id,
            'nama' => $model->nama,
            'bup_usia' => $model->bup_usia, // ? From int
            'tunjangan_jabatan' => $model->tunjangan_jabatan, // ? From int
            'bobot' => $model->bobot, // ? From int
            'kelompok_jabatan_id' => $model->kelompok_jabatan_id,
            'cepat_kode' => $model->cepat_kode,
            'merger_cepat_kode' => $model->merger_cepat_kode,
            'jenis' => $model->jenis,
            'cepat_kode_new' => $model->cepat_kode_new,
            'status' => $model->status,
            'jumlah_formasi' => $model->jumlah_formasi, // ? From int
            'nama_asli' => $model->nama_asli,
            'jenjang' => $model->jenjang,
            'jf_ex_medis' => $model->jf_ex_medis, // ? From int
            'is_syarat_jabatan' => $model->is_syarat_jabatan, // bool

            // 'created_at' => $model->created_at,
            // 'updated_at' => $model->updated_at,
            // 'deleted_at' => $model->deleted_at,
        ];
    }
}
