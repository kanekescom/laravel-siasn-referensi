<?php

namespace Kanekescom\SiasnReferensi\Transformers;

use Kanekescom\SiasnReferensi\Models\JabatanFungsional;
use League\Fractal\TransformerAbstract;

class JabatanFungsionalTransformer extends TransformerAbstract
{
    /**
     * Transform the JabatanFungsional entity.
     *
     * @param Kanekescom\SiasnReferensi\Entities\JabatanFungsional $model
     *
     * @return array
     */
    public function transform(JabatanFungsional $model)
    {
        return [
            'id' => $model->id,

            /* place your other model properties here */
            'nama' => $model->nama,
            'kode_cepat' => $model->kode_cepat,
            'bup' => $model->bup,
            'kelompok_jabatan_id' => $model->kelompok_jabatan_id,
            'jenjang' => $model->jenjang,
            'status' => $model->status,
            'golongan_terendah_id' => $model->golongan_terendah_id,
            'golongan_tertinggi_id' => $model->golongan_tertinggi_id,
            'tunjangan' => $model->tunjangan,

            // 'created_at' => $model->created_at,
            // 'updated_at' => $model->updated_at,
            // 'deleted_at' => $model->deleted_at,
        ];
    }
}
