<?php

namespace Kanekescom\Siasn\Referensi\Presenters;

use Kanekescom\Siasn\Referensi\Transformers\AsnJenisJabatanTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

class AsnJenisJabatanPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new AsnJenisJabatanTransformer();
    }
}
