<?php

namespace Kanekescom\Siasn\Referensi\Transformers;

use League\Fractal\TransformerAbstract;

class TingkatPendidikanTransformer extends TransformerAbstract
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
            'golongan_id' => $item['golongan_id'],
            'nama' => $item['nama'],
            'golongan_awal_id' => $item['golongan_awal_id'],
            'id_lama' => $item['id_lama'],
            'group_tingkat_penddidikan_id' => $item['group_tk_pend_id'],
            'group_tingkat_penddidikan_nama' => $item['group_tk_pend_nm'],
        ];
    }
}
