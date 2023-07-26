<?php

namespace Kanekescom\SiasnReferensi\Transformers;

use Kanekescom\SiasnReferensi\Models\DiklatStruktural;
use League\Fractal\TransformerAbstract;

class DiklatStrukturalTransformer extends TransformerAbstract
{
    /**
     * Transform the DiklatStruktural entity.
     *
     * @param Kanekescom\SiasnReferensi\Entities\DiklatStruktural $model
     *
     * @return array
     */
    public function transform(DiklatStruktural $model)
    {
        return [
            'id' => $model->id,

            /* place your other model properties here */
            'nama' => $model->nama,
            'eselon_level' => $model->eselon_level,

            // 'created_at' => $model->created_at,
            // 'updated_at' => $model->updated_at,
            // 'deleted_at' => $model->deleted_at,
        ];
    }
}
