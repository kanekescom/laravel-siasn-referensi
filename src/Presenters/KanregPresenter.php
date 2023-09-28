<?php

namespace Kanekescom\Siasn\Referensi\Presenters;

use Kanekescom\Siasn\Referensi\Transformers\KanregTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

class KanregPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new KanregTransformer();
    }
}
