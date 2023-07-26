<?php

namespace Kanekescom\SiasnReferensi\Transformers;

use Kanekescom\SiasnReferensi\Models\Kanreg;
use League\Fractal\TransformerAbstract;

class KanregTransformer extends TransformerAbstract
{
    /**
     * Transform the Kanreg entity.
     *
     * @param Kanekescom\SiasnReferensi\Entities\Kanreg $model
     *
     * @return array
     */
    public function transform(Kanreg $model)
    {
        return [
            'id' => $model->id,

            /* place your other model properties here */
            'nama' => $model->nama,
            'kota' => $model->kota,

            // 'created_at' => $model->created_at,
            // 'updated_at' => $model->updated_at,
            // 'deleted_at' => $model->deleted_at,
        ];
    }
}
