<?php

namespace Kanekescom\Siasn\Referensi\Transformers;

use League\Fractal\TransformerAbstract;

class SatuanKerjaTransformer extends TransformerAbstract
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
            'instansi_id' => $item['instansiId'],
            'nama' => $item['nama'],
            'parent_id' => $item['parentId'],
            'jenis_satuan_kerja_id' => $item['jenisSatuanKerjaId'],
            'unblock_code' => $item['unblockCode'],
        ];
    }
}
