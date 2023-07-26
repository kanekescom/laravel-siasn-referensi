<?php

namespace Kanekescom\SiasnReferensi\Repositories;

use Kanekescom\SiasnReferensi\Models\JabatanFungsionalUmum;
use Kanekescom\SiasnReferensi\Presenters\JabatanFungsionalUmumPresenter;
use Kanekescom\SiasnReferensi\Repositories\JabatanFungsionalUmumRepository;
use Kanekescom\SiasnReferensi\Validators\JabatanFungsionalUmumValidator;
use Kanekescom\RepositoryEnhancer\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;

class JabatanFungsionalUmumRepositoryEloquent extends BaseRepository implements JabatanFungsionalUmumRepository
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
        return JabatanFungsionalUmum::class;
    }

    /**
     * Specify Validator class name
     *
     * @return mixed
     */
    public function validator()
    {
        return JabatanFungsionalUmumValidator::class;
    }

    /**
     * Specify Presenter class name
     *
     * @return string
     */
    public function presenter()
    {
        return JabatanFungsionalUmumPresenter::class;
    }

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
