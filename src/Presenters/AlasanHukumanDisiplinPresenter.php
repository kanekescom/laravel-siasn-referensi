<?php

namespace Kanekescom\Siasn\Referensi\Presenters;

use Kanekescom\Siasn\Referensi\Transformers\AlasanHukumanDisiplinTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

class AlasanHukumanDisiplinPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new AlasanHukumanDisiplinTransformer();
    }
}
