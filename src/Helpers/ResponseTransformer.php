<?php

namespace Kanekescom\Siasn\Referensi\Helpers;

use Illuminate\Http\Client\Response;
use Kanekescom\Helperia\Support\ClassExtender;
use League\Fractal\TransformerAbstract;

class ResponseTransformer extends ClassExtender
{
    public function __construct(Response $response, TransformerAbstract $transformer)
    {
        $this->class = collect([]);

        $data = $response->collect()->get('results');

        if ($response->ok() && is_array($data)) {
            $items = fractal($data, $transformer)->toArray();

            $this->class = collect($items['data']);
        }
    }
}
