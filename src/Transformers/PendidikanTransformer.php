<?php

namespace Kanekescom\Siasn\Referensi\Transformers;

use Kanekescom\Siasn\Referensi\Models\Pendidikan;
use League\Fractal\TransformerAbstract;

class PendidikanTransformer extends TransformerAbstract
{
    /**
     * Transform the Pendidikan model.
     *
     * @param  Kanekescom\Siasn\Referensi\Models\Pendidikan  $model
     */
    public function transform(Pendidikan $model): array
    {
        return [
            'id' => $model->id,

            /* place your other model properties here */
            'tingkat_pendidikan_id' => $model->tingkat_pendidikan_id,
            'nama' => $model->nama,
            'cepat_kode' => $model->cepat_kode,
            'merger_cepat_kode' => $model->merger_cepat_kode,
            'nama_asli' => $model->nama_asli,
            'status' => $model->status, // ? From int
            'sub_rumpun_prog_id' => $model->sub_rumpun_prog_id, // ? From int
            'cepat_kode_induk' => $model->cepat_kode_induk,
            'sub_rumpun_prog_kode' => $model->sub_rumpun_prog_kode,

            // 'created_at' => $model->created_at,
            // 'updated_at' => $model->updated_at,
            // 'deleted_at' => $model->deleted_at,
        ];
    }
}
