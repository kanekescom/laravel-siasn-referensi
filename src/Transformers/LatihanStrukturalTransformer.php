<?php

namespace Kanekescom\Siasn\Referensi\Transformers;

use Kanekescom\Siasn\Referensi\Models\LatihanStruktural;
use League\Fractal\TransformerAbstract;

class LatihanStrukturalTransformer extends TransformerAbstract
{
    /**
     * Transform the LatihanStruktural model.
     *
     * @param  Kanekescom\Siasn\Referensi\Models\LatihanStruktural  $model
     */
    public function transform(LatihanStruktural $model): array
    {
        return [
            'id' => $model->id,

            /* place your other model properties here */
            'nama' => $model->nama,
            'eselon_level' => $model->eselon_level,
            'ncsis_time' => $model->ncsis_time,
            'ncsis_time__formatted' => $model->ncsis_time__formatted,
            'struktural_pns' => $model->struktural_pns,

            // 'created_at' => $model->created_at,
            // 'updated_at' => $model->updated_at,
            // 'deleted_at' => $model->deleted_at,
        ];
    }
}
