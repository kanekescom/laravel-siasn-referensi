<?php

namespace Kanekescom\SiasnReference\Repositories;

use Kanekescom\SiasnReference\Models\Unor;
use Kanekescom\SiasnReference\Presenters\UnorPresenter;
use Kanekescom\SiasnReference\Repositories\UnorRepository;
use Kanekescom\SiasnReference\Traits\RepositoryTrait;
use Kanekescom\SiasnReference\Validators\UnorValidator;
use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;

class UnorRepositoryEloquent extends BaseRepository implements UnorRepository
{
    use RepositoryTrait;

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
        return Unor::class;
    }

    /**
     * Specify Validator class name
     *
     * @return mixed
     */
    public function validator()
    {
        return UnorValidator::class;
    }

    /**
     * Specify Presenter class name
     *
     * @return string
     */
    public function presenter()
    {
        return UnorPresenter::class;
    }

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
