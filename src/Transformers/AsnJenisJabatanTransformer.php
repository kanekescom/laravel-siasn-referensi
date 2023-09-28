<?php

namespace Kanekescom\Siasn\Referensi\Transformers;

use Kanekescom\Siasn\Referensi\Models\AsnJenisJabatan;
use League\Fractal\TransformerAbstract;

class AsnJenisJabatanTransformer extends TransformerAbstract
{
    /**
     * Transform the AsnJenisJabatan model.
     *
     * @param  Kanekescom\Siasn\Referensi\Models\AsnJenisJabatan  $model
     */
    public function transform(AsnJenisJabatan $model): array
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
