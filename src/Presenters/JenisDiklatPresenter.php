<?php

namespace Kanekescom\SiasnReferensi\Presenters;

use Kanekescom\SiasnReferensi\Transformers\JenisDiklatTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

class JenisDiklatPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new JenisDiklatTransformer();
    }
}
