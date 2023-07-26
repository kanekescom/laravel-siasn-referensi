<?php

namespace Kanekescom\SiasnReferensi\Presenters;

use Kanekescom\SiasnReferensi\Transformers\JabatanFungsionalUmumTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

class JabatanFungsionalUmumPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new JabatanFungsionalUmumTransformer();
    }
}
