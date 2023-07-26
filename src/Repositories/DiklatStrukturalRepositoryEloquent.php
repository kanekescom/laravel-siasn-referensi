<?php

namespace Kanekescom\SiasnReferensi\Repositories;

use Kanekescom\SiasnReferensi\Models\DiklatStruktural;
use Kanekescom\SiasnReferensi\Presenters\DiklatStrukturalPresenter;
use Kanekescom\SiasnReferensi\Repositories\DiklatStrukturalRepository;
use Kanekescom\SiasnReferensi\Validators\DiklatStrukturalValidator;
use Kanekescom\RepositoryEnhancer\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;

class DiklatStrukturalRepositoryEloquent extends BaseRepository implements DiklatStrukturalRepository
{
    /**
     * @var bool
     */
    protected $skipPresenter = true;

    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return DiklatStruktural::class;
    }

    /**
     * Specify Validator class name
     *
     * @return mixed
     */
    public function validator()
    {
        return DiklatStrukturalValidator::class;
    }

    /**
     * Specify Presenter class name
     *
     * @return string
     */
    public function presenter()
    {
        return DiklatStrukturalPresenter::class;
    }

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
