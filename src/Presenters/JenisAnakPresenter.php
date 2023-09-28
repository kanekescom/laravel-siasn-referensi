<?php

namespace Kanekescom\Siasn\Referensi\Presenters;

use Kanekescom\Siasn\Referensi\Transformers\JenisAnakTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

class JenisAnakPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new JenisAnakTransformer();
    }
}
