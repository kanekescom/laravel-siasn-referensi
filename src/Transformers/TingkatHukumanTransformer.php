<?php

namespace Kanekescom\SiasnReferensi\Transformers;

use Kanekescom\SiasnReferensi\Models\TingkatHukuman;
use League\Fractal\TransformerAbstract;

class TingkatHukumanTransformer extends TransformerAbstract
{
    /**
     * Transform the TingkatHukuman entity.
     *
     * @param Kanekescom\SiasnReferensi\Entities\TingkatHukuman $model
     *
     * @return array
     */
    public function transform(TingkatHukuman $model)
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
