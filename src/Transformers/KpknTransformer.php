<?php

namespace Kanekescom\SiasnReferensi\Transformers;

use Kanekescom\SiasnReferensi\Models\Kpkn;
use League\Fractal\TransformerAbstract;

class KpknTransformer extends TransformerAbstract
{
    /**
     * Transform the Kpkn entity.
     *
     * @param Kanekescom\SiasnReferensi\Entities\Kpkn $model
     *
     * @return array
     */
    public function transform(Kpkn $model)
    {
        return [
            'id' => $model->id,

            /* place your other model properties here */
            'nama' => $model->nama,

            // 'created_at' => $model->created_at,
            // 'updated_at' => $model->updated_at,
            // 'deleted_at' => $model->deleted_at,
        ];
    }
}
