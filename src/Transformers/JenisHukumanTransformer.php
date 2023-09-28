<?php

namespace Kanekescom\Siasn\Referensi\Transformers;

use Kanekescom\Siasn\Referensi\Models\JenisHukuman;
use League\Fractal\TransformerAbstract;

class JenisHukumanTransformer extends TransformerAbstract
{
    /**
     * Transform the JenisHukuman model.
     *
     * @param  Kanekescom\Siasn\Referensi\Models\JenisHukuman  $model
     */
    public function transform(JenisHukuman $model): array
    {
        return [
            'id' => $model->id,

            /* place your other model properties here */
            'nama' => $model->nama,
            'jenis_tingkat_hukuman_id' => $model->jenis_tingkat_hukuman_id,

            // 'created_at' => $model->created_at,
            // 'updated_at' => $model->updated_at,
            // 'deleted_at' => $model->deleted_at,
        ];
    }
}
