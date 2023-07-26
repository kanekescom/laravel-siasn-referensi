<?php

namespace Kanekescom\SiasnReferensi\Transformers;

use Kanekescom\SiasnReferensi\Models\Cltn;
use League\Fractal\TransformerAbstract;

class CltnTransformer extends TransformerAbstract
{
    /**
     * Transform the Cltn entity.
     *
     * @param Kanekescom\SiasnReferensi\Entities\Cltn $model
     *
     * @return array
     */
    public function transform(Cltn $model)
    {
        return [
            'id' => $model->id,

            /* place your other model properties here */
            'nama' => $model->nama,
            'kedudukan_hukum_id' => $model->kedudukan_hukum_id,

            // 'created_at' => $model->created_at,
            // 'updated_at' => $model->updated_at,
            // 'deleted_at' => $model->deleted_at,
        ];
    }
}
