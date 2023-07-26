<?php

namespace Kanekescom\SiasnReferensi\Presenters;

use Kanekescom\SiasnReferensi\Transformers\JenisPengadaanTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

class JenisPengadaanPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new JenisPengadaanTransformer();
    }
}
