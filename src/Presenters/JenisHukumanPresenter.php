<?php

namespace Kanekescom\SiasnReferensi\Presenters;

use Kanekescom\SiasnReferensi\Transformers\JenisHukumanTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

class JenisHukumanPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new JenisHukumanTransformer();
    }
}
