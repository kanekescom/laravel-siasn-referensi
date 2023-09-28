<?php

namespace Kanekescom\Siasn\Referensi\Transformers;

use Kanekescom\Siasn\Referensi\Models\TingkatPendidikan;
use League\Fractal\TransformerAbstract;

class TingkatPendidikanTransformer extends TransformerAbstract
{
    /**
     * Transform the TingkatPendidikan model.
     *
     * @param  Kanekescom\Siasn\Referensi\Models\TingkatPendidikan  $model
     */
    public function transform(TingkatPendidikan $model): array
    {
        return [
            'id' => $model->id,

            /* place your other model properties here */
            'golongan_id' => $model->golongan_id,
            'nama' => $model->nama,
            'golongan_awal_id' => $model->golongan_awal_id,
            'id_lama' => $model->id_lama,
            'group_tingkat_penddidikan_id' => $model->group_tingkat_penddidikan_id,
            'group_tingkat_penddidikan_nama' => $model->group_tingkat_penddidikan_nama,

            // 'created_at' => $model->created_at,
            // 'updated_at' => $model->updated_at,
            // 'deleted_at' => $model->deleted_at,
        ];
    }
}
