<?php

namespace Kanekescom\SiasnReferensi\Presenters;

use Kanekescom\SiasnReferensi\Transformers\KabupatenTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

class KabupatenPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new KabupatenTransformer();
    }
}
