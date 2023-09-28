<?php

namespace Kanekescom\Siasn\Referensi\Transformers;

use Kanekescom\Siasn\Referensi\Models\SatuanKerja;
use League\Fractal\TransformerAbstract;

class SatuanKerjaTransformer extends TransformerAbstract
{
    /**
     * Transform the SatuanKerja model.
     *
     * @param  Kanekescom\Siasn\Referensi\Models\SatuanKerja  $model
     */
    public function transform(SatuanKerja $model): array
    {
        return [
            'id' => $model->id,

            /* place your other model properties here */
            'kanreg_id' => $model->kanreg_id,
            'lokasi_id' => $model->lokasi_id,
            'instansi_id' => $model->instansi_id,
            'nama' => $model->nama,
            'parent_id' => $model->parent_id,
            'jenis_satuan_kerja_id' => $model->jenis_satuan_kerja_id,
            'unblock_code' => $model->unblock_code,

            // 'created_at' => $model->created_at,
            // 'updated_at' => $model->updated_at,
            // 'deleted_at' => $model->deleted_at,
        ];
    }
}
