<?php

namespace Kanekescom\SiasnReferensi\Transformers;

use Kanekescom\SiasnReferensi\Models\KelompokJabatan;
use League\Fractal\TransformerAbstract;

class KelompokJabatanTransformer extends TransformerAbstract
{
    /**
     * Transform the KelompokJabatan entity.
     *
     * @param Kanekescom\SiasnReferensi\Entities\KelompokJabatan $model
     *
     * @return array
     */
    public function transform(KelompokJabatan $model)
    {
        return [
            'id' => $model->id,

            /* place your other model properties here */
            'nama' => $model->nama,
            'jenis_jabatan_umum' => $model->jenis_jabatan_umum,
            'rumpun_jabatan_id' => $model->rumpun_jabatan_id,
            'instansi_pembina_id' => $model->instansi_pembina_id,

            // 'created_at' => $model->created_at,
            // 'updated_at' => $model->updated_at,
            // 'deleted_at' => $model->deleted_at,
        ];
    }
}
