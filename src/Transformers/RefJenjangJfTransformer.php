<?php

namespace Kanekescom\Siasn\Referensi\Transformers;

use Kanekescom\Siasn\Referensi\Models\RefJenjangJf;
use League\Fractal\TransformerAbstract;

class RefJenjangJfTransformer extends TransformerAbstract
{
    /**
     * Transform the RefJenjangJf model.
     *
     * @param  Kanekescom\Siasn\Referensi\Models\RefJenjangJf  $model
     */
    public function transform(RefJenjangJf $model): array
    {
        return [
            'id' => $model->id,

            /* place your other model properties here */
            'deskripsi' => $model->deskripsi,
            'peraturan' => $model->peraturan,

            // 'created_at' => $model->created_at,
            // 'updated_at' => $model->updated_at,
            // 'deleted_at' => $model->deleted_at,
        ];
    }
}
