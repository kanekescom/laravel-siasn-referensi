<?php

namespace Kanekescom\Siasn\Referensi\Repositories;

use Kanekescom\Siasn\Referensi\Models\Pendidikan;
use Kanekescom\Siasn\Referensi\Presenters\PendidikanPresenter;
use Kanekescom\Siasn\Referensi\Validators\PendidikanValidator;
use Prettus\Repository\Criteria\RequestCriteria;
use Prettus\Repository\Eloquent\BaseRepository;

class PendidikanRepositoryEloquent extends BaseRepository implements PendidikanRepository
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
        return Pendidikan::class;
    }

    /**
     * Specify Validator class name
     *
     * @return mixed
     */
    public function validator()
    {
        return PendidikanValidator::class;
    }

    /**
     * Specify Presenter class name
     *
     * @return string
     */
    public function presenter()
    {
        return PendidikanPresenter::class;
    }

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
