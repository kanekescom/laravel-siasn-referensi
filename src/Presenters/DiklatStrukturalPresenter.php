<?php

namespace Kanekescom\SiasnReferensi\Presenters;

use Kanekescom\SiasnReferensi\Transformers\DiklatStrukturalTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

class DiklatStrukturalPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new DiklatStrukturalTransformer();
    }
}
