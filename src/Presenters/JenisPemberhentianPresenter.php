<?php

namespace Kanekescom\SiasnReferensi\Presenters;

use Kanekescom\SiasnReferensi\Transformers\JenisPemberhentianTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

class JenisPemberhentianPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new JenisPemberhentianTransformer();
    }
}
