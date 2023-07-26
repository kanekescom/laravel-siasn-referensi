<?php

namespace Kanekescom\SiasnReferensi\Presenters;

use Kanekescom\SiasnReferensi\Transformers\PenghargaanTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

class PenghargaanPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new PenghargaanTransformer();
    }
}
