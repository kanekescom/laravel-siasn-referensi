<?php

namespace Kanekescom\SiasnReferensi\Transformers;

use Kanekescom\SiasnReferensi\Models\Dokumen;
use League\Fractal\TransformerAbstract;

class DokumenTransformer extends TransformerAbstract
{
    /**
     * Transform the Dokumen entity.
     *
     * @param Kanekescom\SiasnReferensi\Entities\Dokumen $model
     *
     * @return array
     */
    public function transform(Dokumen $model)
    {
        return [
            'id' => $model->id,

            /* place your other model properties here */
            'nama' => $model->nama,
            'layanan' => $model->layanan,
            'tipe_berkas' => $model->tipe_berkas,
            'tautan_proses' => $model->tautan_proses,
            'wajib' => $model->wajib,

            // 'created_at' => $model->created_at,
            // 'updated_at' => $model->updated_at,
            // 'deleted_at' => $model->deleted_at,
        ];
    }
}
