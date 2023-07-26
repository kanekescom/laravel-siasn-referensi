<?php

namespace Kanekescom\SiasnReferensi\Presenters;

use Kanekescom\SiasnReferensi\Transformers\SatuanKerjaTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

class SatuanKerjaPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new SatuanKerjaTransformer();
    }
}
