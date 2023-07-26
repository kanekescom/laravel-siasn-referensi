<?php

namespace Kanekescom\SiasnReferensi\Repositories;

use Kanekescom\SiasnReferensi\Models\TingkatHukuman;
use Kanekescom\SiasnReferensi\Presenters\TingkatHukumanPresenter;
use Kanekescom\SiasnReferensi\Repositories\TingkatHukumanRepository;
use Kanekescom\SiasnReferensi\Validators\TingkatHukumanValidator;
use Kanekescom\RepositoryEnhancer\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;

class TingkatHukumanRepositoryEloquent extends BaseRepository implements TingkatHukumanRepository
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
        return TingkatHukuman::class;
    }

    /**
     * Specify Validator class name
     *
     * @return mixed
     */
    public function validator()
    {
        return TingkatHukumanValidator::class;
    }

    /**
     * Specify Presenter class name
     *
     * @return string
     */
    public function presenter()
    {
        return TingkatHukumanPresenter::class;
    }

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
