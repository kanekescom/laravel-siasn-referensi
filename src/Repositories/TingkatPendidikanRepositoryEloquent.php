<?php

namespace Kanekescom\SiasnReferensi\Repositories;

use Kanekescom\SiasnReferensi\Models\TingkatPendidikan;
use Kanekescom\SiasnReferensi\Presenters\TingkatPendidikanPresenter;
use Kanekescom\SiasnReferensi\Repositories\TingkatPendidikanRepository;
use Kanekescom\SiasnReferensi\Validators\TingkatPendidikanValidator;
use Kanekescom\RepositoryEnhancer\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;

class TingkatPendidikanRepositoryEloquent extends BaseRepository implements TingkatPendidikanRepository
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
        return TingkatPendidikan::class;
    }

    /**
     * Specify Validator class name
     *
     * @return mixed
     */
    public function validator()
    {
        return TingkatPendidikanValidator::class;
    }

    /**
     * Specify Presenter class name
     *
     * @return string
     */
    public function presenter()
    {
        return TingkatPendidikanPresenter::class;
    }

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
