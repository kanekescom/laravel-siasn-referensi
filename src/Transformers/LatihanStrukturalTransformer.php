<?php

namespace Kanekescom\Siasn\Referensi\Transformers;

use League\Fractal\TransformerAbstract;

class LatihanStrukturalTransformer extends TransformerAbstract
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
            'eselon_level' => $item['eselon_level'],
            'ncsis_time' => $item['ncsistime'],
            'struktural_pns' => $item['struktural_pns'],
        ];
    }
}
