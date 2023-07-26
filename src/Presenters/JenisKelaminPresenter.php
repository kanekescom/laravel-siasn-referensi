<?php

namespace Kanekescom\SiasnReferensi\Presenters;

use Kanekescom\SiasnReferensi\Transformers\JenisKelaminTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

class JenisKelaminPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new JenisKelaminTransformer();
    }
}
