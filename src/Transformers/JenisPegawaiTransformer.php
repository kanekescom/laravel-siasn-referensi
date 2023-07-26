<?php

namespace Kanekescom\SiasnReferensi\Transformers;

use Kanekescom\SiasnReferensi\Models\JenisPegawai;
use League\Fractal\TransformerAbstract;

class JenisPegawaiTransformer extends TransformerAbstract
{
    /**
     * Transform the JenisPegawai entity.
     *
     * @param Kanekescom\SiasnReferensi\Entities\JenisPegawai $model
     *
     * @return array
     */
    public function transform(JenisPegawai $model)
    {
        return [
            'id' => $model->id,

            /* place your other model properties here */
            'nama' => $model->nama,

            // 'created_at' => $model->created_at,
            // 'updated_at' => $model->updated_at,
            // 'deleted_at' => $model->deleted_at,
        ];
    }
}
