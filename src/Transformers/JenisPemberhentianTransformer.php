<?php

namespace Kanekescom\SiasnReferensi\Transformers;

use Kanekescom\SiasnReferensi\Models\JenisPemberhentian;
use League\Fractal\TransformerAbstract;

class JenisPemberhentianTransformer extends TransformerAbstract
{
    /**
     * Transform the JenisPemberhentian entity.
     *
     * @param Kanekescom\SiasnReferensi\Entities\JenisPemberhentian $model
     *
     * @return array
     */
    public function transform(JenisPemberhentian $model)
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
