<?php

namespace Kanekescom\SiasnReferensi\Presenters;

use Kanekescom\SiasnReferensi\Transformers\JenisKepanitiaanTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

class JenisKepanitiaanPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new JenisKepanitiaanTransformer();
    }
}
