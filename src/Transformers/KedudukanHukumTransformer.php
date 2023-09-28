<?php

namespace Kanekescom\Siasn\Referensi\Transformers;

use Kanekescom\Siasn\Referensi\Models\KedudukanHukum;
use League\Fractal\TransformerAbstract;

class KedudukanHukumTransformer extends TransformerAbstract
{
    /**
     * Transform the KedudukanHukum model.
     *
     * @param  Kanekescom\Siasn\Referensi\Models\KedudukanHukum  $model
     */
    public function transform(KedudukanHukum $model): array
    {
        return [
            'id' => $model->id,

            /* place your other model properties here */
            'nama' => $model->nama,
            'aturan' => $model->aturan,
            'kode' => $model->kode,

            // 'created_at' => $model->created_at,
            // 'updated_at' => $model->updated_at,
            // 'deleted_at' => $model->deleted_at,
        ];
    }
}
