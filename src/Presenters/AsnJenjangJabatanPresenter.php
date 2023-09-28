<?php

namespace Kanekescom\Siasn\Referensi\Presenters;

use Kanekescom\Siasn\Referensi\Transformers\AsnJenjangJabatanTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

class AsnJenjangJabatanPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new AsnJenjangJabatanTransformer();
    }
}
