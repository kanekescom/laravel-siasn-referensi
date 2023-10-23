<?php

namespace Kanekescom\Siasn\Referensi\Transformers;

use League\Fractal\TransformerAbstract;

class LokasiTransformer extends TransformerAbstract
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
            'kanreg_id' => $item['kanregId'],
            'lokasi_id' => $item['lokasiId'],
            'nama' => $item['nama'],
            'kode_cepat' => $item['cepatKode'],
            'jenis' => $item['jenis'],
            'jenis_kabupaten' => $item['jenisKabupaten'],
            'removal_date' => $item['removalDate'],
            'jenis_desa' => $item['jenisDesa'],
            'tanggal_jorge' => $item['tanggalJorge'],
            'kode_cepat_merger' => $item['mgrCepatKode'],
            'ibu_kota' => $item['ibukota'],
        ];
    }
}
