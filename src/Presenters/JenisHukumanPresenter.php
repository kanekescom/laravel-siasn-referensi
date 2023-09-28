<?php

namespace Kanekescom\Siasn\Referensi\Presenters;

use Kanekescom\Siasn\Referensi\Transformers\JenisHukumanTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

class JenisHukumanPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new JenisHukumanTransformer();
    }
}
