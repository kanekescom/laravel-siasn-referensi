<?php

namespace Kanekescom\SiasnReferensi\Repositories;

use Kanekescom\SiasnReferensi\Models\RumpunJabatan;
use Kanekescom\SiasnReferensi\Presenters\RumpunJabatanPresenter;
use Kanekescom\SiasnReferensi\Repositories\RumpunJabatanRepository;
use Kanekescom\SiasnReferensi\Validators\RumpunJabatanValidator;
use Kanekescom\RepositoryEnhancer\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;

class RumpunJabatanRepositoryEloquent extends BaseRepository implements RumpunJabatanRepository
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
        return RumpunJabatan::class;
    }

    /**
     * Specify Validator class name
     *
     * @return mixed
     */
    public function validator()
    {
        return RumpunJabatanValidator::class;
    }

    /**
     * Specify Presenter class name
     *
     * @return string
     */
    public function presenter()
    {
        return RumpunJabatanPresenter::class;
    }

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
