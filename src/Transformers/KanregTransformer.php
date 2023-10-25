<?php

namespace Kanekescom\Siasn\Referensi\Transformers;

use League\Fractal\TransformerAbstract;

class KanregTransformer extends TransformerAbstract
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
            'regional_kota' => $item['regKota'],
            'nama' => $item['nama'],
            'pengenal' => $item['pengenal'],
            'satuan_kerja_id' => $item['satuanKerjaId'],
            'tanggal_jorge' => $item['tanggalJorge'],
        ];
    }
}
