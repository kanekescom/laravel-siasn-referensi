<?php

namespace Kanekescom\Siasn\Referensi\Transformers;

use League\Fractal\TransformerAbstract;

class GolonganTransformer extends TransformerAbstract
{
    /**
     * A Fractal transformer.
     *
     * @return array
     */
    public function transform(array $item)
    {
        return [
            'id' => $item['id'],
            'nama' => $item['nama'],
            'nama_pangkat' => $item['namaPangkat'],
            'fungsi_kredit_utama' => $item['fungKredututama'],
            'fungsi_kredit_tambahan' => $item['fungKreditTambahan'],
            'fungsi_kredit_total' => $item['fungKreditTotal'],
        ];
    }
}
