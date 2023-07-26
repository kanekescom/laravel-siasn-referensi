<?php

namespace Kanekescom\SiasnReferensi\Presenters;

use Kanekescom\SiasnReferensi\Transformers\PendidikanTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

class PendidikanPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new PendidikanTransformer();
    }
}
