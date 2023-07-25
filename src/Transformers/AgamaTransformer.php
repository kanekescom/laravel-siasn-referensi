<?php

namespace Kanekescom\SiasnReferensi\Transformers;

use Kanekescom\SiasnReferensi\Models\Agama;
use League\Fractal\TransformerAbstract;

class AgamaTransformer extends TransformerAbstract
{
    /**
     * Transform the Agama entity.
     *
     * @param Kanekescom\SiasnReferensi\Entities\Agama $model
     *
     * @return array
     */
    public function transform(Agama $model)
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
