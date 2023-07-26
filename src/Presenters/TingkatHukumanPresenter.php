<?php

namespace Kanekescom\SiasnReferensi\Presenters;

use Kanekescom\SiasnReferensi\Transformers\TingkatHukumanTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

class TingkatHukumanPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new TingkatHukumanTransformer();
    }
}
