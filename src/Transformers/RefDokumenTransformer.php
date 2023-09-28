<?php

namespace Kanekescom\Siasn\Referensi\Transformers;

use Kanekescom\Siasn\Referensi\Models\RefDokumen;
use League\Fractal\TransformerAbstract;

class RefDokumenTransformer extends TransformerAbstract
{
    /**
     * Transform the RefDokumen model.
     *
     * @param  Kanekescom\Siasn\Referensi\Models\RefDokumen  $model
     */
    public function transform(RefDokumen $model): array
    {
        // TODO: Recheck on API.
        return [
            'id' => $model->id,

            /* place your other model properties here */

            // 'created_at' => $model->created_at,
            // 'updated_at' => $model->updated_at,
            // 'deleted_at' => $model->deleted_at,
        ];
    }
}
