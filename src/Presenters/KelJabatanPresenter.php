<?php

namespace Kanekescom\Siasn\Referensi\Presenters;

use Kanekescom\Siasn\Referensi\Transformers\KelJabatanTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

class KelJabatanPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new KelJabatanTransformer();
    }
}
