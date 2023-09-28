<?php

namespace Kanekescom\Siasn\Referensi\Presenters;

use Kanekescom\Siasn\Referensi\Transformers\SatuanKerjaTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

class SatuanKerjaPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new SatuanKerjaTransformer();
    }
}
