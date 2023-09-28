<?php

namespace Kanekescom\Siasn\Referensi\Transformers;

use Kanekescom\Siasn\Referensi\Models\JenisAnak;
use League\Fractal\TransformerAbstract;

class JenisAnakTransformer extends TransformerAbstract
{
    /**
     * Transform the JenisAnak model.
     *
     * @param  Kanekescom\Siasn\Referensi\Models\JenisAnak  $model
     */
    public function transform(JenisAnak $model): array
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
