<?php

namespace Kanekescom\Siasn\Referensi\Transformers;

use Kanekescom\Siasn\Referensi\Models\Eselon;
use League\Fractal\TransformerAbstract;

class EselonTransformer extends TransformerAbstract
{
    /**
     * Transform the Eselon model.
     *
     * @param  Kanekescom\Siasn\Referensi\Models\Eselon  $model
     */
    public function transform(Eselon $model): array
    {
        return [
            'id' => $model->id,

            /* place your other model properties here */
            'nama' => $model->nama,
            'golongan_terendah_id' => $model->golongan_terendah_id,
            'golongan_tertinggi_id' => $model->golongan_tertinggi_id,
            'eselon_level_id' => $model->eselon_level_id,
            'asn_jenjang_jabatan_id' => $model->asn_jenjang_jabatan_id,
            'jabatan_asn' => $model->jabatan_asn,

            // 'created_at' => $model->created_at,
            // 'updated_at' => $model->updated_at,
            // 'deleted_at' => $model->deleted_at,
        ];
    }
}
