<?php

namespace Kanekescom\Siasn\Referensi;

use Kanekescom\Siasn\Referensi\Helpers\ResponseTransformer;

class Referensi
{
    private $referensi;

    public function __construct()
    {
        $this->referensi = new \Kanekescom\Siasn\Api\Referensi\Facades\Referensi;
    }

    public function getAgama($query = [])
    {
        return new ResponseTransformer(
            $this->referensi::getAgama($query),
            new \Kanekescom\Siasn\Referensi\Transformers\AgamaTransformer
        );
    }

    public function getAlasanHukumanDisiplin($query = [])
    {
        return new ResponseTransformer(
            $this->referensi::getAlasanHukumanDisiplin($query),
            new \Kanekescom\Siasn\Referensi\Transformers\AlasanHukumanDisiplinTransformer
        );
    }

    public function getAsnJenisJabatan($query = [])
    {
        return new ResponseTransformer(
            $this->referensi::getAsnJenisJabatan($query),
            new \Kanekescom\Siasn\Referensi\Transformers\AsnJenisJabatanTransformer
        );
    }

    public function getAsnJenjangJabatan($query = [])
    {
        return new ResponseTransformer(
            $this->referensi::getAsnJenjangJabatan($query),
            new \Kanekescom\Siasn\Referensi\Transformers\AsnJenjangJabatanTransformer
        );
    }

    public function getEselon($query = [])
    {
        return new ResponseTransformer(
            $this->referensi::getEselon($query),
            new \Kanekescom\Siasn\Referensi\Transformers\EselonTransformer
        );
    }

    public function getGolongan($query = [])
    {
        return new ResponseTransformer(
            $this->referensi::getGolongan($query),
            new \Kanekescom\Siasn\Referensi\Transformers\GolonganTransformer
        );
    }

    public function getInstansi($query = [])
    {
        return new ResponseTransformer(
            $this->referensi::getInstansi($query),
            new \Kanekescom\Siasn\Referensi\Transformers\InstansiTransformer
        );
    }

    public function getJabatanFungsional($query = [])
    {
        return new ResponseTransformer(
            $this->referensi::getJabatanFungsional($query),
            new \Kanekescom\Siasn\Referensi\Transformers\JabatanFungsionalTransformer
        );
    }

    public function getJabatanFungsionalUmum($query = [])
    {
        return new ResponseTransformer(
            $this->referensi::getJabatanFungsionalUmum($query),
            new \Kanekescom\Siasn\Referensi\Transformers\JabatanFungsionalUmumTransformer
        );
    }

    public function getJenisAnak($query = [])
    {
        return new ResponseTransformer(
            $this->referensi::getJenisAnak($query),
            new \Kanekescom\Siasn\Referensi\Transformers\JenisAnakTransformer
        );
    }

    public function getJenisDiklat($query = [])
    {
        return new ResponseTransformer(
            $this->referensi::getJenisDiklat($query),
            new \Kanekescom\Siasn\Referensi\Transformers\JenisDiklatTransformer
        );
    }

    public function getJenisHukuman($query = [])
    {
        return new ResponseTransformer(
            $this->referensi::getJenisHukuman($query),
            new \Kanekescom\Siasn\Referensi\Transformers\JenisHukumanTransformer
        );
    }

    public function getJenisJabatan($query = [])
    {
        return new ResponseTransformer(
            $this->referensi::getJenisJabatan($query),
            new \Kanekescom\Siasn\Referensi\Transformers\JenisJabatanTransformer
        );
    }

    public function getKanreg($query = [])
    {
        return new ResponseTransformer(
            $this->referensi::getKanreg($query),
            new \Kanekescom\Siasn\Referensi\Transformers\KanregTransformer
        );
    }

    public function getKedudukanHukum($query = [])
    {
        return new ResponseTransformer(
            $this->referensi::getKedudukanHukum($query),
            new \Kanekescom\Siasn\Referensi\Transformers\KedudukanHukumTransformer
        );
    }

    public function getKelJabatan($query = [])
    {
        return new ResponseTransformer(
            $this->referensi::getKelJabatan($query),
            new \Kanekescom\Siasn\Referensi\Transformers\KelJabatanTransformer
        );
    }

    public function getLatihanStruktural($query = [])
    {
        return new ResponseTransformer(
            $this->referensi::getLatihanStruktural($query),
            new \Kanekescom\Siasn\Referensi\Transformers\LatihanStrukturalTransformer
        );
    }

    public function getLokasi($query = [])
    {
        return new ResponseTransformer(
            $this->referensi::getLokasi($query),
            new \Kanekescom\Siasn\Referensi\Transformers\LokasiTransformer
        );
    }

    public function getPendidikan($query = [])
    {
        return new ResponseTransformer(
            $this->referensi::getPendidikan($query),
            new \Kanekescom\Siasn\Referensi\Transformers\PendidikanTransformer
        );
    }

    public function getRefDokumen($query = [])
    {
        return new ResponseTransformer(
            $this->referensi::getRefDokumen($query),
            new \Kanekescom\Siasn\Referensi\Transformers\RefDokumenTransformer
        );
    }

    public function getRefJenjangJf($query = [])
    {
        return new ResponseTransformer(
            $this->referensi::getRefJenjangJf($query),
            new \Kanekescom\Siasn\Referensi\Transformers\RefJenjangJfTransformer
        );
    }

    public function getSatuanKerja($query = [])
    {
        return new ResponseTransformer(
            $this->referensi::getSatuanKerja($query),
            new \Kanekescom\Siasn\Referensi\Transformers\SatuanKerjaTransformer
        );
    }

    public function getTingkatPendidikan($query = [])
    {
        return new ResponseTransformer(
            $this->referensi::getTingkatPendidikan($query),
            new \Kanekescom\Siasn\Referensi\Transformers\TingkatPendidikanTransformer
        );
    }
}
