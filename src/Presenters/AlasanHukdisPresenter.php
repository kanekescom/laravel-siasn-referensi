<?php

namespace Kanekescom\SiasnReferensi\Presenters;

use Kanekescom\SiasnReferensi\Transformers\AlasanHukdisTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

class AlasanHukdisPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new AlasanHukdisTransformer();
    }
}
