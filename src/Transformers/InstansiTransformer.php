<?php

namespace Kanekescom\Siasn\Referensi\Transformers;

use League\Fractal\TransformerAbstract;

class InstansiTransformer extends TransformerAbstract
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
            'lokasi_id' => $item['lokasiId'],
            'nama' => $item['nama'],
            'jenis' => $item['jenis'],
            'kode_cepat' => $item['cepatKode'],
            'proses_berkas_dipusat' => $item['prosesBerkasDipusat'],
            'kode_cepat_merger' => $item['mgrCepatKode'],
            'status' => $item['status'],
            'kode_cepat5' => $item['cepatKode5'],
            'kode_cepat5_lama' => $item['cepatKode5Lama'],
            'nama_baru' => $item['namaBaru'],
            'nama_jabatan' => $item['namaJabatan'],
            'jenis_instansi_id' => $item['jenisInstansiId'],
        ];
    }
}
