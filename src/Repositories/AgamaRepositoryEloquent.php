<?php

namespace Kanekescom\SiasnReferensi\Repositories;

use Kanekescom\SiasnReferensi\Models\Agama;
use Kanekescom\SiasnReferensi\Presenters\AgamaPresenter;
use Kanekescom\SiasnReferensi\Repositories\AgamaRepository;
use Kanekescom\SiasnReferensi\Validators\AgamaValidator;
use Kanekescom\RepositoryEnhancer\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;

class AgamaRepositoryEloquent extends BaseRepository implements AgamaRepository
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
        return Agama::class;
    }

    /**
     * Specify Validator class name
     *
     * @return mixed
     */
    public function validator()
    {
        return AgamaValidator::class;
    }

    /**
     * Specify Presenter class name
     *
     * @return string
     */
    public function presenter()
    {
        return AgamaPresenter::class;
    }

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
