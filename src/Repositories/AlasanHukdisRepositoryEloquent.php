<?php

namespace Kanekescom\SiasnReferensi\Repositories;

use Kanekescom\SiasnReferensi\Models\AlasanHukdis;
use Kanekescom\SiasnReferensi\Presenters\AlasanHukdisPresenter;
use Kanekescom\SiasnReferensi\Repositories\AlasanHukdisRepository;
use Kanekescom\SiasnReferensi\Validators\AlasanHukdisValidator;
use Kanekescom\RepositoryEnhancer\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;

class AlasanHukdisRepositoryEloquent extends BaseRepository implements AlasanHukdisRepository
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
        return AlasanHukdis::class;
    }

    /**
     * Specify Validator class name
     *
     * @return mixed
     */
    public function validator()
    {
        return AlasanHukdisValidator::class;
    }

    /**
     * Specify Presenter class name
     *
     * @return string
     */
    public function presenter()
    {
        return AlasanHukdisPresenter::class;
    }

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
