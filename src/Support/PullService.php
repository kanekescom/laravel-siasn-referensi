<?php

namespace Kanekescom\Siasn\Referensi\Support;

use Illuminate\Support\Facades\DB;
use Kanekescom\Siasn\Referensi\Facades\Referensi;

class PullService
{
    protected static string $model;

    protected static string $method;

    public function __construct(string $model)
    {
        self::$model = $model;
        self::$method = 'get'.class_basename($model);
    }

    public static function execute(): void
    {
        $response = Referensi::{self::$method}();
        $model = new self::$model;

        DB::transaction(function () use ($model, $response) {
            if (config('siasn-referensi.truncate_model_before_pull')) {
                $model->query()->delete();
            }

            $response->chunk(config('siasn-referensi.chunk_data'))->each(function ($item) use ($model) {
                $model->upsert($item->toArray(), 'id');
                $model->query()
                    ->withTrashed()
                    ->whereIn('id', $item->pluck('id'))
                    ->restore();
            });
        });
    }
}
