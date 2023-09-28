<?php

namespace Kanekescom\Siasn\Referensi\Transformers;

use Kanekescom\Siasn\Referensi\Models\Golongan;
use League\Fractal\TransformerAbstract;

class GolonganTransformer extends TransformerAbstract
{
    /**
     * Transform the Golongan model.
     *
     * @param  Kanekescom\Siasn\Referensi\Models\Golongan  $model
     */
    public function transform(Golongan $model): array
    {
        return [
            'id' => $model->id,

            /* place your other model properties here */
            'nama' => $model->nama,
            'nama_pangkat' => $model->nama_pangkat,
            'fungsi_kredit_utama' => $model->fungsi_kredit_utama, // ? From int
            'fungsi_kredit_tambahan' => $model->fungsi_kredit_tambahan, // ? From int
            'fungsi_kredit_total' => $model->fungsi_kredit_total, // ? From int

            // 'created_at' => $model->created_at,
            // 'updated_at' => $model->updated_at,
            // 'deleted_at' => $model->deleted_at,
        ];
    }
}
