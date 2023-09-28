<?php

namespace Kanekescom\Siasn\Referensi\Transformers;

use Kanekescom\Siasn\Referensi\Models\AlasanHukumanDisiplin;
use League\Fractal\TransformerAbstract;

class AlasanHukumanDisiplinTransformer extends TransformerAbstract
{
    /**
     * Transform the AlasanHukumanDisiplin model.
     *
     * @param  Kanekescom\Siasn\Referensi\Models\AlasanHukumanDisiplin  $model
     */
    public function transform(AlasanHukumanDisiplin $model): array
    {
        return [
            'id' => $model->id,

            /* place your other model properties here */
            'nama' => $model->nama,
            'keterangan' => $model->keterangan,

            // 'created_at' => $model->created_at,
            // 'updated_at' => $model->updated_at,
            // 'deleted_at' => $model->deleted_at,
        ];
    }
}
