<?php

namespace Kanekescom\SiasnReferensi\Presenters;

use Kanekescom\SiasnReferensi\Transformers\JenisRiwayatTransformer;
use Prettus\Repository\Presenter\FractalPresenter;

class JenisRiwayatPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new JenisRiwayatTransformer();
    }
}
