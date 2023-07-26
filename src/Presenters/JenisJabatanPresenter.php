<?php

namespace Kanekescom\SiasnReferensi\Presenters;

use Kanekescom\SiasnReferensi\Transformers\JenisJabatanTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

class JenisJabatanPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new JenisJabatanTransformer();
    }
}
