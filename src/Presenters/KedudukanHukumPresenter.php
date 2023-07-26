<?php

namespace Kanekescom\SiasnReferensi\Presenters;

use Kanekescom\SiasnReferensi\Transformers\KedudukanHukumTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

class KedudukanHukumPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new KedudukanHukumTransformer();
    }
}
