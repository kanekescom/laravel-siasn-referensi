<?php

namespace Kanekescom\SiasnReferensi\Transformers;

use Kanekescom\SiasnReferensi\Models\Taspen;
use League\Fractal\TransformerAbstract;

class TaspenTransformer extends TransformerAbstract
{
    /**
     * Transform the Taspen entity.
     *
     * @param Kanekescom\SiasnReferensi\Entities\Taspen $model
     *
     * @return array
     */
    public function transform(Taspen $model)
    {
        return [
            'id' => $model->id,

            /* place your other model properties here */
            'nama' => $model->nama,
            'ktua_id' => $model->ktua_id,

            // 'created_at' => $model->created_at,
            // 'updated_at' => $model->updated_at,
            // 'deleted_at' => $model->deleted_at,
        ];
    }
}
