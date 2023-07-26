<?php

namespace Kanekescom\SiasnReferensi\Repositories;

use Kanekescom\SiasnReferensi\Models\JenisKursus;
use Kanekescom\SiasnReferensi\Presenters\JenisKursusPresenter;
use Kanekescom\SiasnReferensi\Repositories\JenisKursusRepository;
use Kanekescom\SiasnReferensi\Validators\JenisKursusValidator;
use Kanekescom\RepositoryEnhancer\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;

class JenisKursusRepositoryEloquent extends BaseRepository implements JenisKursusRepository
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
        return JenisKursus::class;
    }

    /**
     * Specify Validator class name
     *
     * @return mixed
     */
    public function validator()
    {
        return JenisKursusValidator::class;
    }

    /**
     * Specify Presenter class name
     *
     * @return string
     */
    public function presenter()
    {
        return JenisKursusPresenter::class;
    }

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
