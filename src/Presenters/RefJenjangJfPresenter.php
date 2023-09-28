<?php

namespace Kanekescom\Siasn\Referensi\Presenters;

use Kanekescom\Siasn\Referensi\Transformers\RefJenjangJfTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

class RefJenjangJfPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new RefJenjangJfTransformer();
    }
}
