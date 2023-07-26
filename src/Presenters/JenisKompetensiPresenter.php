<?php

namespace Kanekescom\SiasnReferensi\Presenters;

use Kanekescom\SiasnReferensi\Transformers\JenisKompetensiTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

class JenisKompetensiPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new JenisKompetensiTransformer();
    }
}
