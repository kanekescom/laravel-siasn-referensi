<?php

namespace Kanekescom\SiasnReferensi\Presenters;

use Kanekescom\SiasnReferensi\Transformers\TingkatPendidikanTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

class TingkatPendidikanPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new TingkatPendidikanTransformer();
    }
}
