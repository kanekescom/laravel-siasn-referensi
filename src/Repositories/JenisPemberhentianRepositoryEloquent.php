<?php

namespace Kanekescom\SiasnReferensi\Repositories;

use Kanekescom\SiasnReferensi\Models\JenisPemberhentian;
use Kanekescom\SiasnReferensi\Presenters\JenisPemberhentianPresenter;
use Kanekescom\SiasnReferensi\Repositories\JenisPemberhentianRepository;
use Kanekescom\SiasnReferensi\Validators\JenisPemberhentianValidator;
use Kanekescom\RepositoryEnhancer\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;

class JenisPemberhentianRepositoryEloquent extends BaseRepository implements JenisPemberhentianRepository
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
        return JenisPemberhentian::class;
    }

    /**
     * Specify Validator class name
     *
     * @return mixed
     */
    public function validator()
    {
        return JenisPemberhentianValidator::class;
    }

    /**
     * Specify Presenter class name
     *
     * @return string
     */
    public function presenter()
    {
        return JenisPemberhentianPresenter::class;
    }

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
