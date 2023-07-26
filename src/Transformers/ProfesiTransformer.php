<?php

namespace Kanekescom\SiasnReferensi\Transformers;

use Kanekescom\SiasnReferensi\Models\Profesi;
use League\Fractal\TransformerAbstract;

class ProfesiTransformer extends TransformerAbstract
{
    /**
     * Transform the Profesi entity.
     *
     * @param Kanekescom\SiasnReferensi\Entities\Profesi $model
     *
     * @return array
     */
    public function transform(Profesi $model)
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