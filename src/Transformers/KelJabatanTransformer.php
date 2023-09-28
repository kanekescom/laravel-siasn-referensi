<?php

namespace Kanekescom\Siasn\Referensi\Transformers;

use Kanekescom\Siasn\Referensi\Models\KelJabatan;
use League\Fractal\TransformerAbstract;

class KelJabatanTransformer extends TransformerAbstract
{
    /**
     * Transform the KelJabatan model.
     *
     * @param  Kanekescom\Siasn\Referensi\Models\KelJabatan  $model
     */
    public function transform(KelJabatan $model): array
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
