<?php

namespace Kanekescom\SiasnReferensi\Presenters;

use Kanekescom\SiasnReferensi\Transformers\GolonganTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

class GolonganPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new GolonganTransformer();
    }
}
