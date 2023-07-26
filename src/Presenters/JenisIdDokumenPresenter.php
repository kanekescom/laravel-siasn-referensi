<?php

namespace Kanekescom\SiasnReferensi\Presenters;

use Kanekescom\SiasnReferensi\Transformers\JenisIdDokumenTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

class JenisIdDokumenPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new JenisIdDokumenTransformer();
    }
}
