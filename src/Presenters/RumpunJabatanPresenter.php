<?php

namespace Kanekescom\SiasnReferensi\Presenters;

use Kanekescom\SiasnReferensi\Transformers\RumpunJabatanTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

class RumpunJabatanPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new RumpunJabatanTransformer();
    }
}
