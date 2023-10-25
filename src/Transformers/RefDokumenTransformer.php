<?php

namespace Kanekescom\Siasn\Referensi\Transformers;

use League\Fractal\TransformerAbstract;

class RefDokumenTransformer extends TransformerAbstract
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
            'layanan_id' => $item['layananId'],
            'layanan_nama' => $item['layananNama'],
            'sub_layanan_id' => $item['subLayananId'],
            'sub_layanan_nama' => $item['subLayananNama'],
            'detail_layanan_id' => $item['detailLayananId'],
            'detail_layanan_nama' => $item['detailLayananNama'],
            'document' => $item['document'],
            'jenis_dokumen' => $item['jenisDokumen'],
            'file_type' => $item['fileType'],
            'link_proses' => $item['linkProses'],
            'mandatory' => $item['mandatory'],
        ];
    }
}
