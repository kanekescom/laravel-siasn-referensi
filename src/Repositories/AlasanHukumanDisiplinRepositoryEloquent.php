<?php

namespace Kanekescom\Siasn\Referensi\Repositories;

use Kanekescom\Siasn\Referensi\Models\AlasanHukumanDisiplin;
use Kanekescom\Siasn\Referensi\Presenters\AlasanHukumanDisiplinPresenter;
use Kanekescom\Siasn\Referensi\Validators\AlasanHukumanDisiplinValidator;
use Prettus\Repository\Criteria\RequestCriteria;
use Prettus\Repository\Eloquent\BaseRepository;

class AlasanHukumanDisiplinRepositoryEloquent extends BaseRepository implements AlasanHukumanDisiplinRepository
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
        return AlasanHukumanDisiplin::class;
    }

    /**
     * Specify Validator class name
     *
     * @return mixed
     */
    public function validator()
    {
        return AlasanHukumanDisiplinValidator::class;
    }

    /**
     * Specify Presenter class name
     *
     * @return string
     */
    public function presenter()
    {
        return AlasanHukumanDisiplinPresenter::class;
    }

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
