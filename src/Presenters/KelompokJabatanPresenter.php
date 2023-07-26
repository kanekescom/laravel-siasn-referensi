<?php

namespace Kanekescom\SiasnReferensi\Presenters;

use Kanekescom\SiasnReferensi\Transformers\KelompokJabatanTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

class KelompokJabatanPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new KelompokJabatanTransformer();
    }
}
