<?php

namespace Kanekescom\SiasnReferensi\Presenters;

use Kanekescom\SiasnReferensi\Transformers\CltnTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

class CltnPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new CltnTransformer();
    }
}
