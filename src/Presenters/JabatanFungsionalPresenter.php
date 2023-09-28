<?php

namespace Kanekescom\Siasn\Referensi\Presenters;

use Kanekescom\Siasn\Referensi\Transformers\JabatanFungsionalTransformer;
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
