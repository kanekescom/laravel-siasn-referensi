<?php

namespace Kanekescom\Siasn\Referensi\Repositories;

use Kanekescom\Siasn\Referensi\Models\Instansi;
use Kanekescom\Siasn\Referensi\Presenters\InstansiPresenter;
use Kanekescom\Siasn\Referensi\Validators\InstansiValidator;
use Prettus\Repository\Criteria\RequestCriteria;
use Prettus\Repository\Eloquent\BaseRepository;

class InstansiRepositoryEloquent extends BaseRepository implements InstansiRepository
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
        return Instansi::class;
    }

    /**
     * Specify Validator class name
     *
     * @return mixed
     */
    public function validator()
    {
        return InstansiValidator::class;
    }

    /**
     * Specify Presenter class name
     *
     * @return string
     */
    public function presenter()
    {
        return InstansiPresenter::class;
    }

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
