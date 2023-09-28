<?php

namespace Kanekescom\Siasn\Referensi\Presenters;

use Kanekescom\Siasn\Referensi\Transformers\LokasiTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

class LokasiPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new LokasiTransformer();
    }
}
