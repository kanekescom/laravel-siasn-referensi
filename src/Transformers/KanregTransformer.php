<?php

namespace Kanekescom\Siasn\Referensi\Transformers;

use Kanekescom\Siasn\Referensi\Models\Kanreg;
use League\Fractal\TransformerAbstract;

class KanregTransformer extends TransformerAbstract
{
    /**
     * Transform the Kanreg model.
     *
     * @param  Kanekescom\Siasn\Referensi\Models\Kanreg  $model
     */
    public function transform(Kanreg $model): array
    {
        return [
            'id' => $model->id,

            /* place your other model properties here */
            'regional_kota' => $model->regional_kota,
            'nama' => $model->nama,
            'pengenal' => $model->pengenal,
            'satuan_kerja_id' => $model->satuan_kerja_id,
            'tanggal_jorge' => $model->tanggal_jorge,
            'tanggal_jorge__formatted' => $model->tanggal_jorge__formatted,

            // 'created_at' => $model->created_at,
            // 'updated_at' => $model->updated_at,
            // 'deleted_at' => $model->deleted_at,
        ];
    }
}
