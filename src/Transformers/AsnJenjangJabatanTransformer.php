<?php

namespace Kanekescom\Siasn\Referensi\Transformers;

use League\Fractal\TransformerAbstract;

class AsnJenjangJabatanTransformer extends TransformerAbstract
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
            'asn_jenis_jabatan_id' => $item['asnJenisJabatanId'],
        ];
    }
}
