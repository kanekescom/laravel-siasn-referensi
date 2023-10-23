<?php

namespace Kanekescom\Siasn\Referensi\Transformers;

use League\Fractal\TransformerAbstract;

class PendidikanTransformer extends TransformerAbstract
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
            'tingkat_pendidikan_id' => $item['tingkat_pendidikan_id'],
            'nama' => $item['nama'],
            'kode_cepat' => $item['cepat_kode'],
            'kode_cepat_merger' => $item['mgr_cepat_kode'],
            'nama_asli' => $item['nama_asli'],
            'status' => $item['status'],
            'sub_rumpun_prog_id' => $item['subrumpun_prog_id'],
            'kode_cepat_induk' => $item['cepat_kode_induk'],
            'sub_rumpun_prog_kode' => $item['subrumpun_prog_kode'],
        ];
    }
}
