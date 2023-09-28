<?php

namespace Kanekescom\Siasn\Referensi\Repositories;

use Kanekescom\Siasn\Referensi\Models\JabatanFungsionalUmum;
use Kanekescom\Siasn\Referensi\Presenters\JabatanFungsionalUmumPresenter;
use Kanekescom\Siasn\Referensi\Validators\JabatanFungsionalUmumValidator;
use Prettus\Repository\Criteria\RequestCriteria;
use Prettus\Repository\Eloquent\BaseRepository;

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
