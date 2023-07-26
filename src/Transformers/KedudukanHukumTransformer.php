<?php

namespace Kanekescom\SiasnReferensi\Transformers;

use Kanekescom\SiasnReferensi\Models\KedudukanHukum;
use League\Fractal\TransformerAbstract;

class KedudukanHukumTransformer extends TransformerAbstract
{
    /**
     * Transform the KedudukanHukum entity.
     *
     * @param Kanekescom\SiasnReferensi\Entities\KedudukanHukum $model
     *
     * @return array
     */
    public function transform(KedudukanHukum $model)
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
