<?php

namespace Kanekescom\Siasn\Referensi;

use Kanekescom\Siasn\Referensi\Api\Facades\Referensi as FacadesReferensi;
use Kanekescom\Siasn\Referensi\Helpers\ResponseTransformer;
use League\Csv\Reader;

class Referensi
{
    public function getAgama(array $query = [])
    {
        return new ResponseTransformer(
            FacadesReferensi::getAgama($query),
            new \Kanekescom\Siasn\Referensi\Transformers\AgamaTransformer
        );
    }

    public function getAlasanHukumanDisiplin(array $query = [])
    {
        return new ResponseTransformer(
            FacadesReferensi::getAlasanHukumanDisiplin($query),
            new \Kanekescom\Siasn\Referensi\Transformers\AlasanHukumanDisiplinTransformer
        );
    }

    public function getAsnJenisJabatan(array $query = [])
    {
        return new ResponseTransformer(
            FacadesReferensi::getAsnJenisJabatan($query),
            new \Kanekescom\Siasn\Referensi\Transformers\AsnJenisJabatanTransformer
        );
    }

    public function getAsnJenjangJabatan(array $query = [])
    {
        return new ResponseTransformer(
            FacadesReferensi::getAsnJenjangJabatan($query),
            new \Kanekescom\Siasn\Referensi\Transformers\AsnJenjangJabatanTransformer
        );
    }

    public function getEselon(array $query = [])
    {
        return new ResponseTransformer(
            FacadesReferensi::getEselon($query),
            new \Kanekescom\Siasn\Referensi\Transformers\EselonTransformer
        );
    }

    public function getGolongan(array $query = [])
    {
        return new ResponseTransformer(
            FacadesReferensi::getGolongan($query),
            new \Kanekescom\Siasn\Referensi\Transformers\GolonganTransformer
        );
    }

    public function getInstansi(array $query = [])
    {
        return new ResponseTransformer(
            FacadesReferensi::getInstansi($query),
            new \Kanekescom\Siasn\Referensi\Transformers\InstansiTransformer
        );
    }

    public function getJabatanFungsional(array $query = [])
    {
        return new ResponseTransformer(
            FacadesReferensi::getJabatanFungsional($query),
            new \Kanekescom\Siasn\Referensi\Transformers\JabatanFungsionalTransformer
        );
    }

    public function getJabatanFungsionalUmum(array $query = [])
    {
        return new ResponseTransformer(
            FacadesReferensi::getJabatanFungsionalUmum($query),
            new \Kanekescom\Siasn\Referensi\Transformers\JabatanFungsionalUmumTransformer
        );
    }

    public function getJenisAnak(array $query = [])
    {
        return new ResponseTransformer(
            FacadesReferensi::getJenisAnak($query),
            new \Kanekescom\Siasn\Referensi\Transformers\JenisAnakTransformer
        );
    }

    public function getJenisDiklat(array $query = [])
    {
        return new ResponseTransformer(
            FacadesReferensi::getJenisDiklat($query),
            new \Kanekescom\Siasn\Referensi\Transformers\JenisDiklatTransformer
        );
    }

    public function getJenisHukuman(array $query = [])
    {
        return new ResponseTransformer(
            FacadesReferensi::getJenisHukuman($query),
            new \Kanekescom\Siasn\Referensi\Transformers\JenisHukumanTransformer
        );
    }

    public function getJenisJabatan(array $query = [])
    {
        return new ResponseTransformer(
            FacadesReferensi::getJenisJabatan($query),
            new \Kanekescom\Siasn\Referensi\Transformers\JenisJabatanTransformer
        );
    }

    public function getKanreg(array $query = [])
    {
        return new ResponseTransformer(
            FacadesReferensi::getKanreg($query),
            new \Kanekescom\Siasn\Referensi\Transformers\KanregTransformer
        );
    }

    public function getKedudukanHukum(array $query = [])
    {
        return new ResponseTransformer(
            FacadesReferensi::getKedudukanHukum($query),
            new \Kanekescom\Siasn\Referensi\Transformers\KedudukanHukumTransformer
        );
    }

    public function getKelJabatan(array $query = [])
    {
        return new ResponseTransformer(
            FacadesReferensi::getKelJabatan($query),
            new \Kanekescom\Siasn\Referensi\Transformers\KelJabatanTransformer
        );
    }

    public function getLatihanStruktural(array $query = [])
    {
        return new ResponseTransformer(
            FacadesReferensi::getLatihanStruktural($query),
            new \Kanekescom\Siasn\Referensi\Transformers\LatihanStrukturalTransformer
        );
    }

    public function getLokasi(array $query = [])
    {
        return new ResponseTransformer(
            FacadesReferensi::getLokasi($query),
            new \Kanekescom\Siasn\Referensi\Transformers\LokasiTransformer
        );
    }

    public function getPendidikan(array $query = [])
    {
        return new ResponseTransformer(
            FacadesReferensi::getPendidikan($query),
            new \Kanekescom\Siasn\Referensi\Transformers\PendidikanTransformer
        );
    }

    public function getRefDokumen(array $query = [])
    {
        return new ResponseTransformer(
            FacadesReferensi::getRefDokumen($query),
            new \Kanekescom\Siasn\Referensi\Transformers\RefDokumenTransformer
        );
    }

    public function getRefJenjangJf(array $query = [])
    {
        return new ResponseTransformer(
            FacadesReferensi::getRefJenjangJf($query),
            new \Kanekescom\Siasn\Referensi\Transformers\RefJenjangJfTransformer
        );
    }

    public function getSatuanKerja(array $query = [])
    {
        return new ResponseTransformer(
            FacadesReferensi::getSatuanKerja($query),
            new \Kanekescom\Siasn\Referensi\Transformers\SatuanKerjaTransformer
        );
    }

    public function getTingkatPendidikan(array $query = [])
    {
        return new ResponseTransformer(
            FacadesReferensi::getTingkatPendidikan($query),
            new \Kanekescom\Siasn\Referensi\Transformers\TingkatPendidikanTransformer
        );
    }

    public function getCltn()
    {
        $filePath = base_path('vendor/kanekescom/siasn-referensi-dataset/dataset/cltn.csv');

        return collect(Reader::createFromPath($filePath, 'r')
            ->setDelimiter(';')
            ->setHeaderOffset(0)
            ->getRecords());
    }

    public function getHarga()
    {
        $filePath = base_path('vendor/kanekescom/siasn-referensi-dataset/dataset/harga.csv');

        return collect(Reader::createFromPath($filePath, 'r')
            ->setDelimiter(';')
            ->setHeaderOffset(0)
            ->getRecords());
    }

    public function getJenisIdDokumen()
    {
        $filePath = base_path('vendor/kanekescom/siasn-referensi-dataset/dataset/jenis_id_dokumen.csv');

        return collect(Reader::createFromPath($filePath, 'r')
            ->setDelimiter(';')
            ->setHeaderOffset(0)
            ->getRecords());
    }

    public function getJenisKawin()
    {
        $filePath = base_path('vendor/kanekescom/siasn-referensi-dataset/dataset/jenis_kawin.csv');

        return collect(Reader::createFromPath($filePath, 'r')
            ->setDelimiter(';')
            ->setHeaderOffset(0)
            ->getRecords());
    }

    public function getJenisKepanitiaan()
    {
        $filePath = base_path('vendor/kanekescom/siasn-referensi-dataset/dataset/jenis_kepanitiaan.csv');

        return collect(Reader::createFromPath($filePath, 'r')
            ->setDelimiter(';')
            ->setHeaderOffset(0)
            ->getRecords());
    }

    public function getJenisKompetensi()
    {
        $filePath = base_path('vendor/kanekescom/siasn-referensi-dataset/dataset/jenis_kompetensi.csv');

        return collect(Reader::createFromPath($filePath, 'r')
            ->setDelimiter(';')
            ->setHeaderOffset(0)
            ->getRecords());
    }

    public function getJenisKp()
    {
        $filePath = base_path('vendor/kanekescom/siasn-referensi-dataset/dataset/jenis_kp.csv');

        return collect(Reader::createFromPath($filePath, 'r')
            ->setDelimiter(';')
            ->setHeaderOffset(0)
            ->getRecords());
    }

    public function getJenisKursus()
    {
        $filePath = base_path('vendor/kanekescom/siasn-referensi-dataset/dataset/jenis_kursus.csv');

        return collect(Reader::createFromPath($filePath, 'r')
            ->setDelimiter(';')
            ->setHeaderOffset(0)
            ->getRecords());
    }

    public function getJenisPegawai()
    {
        $filePath = base_path('vendor/kanekescom/siasn-referensi-dataset/dataset/jenis_pegawai.csv');

        return collect(Reader::createFromPath($filePath, 'r')
            ->setDelimiter(';')
            ->setHeaderOffset(0)
            ->getRecords());
    }

    public function getJenisPemberhentian()
    {
        $filePath = base_path('vendor/kanekescom/siasn-referensi-dataset/dataset/jenis_pemberhentian.csv');

        return collect(Reader::createFromPath($filePath, 'r')
            ->setDelimiter(';')
            ->setHeaderOffset(0)
            ->getRecords());
    }

    public function getJenisPengadaan()
    {
        $filePath = base_path('vendor/kanekescom/siasn-referensi-dataset/dataset/jenis_pengadaan.csv');

        return collect(Reader::createFromPath($filePath, 'r')
            ->setDelimiter(';')
            ->setHeaderOffset(0)
            ->getRecords());
    }

    public function getJenisPensiun()
    {
        $filePath = base_path('vendor/kanekescom/siasn-referensi-dataset/dataset/jenis_pensiun.csv');

        return collect(Reader::createFromPath($filePath, 'r')
            ->setDelimiter(';')
            ->setHeaderOffset(0)
            ->getRecords());
    }

    public function getJenisRiwayat()
    {
        $filePath = base_path('vendor/kanekescom/siasn-referensi-dataset/dataset/jenis_riwayat.csv');

        return collect(Reader::createFromPath($filePath, 'r')
            ->setDelimiter(';')
            ->setHeaderOffset(0)
            ->getRecords());
    }

    public function getKpkn()
    {
        $filePath = base_path('vendor/kanekescom/siasn-referensi-dataset/dataset/kpkn.csv');

        return collect(Reader::createFromPath($filePath, 'r')
            ->setDelimiter(';')
            ->setHeaderOffset(0)
            ->getRecords());
    }

    public function getProfesi()
    {
        $filePath = base_path('vendor/kanekescom/siasn-referensi-dataset/dataset/profesi.csv');

        return collect(Reader::createFromPath($filePath, 'r')
            ->setDelimiter(';')
            ->setHeaderOffset(0)
            ->getRecords());
    }

    public function getTaspen()
    {
        $filePath = base_path('vendor/kanekescom/siasn-referensi-dataset/dataset/taspen.csv');

        return collect(Reader::createFromPath($filePath, 'r')
            ->setDelimiter(';')
            ->setHeaderOffset(0)
            ->getRecords());
    }
}
