<?php

it('can not pull doesnt exist endpoint', function () {
    $this->artisan('siasn-referensi:pull doesnt-exist-endpoint')->assertSuccessful();
})->throws(\Kanekescom\Siasn\Api\Referensi\Exceptions\BadEndpointCallException::class);

method_public(\Kanekescom\Siasn\Referensi\Referensi::class)
    ->reject(function ($method) {
        return strpos($method, '__') === 0;
    })->map(function ($method) {
        return \Illuminate\Support\Str::of($method)
            ->kebab()
            ->replaceFirst('get-', '')->toString();
    })->mapWithKeys(function ($item) {
        return [$item => $item];
    })->each(function ($endpoint) {
        $testName = \Illuminate\Support\Str::of($endpoint)->headline()->lower();

        it("can pull {$testName}", function () use ($endpoint) {
            $this->artisan("siasn-referensi:pull {$endpoint}")
                ->assertSuccessful();

            $this->artisan('siasn-referensi:pull')
                ->expectsQuestion('What do you want to call endpoint? Separate with commas.', (string) $endpoint)
                ->assertSuccessful();
        });
    });
