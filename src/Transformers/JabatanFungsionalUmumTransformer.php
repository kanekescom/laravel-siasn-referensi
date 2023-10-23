<?php

namespace Kanekescom\Siasn\Referensi\Transformers;

use League\Fractal\TransformerAbstract;

class JabatanFungsionalUmumTransformer extends TransformerAbstract
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
            'kode_cepat' => $item['cepatKode'],
            'wajib_ganti_tertentu' => $item['wajibGantiTertentu'],
            'jenis_jabatan_umum_id' => $item['jenisJabatanUmumId'],
            'kode_cepat_merger' => $item['mgrCepatKode'],
            'nama_asli' => $item['namaAsli'],
            'kode_menpan' => $item['kodeMenpan'],
            'instansi_id' => $item['instansiId'],
            'status' => $item['status'],
            'asal_peraturan_id' => $item['asalPeraturanId'],
            'jfu_urusan_pemerintahan' => $item['jfuUrusanPemerintahan'],
        ];
    }
}
