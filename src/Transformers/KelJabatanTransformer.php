<?php

namespace Kanekescom\Siasn\Referensi\Transformers;

use League\Fractal\TransformerAbstract;

class KelJabatanTransformer extends TransformerAbstract
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
            'rumpun_jabatan_id' => $item['rumpunJabatanId'],
            'nama' => $item['nama'],
            'lingkup' => $item['lingkup'],
            'tugas_pokok' => $item['tugasPokok'],
            'pejabat_pak' => $item['pejabatPak'],
            'pembina_id' => $item['pembinaId'],
            'jenis_jabatan_umum_id' => $item['jenisJabatanUmumId'],
            'status' => $item['status'],
            'kode_rumpun' => $item['kodeRumpun'],
            'kode_kelompok' => $item['kodeKelompok'],
            'jenis_jabatan_umum_baru_id' => $item['jenisJabatanUmumBaruId'],
            'kesehatan_nonmedis' => $item['kesehatanNonmedis'],
        ];
    }
}
