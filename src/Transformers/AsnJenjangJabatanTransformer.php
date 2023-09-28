<?php

namespace Kanekescom\Siasn\Referensi\Transformers;

use Kanekescom\Siasn\Referensi\Models\AsnJenjangJabatan;
use League\Fractal\TransformerAbstract;

class AsnJenjangJabatanTransformer extends TransformerAbstract
{
    /**
     * Transform the AsnJenjangJabatan model.
     *
     * @param  Kanekescom\Siasn\Referensi\Models\AsnJenjangJabatan  $model
     */
    public function transform(AsnJenjangJabatan $model): array
    {
        return [
            'id' => $model->id,

            /* place your other model properties here */
            'nama' => $model->nama,
            'asn_jenis_jabatan_id' => $model->asn_jenis_jabatan_id,

            // 'created_at' => $model->created_at,
            // 'updated_at' => $model->updated_at,
            // 'deleted_at' => $model->deleted_at,
        ];
    }
}
