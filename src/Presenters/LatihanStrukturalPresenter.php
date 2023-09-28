<?php

namespace Kanekescom\Siasn\Referensi\Presenters;

use Kanekescom\Siasn\Referensi\Transformers\LatihanStrukturalTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

class LatihanStrukturalPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new LatihanStrukturalTransformer();
    }
}
