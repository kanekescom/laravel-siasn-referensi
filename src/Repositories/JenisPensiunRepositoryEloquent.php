<?php

namespace Kanekescom\SiasnReferensi\Repositories;

use Kanekescom\SiasnReferensi\Models\JenisPensiun;
use Kanekescom\SiasnReferensi\Presenters\JenisPensiunPresenter;
use Kanekescom\SiasnReferensi\Repositories\JenisPensiunRepository;
use Kanekescom\SiasnReferensi\Validators\JenisPensiunValidator;
use Kanekescom\RepositoryEnhancer\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;

class JenisPensiunRepositoryEloquent extends BaseRepository implements JenisPensiunRepository
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
        return JenisPensiun::class;
    }

    /**
     * Specify Validator class name
     *
     * @return mixed
     */
    public function validator()
    {
        return JenisPensiunValidator::class;
    }

    /**
     * Specify Presenter class name
     *
     * @return string
     */
    public function presenter()
    {
        return JenisPensiunPresenter::class;
    }

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
