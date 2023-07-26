<?php

namespace Kanekescom\SiasnReferensi\Presenters;

use Kanekescom\SiasnReferensi\Transformers\TaspenTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

class TaspenPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new TaspenTransformer();
    }
}
