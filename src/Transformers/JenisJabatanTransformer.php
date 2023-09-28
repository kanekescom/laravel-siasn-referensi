<?php

namespace Kanekescom\Siasn\Referensi\Transformers;

use Kanekescom\Siasn\Referensi\Models\JenisJabatan;
use League\Fractal\TransformerAbstract;

class JenisJabatanTransformer extends TransformerAbstract
{
    /**
     * Transform the JenisJabatan model.
     *
     * @param  Kanekescom\Siasn\Referensi\Models\JenisJabatan  $model
     */
    public function transform(JenisJabatan $model): array
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
