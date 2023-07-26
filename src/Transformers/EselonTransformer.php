<?php

namespace Kanekescom\SiasnReferensi\Transformers;

use Kanekescom\SiasnReferensi\Models\Eselon;
use League\Fractal\TransformerAbstract;

class EselonTransformer extends TransformerAbstract
{
    /**
     * Transform the Eselon entity.
     *
     * @param Kanekescom\SiasnReferensi\Entities\Eselon $model
     *
     * @return array
     */
    public function transform(Eselon $model)
    {
        return [
            'id' => $model->id,

            /* place your other model properties here */
            'nama' => $model->nama,
            'jabatan' => $model->jabatan,
            'level' => $model->level,
            'golongan_terendah_id' => $model->golongan_terendah_id,
            'golongan_tertinggi_id' => $model->golongan_tertinggi_id,

            // 'created_at' => $model->created_at,
            // 'updated_at' => $model->updated_at,
            // 'deleted_at' => $model->deleted_at,
        ];
    }
}
