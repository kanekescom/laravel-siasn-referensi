<?php

namespace Kanekescom\Siasn\Referensi\Transformers;

use League\Fractal\TransformerAbstract;

class KedudukanHukumTransformer extends TransformerAbstract
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
            'aturan' => $item['aturan'],
            'kode' => $item['kode'],
        ];
    }
}
