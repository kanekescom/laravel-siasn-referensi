<?php

namespace Kanekescom\SiasnReferensi\Repositories;

use Kanekescom\SiasnReferensi\Models\JabatanFungsional;
use Kanekescom\SiasnReferensi\Presenters\JabatanFungsionalPresenter;
use Kanekescom\SiasnReferensi\Repositories\JabatanFungsionalRepository;
use Kanekescom\SiasnReferensi\Validators\JabatanFungsionalValidator;
use Kanekescom\RepositoryEnhancer\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;

class JabatanFungsionalRepositoryEloquent extends BaseRepository implements JabatanFungsionalRepository
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
        return JabatanFungsional::class;
    }

    /**
     * Specify Validator class name
     *
     * @return mixed
     */
    public function validator()
    {
        return JabatanFungsionalValidator::class;
    }

    /**
     * Specify Presenter class name
     *
     * @return string
     */
    public function presenter()
    {
        return JabatanFungsionalPresenter::class;
    }

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
