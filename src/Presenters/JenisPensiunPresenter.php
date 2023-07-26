<?php

namespace Kanekescom\SiasnReferensi\Presenters;

use Kanekescom\SiasnReferensi\Transformers\JenisPensiunTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

class JenisPensiunPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new JenisPensiunTransformer();
    }
}
