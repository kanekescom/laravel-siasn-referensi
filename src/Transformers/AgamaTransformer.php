<?php

namespace Kanekescom\Siasn\Referensi\Transformers;

use Kanekescom\Siasn\Referensi\Models\Agama;
use League\Fractal\TransformerAbstract;

class AgamaTransformer extends TransformerAbstract
{
    /**
     * Transform the Agama model.
     *
     * @param  Kanekescom\Siasn\Referensi\Models\Agama  $model
     */
    public function transform(Agama $model): array
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
