<?php

namespace Kanekescom\SiasnReferensi\Transformers;

use Kanekescom\SiasnReferensi\Models\Golongan;
use League\Fractal\TransformerAbstract;

class GolonganTransformer extends TransformerAbstract
{
    /**
     * Transform the Golongan entity.
     *
     * @param Kanekescom\SiasnReferensi\Entities\Golongan $model
     *
     * @return array
     */
    public function transform(Golongan $model)
    {
        return [
            'id' => $model->id,

            /* place your other model properties here */
            'nama' => $model->nama,
            'pangkat' => $model->pangkat,
            'fungsi_kredit_utama' => $model->fungsi_kredit_utama,
            'fungsi_kredit_tambahan' => $model->fungsi_kredit_tambahan,
            'fungsi_kredit_total' => $model->fungsi_kredit_total,

            // 'created_at' => $model->created_at,
            // 'updated_at' => $model->updated_at,
            // 'deleted_at' => $model->deleted_at,
        ];
    }
}
