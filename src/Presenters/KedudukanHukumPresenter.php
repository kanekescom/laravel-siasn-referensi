<?php

namespace Kanekescom\Siasn\Referensi\Presenters;

use Kanekescom\Siasn\Referensi\Transformers\KedudukanHukumTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

class KedudukanHukumPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new KedudukanHukumTransformer();
    }
}
