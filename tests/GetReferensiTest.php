<?php

namespace Kanekescom\Siasn\Referensi\Tests;

use Kanekescom\Siasn\Referensi\Facades\Referensi;
use Kanekescom\Siasn\Referensi\Models\Agama;
use Kanekescom\Siasn\Referensi\Models\AlasanHukumanDisiplin;
use Kanekescom\Siasn\Referensi\Models\AsnJenisJabatan;
use Kanekescom\Siasn\Referensi\Models\AsnJenjangJabatan;
use Kanekescom\Siasn\Referensi\Models\Eselon;
use Kanekescom\Siasn\Referensi\Models\Golongan;
use Kanekescom\Siasn\Referensi\Models\Instansi;
use Kanekescom\Siasn\Referensi\Models\JabatanFungsional;
use Kanekescom\Siasn\Referensi\Models\JabatanFungsionalUmum;
use Kanekescom\Siasn\Referensi\Models\JenisAnak;
use Kanekescom\Siasn\Referensi\Models\JenisDiklat;
use Kanekescom\Siasn\Referensi\Models\JenisHukuman;
use Kanekescom\Siasn\Referensi\Models\JenisJabatan;
use Kanekescom\Siasn\Referensi\Models\Kanreg;
use Kanekescom\Siasn\Referensi\Models\KedudukanHukum;
use Kanekescom\Siasn\Referensi\Models\KelJabatan;
use Kanekescom\Siasn\Referensi\Models\LatihanStruktural;
use Kanekescom\Siasn\Referensi\Models\Lokasi;
use Kanekescom\Siasn\Referensi\Models\Pendidikan;
use Kanekescom\Siasn\Referensi\Models\RefDokumen;
use Kanekescom\Siasn\Referensi\Models\RefJenjangJf;
use Kanekescom\Siasn\Referensi\Models\SatuanKerja;
use Kanekescom\Siasn\Referensi\Models\TingkatPendidikan;

class GetReferensiTest extends TestCase
{
    /** @test */
    public function can_get_referensi_agama()
    {
        $this->assertTrue(Referensi::getAgama(['limit' => '10'])->successful());
        $this->assertTrue(is_array((new \Kanekescom\Siasn\Api\Referensi\Models\Agama(['limit' => '10']))->all()));
    }

    /** @test */
    public function can_get_referensi_alasan_hukuman_disiplin()
    {
        $this->assertTrue(Referensi::getAlasanHukumanDisiplin(['limit' => '10'])->successful());
        $this->assertTrue(is_array((new AlasanHukumanDisiplin(['limit' => '10']))->all()));
    }

    /** @test */
    public function can_get_referensi_asn_jenis_jabatan()
    {
        $this->assertTrue(Referensi::getAsnJenisJabatan(['limit' => '10'])->successful());
        $this->assertTrue(is_array((new AsnJenisJabatan(['limit' => '10']))->all()));
    }

    /** @test */
    public function can_get_referensi_asn_jenjang_jabatan()
    {
        $this->assertTrue(Referensi::getAsnJenjangJabatan(['limit' => '10'])->successful());
        $this->assertTrue(is_array((new AsnJenjangJabatan(['limit' => '10']))->all()));
    }

    /** @test */
    public function can_get_referensi_eselon()
    {
        $this->assertTrue(Referensi::getEselon(['limit' => '10'])->successful());
        $this->assertTrue(is_array((new Eselon(['limit' => '10']))->all()));
    }

    /** @test */
    public function can_get_referensi_golongan()
    {
        $this->assertTrue(Referensi::getGolongan(['limit' => '10'])->successful());
        $this->assertTrue(is_array((new Golongan(['limit' => '10']))->all()));
    }

    /** @test */
    public function can_get_referensi_instansi()
    {
        $this->assertTrue(Referensi::getInstansi(['limit' => '10'])->successful());
        $this->assertTrue(is_array((new Instansi(['limit' => '10']))->all()));
    }

    /** @test */
    public function can_get_referensi_jabatan_fungsional()
    {
        $this->assertTrue(Referensi::getJabatanFungsional(['limit' => '10'])->successful());
        $this->assertTrue(is_array((new JabatanFungsional(['limit' => '10']))->all()));
    }

    /** @test */
    public function can_get_referensi_jabatan_fungsional_umum()
    {
        $this->assertTrue(Referensi::getJabatanFungsionalUmum(['limit' => '10'])->successful());
        $this->assertTrue(is_array((new JabatanFungsionalUmum(['limit' => '10']))->all()));
    }

    /** @test */
    public function can_get_referensi_jenis_anak()
    {
        $this->assertTrue(Referensi::getJenisAnak(['limit' => '10'])->successful());
        $this->assertTrue(is_array((new JenisAnak(['limit' => '10']))->all()));
    }

    /** @test */
    public function can_get_referensi_jenis_diklat()
    {
        $this->assertTrue(Referensi::getJenisDiklat(['limit' => '10'])->successful());
        $this->assertTrue(is_array((new JenisDiklat(['limit' => '10']))->all()));
    }

    /** @test */
    public function can_get_referensi_jenis_hukuman()
    {
        $this->assertTrue(Referensi::getJenisHukuman(['limit' => '10'])->successful());
        $this->assertTrue(is_array((new JenisHukuman(['limit' => '10']))->all()));
    }

    /** @test */
    public function can_get_referensi_jenis_jabatan()
    {
        $this->assertTrue(Referensi::getJenisJabatan(['limit' => '10'])->successful());
        $this->assertTrue(is_array((new JenisJabatan(['limit' => '10']))->all()));
    }

    /** @test */
    public function can_get_referensi_kanreg()
    {
        $this->assertTrue(Referensi::getKanreg(['limit' => '10'])->successful());
        $this->assertTrue(is_array((new Kanreg(['limit' => '10']))->all()));
    }

    /** @test */
    public function can_get_referensi_kedudukan_hukum()
    {
        $this->assertTrue(Referensi::getKedudukanHukum(['limit' => '10'])->successful());
        $this->assertTrue(is_array((new KedudukanHukum(['limit' => '10']))->all()));
    }

    /** @test */
    public function can_get_referensi_kel_jabatan()
    {
        $this->assertTrue(Referensi::getKelJabatan(['limit' => '10'])->successful());
        $this->assertTrue(is_array((new KelJabatan(['limit' => '10']))->all()));
    }

    /** @test */
    public function can_get_referensi_latihan_struktural()
    {
        $this->assertTrue(Referensi::getLatihanStruktural(['limit' => '10'])->successful());
        $this->assertTrue(is_array((new LatihanStruktural(['limit' => '10']))->all()));
    }

    /** @test */
    public function can_get_referensi_lokasi()
    {
        $this->assertTrue(Referensi::getLokasi(['limit' => '10'])->successful());
        $this->assertTrue(is_array((new Lokasi(['limit' => '10']))->all()));
    }

    /** @test */
    public function can_get_referensi_pendidikan()
    {
        $this->assertTrue(Referensi::getPendidikan(['limit' => '10'])->successful());
        $this->assertTrue(is_array((new Pendidikan(['limit' => '10']))->all()));
    }

    /** @test */
    public function can_get_referensi_ref_dokumen()
    {
        $this->assertTrue(Referensi::getRefDokumen(['limit' => '10'])->successful());
        $this->assertTrue(is_array((new RefDokumen(['limit' => '10']))->all()));
    }

    /** @test */
    public function can_get_referensi_ref_jenjang_jf()
    {
        $this->assertTrue(Referensi::getRefJenjangJf(['limit' => '10'])->successful());
        $this->assertTrue(is_array((new RefJenjangJf(['limit' => '10']))->all()));
    }

    /** @test */
    public function can_get_referensi_satuan_kerja()
    {
        $this->assertTrue(Referensi::getSatuanKerja(['limit' => '10'])->successful());
        $this->assertTrue(is_array((new SatuanKerja(['limit' => '10']))->all()));
    }

    /** @test */
    public function can_get_referensi_tingkat_pendidikan()
    {
        $this->assertTrue(Referensi::getTingkatPendidikan(['limit' => '10'])->successful());
        $this->assertTrue(is_array((new TingkatPendidikan(['limit' => '10']))->all()));
    }
}
