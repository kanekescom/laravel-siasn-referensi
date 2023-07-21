<?php

namespace Kanekescom\SiasnReference\Presenters;

use Kanekescom\SiasnReference\Transformers\UnorTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

class UnorPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new UnorTransformer();
    }
}
