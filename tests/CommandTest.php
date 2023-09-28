<?php

namespace Kanekescom\Siasn\Referensi\Tests;

class CommandTest extends TestCase
{
    /** @test */
    public function can_get_referensi_agama()
    {
        $this->artisan('siasn-referensi:pull-referensi --endpoint="agama"')->assertSuccessful();
    }

    /** @test */
    public function can_get_referensi_alasan_hukuman_disiplin()
    {
        $this->artisan('siasn-referensi:pull-referensi --endpoint="alasan-hukuman-disiplin"')->assertSuccessful();
    }

    /** @test */
    public function can_get_referensi_asn_jenis_jabatan()
    {
        $this->artisan('siasn-referensi:pull-referensi --endpoint="asn-jenis-jabatan"')->assertSuccessful();
    }

    /** @test */
    public function can_get_referensi_asn_jenjang_jabatan()
    {
        $this->artisan('siasn-referensi:pull-referensi --endpoint="asn-jenjang-jabatan"')->assertSuccessful();
    }

    /** @test */
    public function can_get_referensi_eselon()
    {
        $this->artisan('siasn-referensi:pull-referensi --endpoint="eselon"')->assertSuccessful();
    }

    /** @test */
    public function can_get_referensi_golongan()
    {
        $this->artisan('siasn-referensi:pull-referensi --endpoint="golongan"')->assertSuccessful();
    }

    /** @test */
    public function can_get_referensi_instansi()
    {
        $this->artisan('siasn-referensi:pull-referensi --endpoint="instansi"')->assertSuccessful();
    }

    /** @test */
    public function can_get_referensi_jabatan_fungsional()
    {
        $this->artisan('siasn-referensi:pull-referensi --endpoint="jabatan-fungsional"')->assertSuccessful();
    }

    /** @test */
    public function can_get_referensi_jabatan_fungsional_umum()
    {
        $this->artisan('siasn-referensi:pull-referensi --endpoint="jabatan-fungsional-umum"')->assertSuccessful();
    }

    /** @test */
    public function can_get_referensi_jenis_anak()
    {
        $this->artisan('siasn-referensi:pull-referensi --endpoint="jenis-anak"')->assertSuccessful();
    }

    /** @test */
    public function can_get_referensi_jenis_diklat()
    {
        $this->artisan('siasn-referensi:pull-referensi --endpoint="jenis-diklat"')->assertSuccessful();
    }

    /** @test */
    public function can_get_referensi_jenis_hukuman()
    {
        $this->artisan('siasn-referensi:pull-referensi --endpoint="jenis-hukuman"')->assertSuccessful();
    }

    /** @test */
    public function can_get_referensi_jenis_jabatan()
    {
        $this->artisan('siasn-referensi:pull-referensi --endpoint="jenis-jabatan"')->assertSuccessful();
    }

    /** @test */
    public function can_get_referensi_kanreg()
    {
        $this->artisan('siasn-referensi:pull-referensi --endpoint="kanreg"')->assertSuccessful();
    }

    /** @test */
    public function can_get_referensi_kedudukan_hukum()
    {
        $this->artisan('siasn-referensi:pull-referensi --endpoint="kedudukan-hukum"')->assertSuccessful();
    }

    /** @test */
    public function can_get_referensi_kel_jabatan()
    {
        $this->artisan('siasn-referensi:pull-referensi --endpoint="kel-jabatan"')->assertSuccessful();
    }

    /** @test */
    public function can_get_referensi_latihan_struktural()
    {
        $this->artisan('siasn-referensi:pull-referensi --endpoint="latihan-struktural"')->assertSuccessful();
    }

    /** @test */
    public function can_get_referensi_lokasi()
    {
        $this->artisan('siasn-referensi:pull-referensi --endpoint="lokasi"')->assertSuccessful();
    }

    /** @test */
    public function can_get_referensi_pendidikan()
    {
        $this->artisan('siasn-referensi:pull-referensi --endpoint="pendidikan"')->assertSuccessful();
    }

    /** @test */
    public function can_get_referensi_ref_dokumen()
    {
        $this->artisan('siasn-referensi:pull-referensi --endpoint="ref-dokumen"')->assertSuccessful();
    }

    /** @test */
    public function can_get_referensi_ref_jenjang_jf()
    {
        $this->artisan('siasn-referensi:pull-referensi --endpoint="ref-jenjang-jf"')->assertSuccessful();
    }

    /** @test */
    public function can_get_referensi_satuan_kerja()
    {
        $this->artisan('siasn-referensi:pull-referensi --endpoint="satuan-kerja"')->assertSuccessful();
    }

    /** @test */
    public function can_get_referensi_tingkat_pendidikan()
    {
        $this->artisan('siasn-referensi:pull-referensi --endpoint="tingkat-pendidikan"')->assertSuccessful();
    }
}
