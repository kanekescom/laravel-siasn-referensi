<?php

namespace Kanekescom\SiasnReferensi\Repositories;

use Kanekescom\SiasnReferensi\Models\SatuanKerja;
use Kanekescom\SiasnReferensi\Presenters\SatuanKerjaPresenter;
use Kanekescom\SiasnReferensi\Repositories\SatuanKerjaRepository;
use Kanekescom\SiasnReferensi\Validators\SatuanKerjaValidator;
use Kanekescom\RepositoryEnhancer\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;

class SatuanKerjaRepositoryEloquent extends BaseRepository implements SatuanKerjaRepository
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
        return SatuanKerja::class;
    }

    /**
     * Specify Validator class name
     *
     * @return mixed
     */
    public function validator()
    {
        return SatuanKerjaValidator::class;
    }

    /**
     * Specify Presenter class name
     *
     * @return string
     */
    public function presenter()
    {
        return SatuanKerjaPresenter::class;
    }

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}