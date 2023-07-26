<?php

namespace Kanekescom\SiasnReferensi\Presenters;

use Kanekescom\SiasnReferensi\Transformers\ProfesiTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

class ProfesiPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new ProfesiTransformer();
    }
}
