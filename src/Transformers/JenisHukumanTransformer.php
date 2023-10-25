<?php

namespace Kanekescom\Siasn\Referensi\Transformers;

use League\Fractal\TransformerAbstract;

class JenisHukumanTransformer extends TransformerAbstract
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
            'jenis_tingkat_hukuman_id' => $item['jenisTingkatHukumanId'],
        ];
    }
}
