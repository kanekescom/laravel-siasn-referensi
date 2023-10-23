<?php

namespace Kanekescom\Siasn\Referensi\Transformers;

use League\Fractal\TransformerAbstract;

class EselonTransformer extends TransformerAbstract
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
            'golongan_terendah_id' => $item['terendah_id'],
            'golongan_tertinggi_id' => $item['TertinggiId'],
            'eselon_level_id' => $item['eselon_level_id'],
            'asn_jenjang_jabatan_id' => $item['asn_jenjang_jabatan_id'],
            'jabatan_asn' => $item['JabatanAsn'],
        ];
    }
}
