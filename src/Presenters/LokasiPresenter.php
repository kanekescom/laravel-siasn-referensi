<?php

namespace Kanekescom\SiasnReferensi\Presenters;

use Kanekescom\SiasnReferensi\Transformers\LokasiTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

class LokasiPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new LokasiTransformer();
    }
}
