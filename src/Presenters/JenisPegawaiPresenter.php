<?php

namespace Kanekescom\SiasnReferensi\Presenters;

use Kanekescom\SiasnReferensi\Transformers\JenisPegawaiTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

class JenisPegawaiPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new JenisPegawaiTransformer();
    }
}
