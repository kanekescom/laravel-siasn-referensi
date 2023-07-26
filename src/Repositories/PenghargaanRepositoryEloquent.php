<?php

namespace Kanekescom\SiasnReferensi\Repositories;

use Kanekescom\SiasnReferensi\Models\Penghargaan;
use Kanekescom\SiasnReferensi\Presenters\PenghargaanPresenter;
use Kanekescom\SiasnReferensi\Repositories\PenghargaanRepository;
use Kanekescom\SiasnReferensi\Validators\PenghargaanValidator;
use Kanekescom\RepositoryEnhancer\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;

class PenghargaanRepositoryEloquent extends BaseRepository implements PenghargaanRepository
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
        return Penghargaan::class;
    }

    /**
     * Specify Validator class name
     *
     * @return mixed
     */
    public function validator()
    {
        return PenghargaanValidator::class;
    }

    /**
     * Specify Presenter class name
     *
     * @return string
     */
    public function presenter()
    {
        return PenghargaanPresenter::class;
    }

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
