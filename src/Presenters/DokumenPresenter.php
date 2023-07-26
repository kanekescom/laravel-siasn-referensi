<?php

namespace Kanekescom\SiasnReferensi\Presenters;

use Kanekescom\SiasnReferensi\Transformers\DokumenTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

class DokumenPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new DokumenTransformer();
    }
}
