<?php

namespace Kanekescom\SiasnReferensi\Presenters;

use Kanekescom\SiasnReferensi\Transformers\JenisUnorTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

class JenisUnorPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new JenisUnorTransformer();
    }
}
