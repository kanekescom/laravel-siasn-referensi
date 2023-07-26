<?php

namespace Kanekescom\SiasnReferensi\Presenters;

use Kanekescom\SiasnReferensi\Transformers\JabatanFungsionalTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

class JabatanFungsionalPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new JabatanFungsionalTransformer();
    }
}
