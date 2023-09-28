<?php

namespace Kanekescom\Siasn\Referensi\Presenters;

use Kanekescom\Siasn\Referensi\Transformers\JabatanFungsionalUmumTransformer;
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
