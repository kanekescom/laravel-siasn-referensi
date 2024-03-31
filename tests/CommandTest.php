<?php

it('can not pull doesnt exist endpoint', function () {
    $this->artisan('siasn-referensi:pull doesnt-exist-endpoint')->assertSuccessful();
})->throws(\Kanekescom\Siasn\Referensi\Api\Exceptions\BadEndpointCallException::class);

$endpoints = collect([
    'agama',
    'alasan-hukuman-disiplin',
    'asn-jenis-jabatan',
    'asn-jenjang-jabatan',
    'eselon',
    'golongan',
    'instansi',
    'jabatan-fungsional',
    'jabatan-fungsional-umum',
    'jenis-anak',
    'jenis-hukuman',
    'jenis-jabatan',
    'kanreg',
    'kedudukan-hukum',
    'kel-jabatan',
    'latihan-struktural',
    'lokasi',
    'pendidikan',
    'ref-dokumen',
    'ref-jenjang-jf',
    'satuan-kerja',
    'tingkat-pendidikan',
    'jenis-diklat',
])->each(function ($endpoint) {
    $testName = \Illuminate\Support\Str::of($endpoint)
        ->headline()
        ->lower();

    it("can pull {$testName}", function () use ($endpoint) {
        $this->artisan("siasn-referensi:pull {$endpoint}")
            ->assertSuccessful();

        $this->artisan('siasn-referensi:pull')
            ->expectsQuestion('What do you want to call endpoint? Separate with commas.', $endpoint)
            ->assertSuccessful();
    });
});
