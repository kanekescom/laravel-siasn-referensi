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

    public function getAgama(array $query = [])
    {
        return new ResponseTransformer(
            $this->referensi::getAgama($query),
            new \Kanekescom\Siasn\Referensi\Transformers\AgamaTransformer
        );
    }

    public function getAlasanHukumanDisiplin(array $query = [])
    {
        return new ResponseTransformer(
            $this->referensi::getAlasanHukumanDisiplin($query),
            new \Kanekescom\Siasn\Referensi\Transformers\AlasanHukumanDisiplinTransformer
        );
    }

    public function getAsnJenisJabatan(array $query = [])
    {
        return new ResponseTransformer(
            $this->referensi::getAsnJenisJabatan($query),
            new \Kanekescom\Siasn\Referensi\Transformers\AsnJenisJabatanTransformer
        );
    }

    public function getAsnJenjangJabatan(array $query = [])
    {
        return new ResponseTransformer(
            $this->referensi::getAsnJenjangJabatan($query),
            new \Kanekescom\Siasn\Referensi\Transformers\AsnJenjangJabatanTransformer
        );
    }

    public function getEselon(array $query = [])
    {
        return new ResponseTransformer(
            $this->referensi::getEselon($query),
            new \Kanekescom\Siasn\Referensi\Transformers\EselonTransformer
        );
    }

    public function getGolongan(array $query = [])
    {
        return new ResponseTransformer(
            $this->referensi::getGolongan($query),
            new \Kanekescom\Siasn\Referensi\Transformers\GolonganTransformer
        );
    }

    public function getInstansi(array $query = [])
    {
        return new ResponseTransformer(
            $this->referensi::getInstansi($query),
            new \Kanekescom\Siasn\Referensi\Transformers\InstansiTransformer
        );
    }

    public function getJabatanFungsional(array $query = [])
    {
        return new ResponseTransformer(
            $this->referensi::getJabatanFungsional($query),
            new \Kanekescom\Siasn\Referensi\Transformers\JabatanFungsionalTransformer
        );
    }

    public function getJabatanFungsionalUmum(array $query = [])
    {
        return new ResponseTransformer(
            $this->referensi::getJabatanFungsionalUmum($query),
            new \Kanekescom\Siasn\Referensi\Transformers\JabatanFungsionalUmumTransformer
        );
    }

    public function getJenisAnak(array $query = [])
    {
        return new ResponseTransformer(
            $this->referensi::getJenisAnak($query),
            new \Kanekescom\Siasn\Referensi\Transformers\JenisAnakTransformer
        );
    }

    public function getJenisDiklat(array $query = [])
    {
        return new ResponseTransformer(
            $this->referensi::getJenisDiklat($query),
            new \Kanekescom\Siasn\Referensi\Transformers\JenisDiklatTransformer
        );
    }

    public function getJenisHukuman(array $query = [])
    {
        return new ResponseTransformer(
            $this->referensi::getJenisHukuman($query),
            new \Kanekescom\Siasn\Referensi\Transformers\JenisHukumanTransformer
        );
    }

    public function getJenisJabatan(array $query = [])
    {
        return new ResponseTransformer(
            $this->referensi::getJenisJabatan($query),
            new \Kanekescom\Siasn\Referensi\Transformers\JenisJabatanTransformer
        );
    }

    public function getKanreg(array $query = [])
    {
        return new ResponseTransformer(
            $this->referensi::getKanreg($query),
            new \Kanekescom\Siasn\Referensi\Transformers\KanregTransformer
        );
    }

    public function getKedudukanHukum(array $query = [])
    {
        return new ResponseTransformer(
            $this->referensi::getKedudukanHukum($query),
            new \Kanekescom\Siasn\Referensi\Transformers\KedudukanHukumTransformer
        );
    }

    public function getKelJabatan(array $query = [])
    {
        return new ResponseTransformer(
            $this->referensi::getKelJabatan($query),
            new \Kanekescom\Siasn\Referensi\Transformers\KelJabatanTransformer
        );
    }

    public function getLatihanStruktural(array $query = [])
    {
        return new ResponseTransformer(
            $this->referensi::getLatihanStruktural($query),
            new \Kanekescom\Siasn\Referensi\Transformers\LatihanStrukturalTransformer
        );
    }

    public function getLokasi(array $query = [])
    {
        return new ResponseTransformer(
            $this->referensi::getLokasi($query),
            new \Kanekescom\Siasn\Referensi\Transformers\LokasiTransformer
        );
    }

    public function getPendidikan(array $query = [])
    {
        return new ResponseTransformer(
            $this->referensi::getPendidikan($query),
            new \Kanekescom\Siasn\Referensi\Transformers\PendidikanTransformer
        );
    }

    public function getRefDokumen(array $query = [])
    {
        return new ResponseTransformer(
            $this->referensi::getRefDokumen($query),
            new \Kanekescom\Siasn\Referensi\Transformers\RefDokumenTransformer
        );
    }

    public function getRefJenjangJf(array $query = [])
    {
        return new ResponseTransformer(
            $this->referensi::getRefJenjangJf($query),
            new \Kanekescom\Siasn\Referensi\Transformers\RefJenjangJfTransformer
        );
    }

    public function getSatuanKerja(array $query = [])
    {
        return new ResponseTransformer(
            $this->referensi::getSatuanKerja($query),
            new \Kanekescom\Siasn\Referensi\Transformers\SatuanKerjaTransformer
        );
    }

    public function getTingkatPendidikan(array $query = [])
    {
        return new ResponseTransformer(
            $this->referensi::getTingkatPendidikan($query),
            new \Kanekescom\Siasn\Referensi\Transformers\TingkatPendidikanTransformer
        );
    }
}
