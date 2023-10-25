<?php

namespace Kanekescom\Siasn\Referensi\Transformers;

use League\Fractal\TransformerAbstract;

class JabatanFungsionalTransformer extends TransformerAbstract
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
            'min_golongan_id' => $item['miGolId'],
            'max_golongan_id' => $item['maxGolId'],
            'nama' => $item['nama'],
            'usia_bup' => $item['bupUsia'],
            'tunjangan_jabatan' => $item['tunJabatan'],
            'bobot' => $item['bobot'],
            'kel_jabatan_id' => $item['kelJabatanId'],
            'kode_cepat' => $item['cepatKode'],
            'kode_cepat_merger' => $item['mgrCepatKode'],
            'jenis' => $item['jenis'],
            'kode_cepat_new' => $item['cepatKodeNew'],
            'status' => $item['status'],
            'jumlah_formasi' => $item['jmlFormasi'],
            'nama_asli' => $item['namaAsli'],
            'jenjang' => $item['jenjang'],
            'jf_ex_medis' => $item['jfExmedis'],
            'is_syarat_jabatan' => $item['isSyaratJabatan'],
        ];
    }
}
