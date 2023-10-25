<?php

it('can not pull doesnt exist endpoint', function () {
    $this->artisan('siasn-referensi:pull doesnt-exist-endpoint')->assertSuccessful();
})->throws(\Kanekescom\Siasn\Api\Referensi\Exceptions\BadEndpointCallException::class);

$class = new ReflectionClass(\Kanekescom\Siasn\Referensi\Referensi::class);
$methods = array_filter($class->getMethods(), function ($method) {
    return ! $method->isConstructor()
        && ! $method->isDestructor()
        && ! $method->isInternal()
        && strpos($method->name, '__') !== 0;
});
$methodNames = array_map(function ($method) {
    return \Illuminate\Support\Str::of($method->getName())
        ->kebab()
        ->replaceFirst('get-', '');
}, $methods);

foreach ($methodNames as $endpoint) {
    $testName = \Illuminate\Support\Str::of($endpoint)->headline()->lower();

    it("can pull {$testName}", function () use ($endpoint) {
        $this->artisan("siasn-referensi:pull {$endpoint}")
            ->assertSuccessful();

        $this->artisan('siasn-referensi:pull')
            ->expectsQuestion('What do you want to call endpoint? Separate with commas.', (string) $endpoint)
            ->assertSuccessful();
    });
}
