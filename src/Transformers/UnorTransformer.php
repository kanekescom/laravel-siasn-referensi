<?php

namespace Kanekescom\SiasnReferensi\Transformers;

use Kanekescom\SiasnReferensi\Models\Unor;
use League\Fractal\TransformerAbstract;

class UnorTransformer extends TransformerAbstract
{
    /**
     * Transform the Unor entity.
     *
     * @param Kanekescom\SiasnReferensi\Entities\Unor $model
     *
     * @return array
     */
    public function transform(Unor $model)
    {
        return [
            'id' => $model->id,

            /* place your other model properties here */
            'nama' => $model->nama,
            'jabatan' => $model->jabatan,
            'eselon_id' => $model->eselon_id,
            'instansi_id' => $model->instansi_id,
            'parent_id' => $model->parent_id,

            // 'created_at' => $model->created_at,
            // 'updated_at' => $model->updated_at,
            // 'deleted_at' => $model->deleted_at,
        ];
    }

    /**
     * Transform data from API.
     *
     * @param array $model
     *
     * @return array
     */
    public static function transformFromApi(array $array)
    {
        return [
            'id' =>  $array['Id'],
            'nama' =>  $array['NamaUnor'],
            'jabatan' =>  $array['NamaJabatan'],
            'eselon_id' =>  $array['EselonId'],
            'instansi_id' =>  $array['InstansiId'],
            'parent_id' =>  $array['DiatasanId'],
        ];
    }
}
