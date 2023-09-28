<?php

namespace Kanekescom\Siasn\Referensi\Presenters;

use Kanekescom\Siasn\Referensi\Transformers\RefDokumenTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

class RefDokumenPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new RefDokumenTransformer();
    }
}
