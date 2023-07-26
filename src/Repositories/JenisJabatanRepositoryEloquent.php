<?php

namespace Kanekescom\SiasnReferensi\Repositories;

use Kanekescom\SiasnReferensi\Models\JenisJabatan;
use Kanekescom\SiasnReferensi\Presenters\JenisJabatanPresenter;
use Kanekescom\SiasnReferensi\Repositories\JenisJabatanRepository;
use Kanekescom\SiasnReferensi\Validators\JenisJabatanValidator;
use Kanekescom\RepositoryEnhancer\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;

class JenisJabatanRepositoryEloquent extends BaseRepository implements JenisJabatanRepository
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
        return JenisJabatan::class;
    }

    /**
     * Specify Validator class name
     *
     * @return mixed
     */
    public function validator()
    {
        return JenisJabatanValidator::class;
    }

    /**
     * Specify Presenter class name
     *
     * @return string
     */
    public function presenter()
    {
        return JenisJabatanPresenter::class;
    }

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
