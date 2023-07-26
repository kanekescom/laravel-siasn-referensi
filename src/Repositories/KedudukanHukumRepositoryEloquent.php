<?php

namespace Kanekescom\SiasnReferensi\Repositories;

use Kanekescom\SiasnReferensi\Models\KedudukanHukum;
use Kanekescom\SiasnReferensi\Presenters\KedudukanHukumPresenter;
use Kanekescom\SiasnReferensi\Repositories\KedudukanHukumRepository;
use Kanekescom\SiasnReferensi\Validators\KedudukanHukumValidator;
use Kanekescom\RepositoryEnhancer\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;

class KedudukanHukumRepositoryEloquent extends BaseRepository implements KedudukanHukumRepository
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
        return KedudukanHukum::class;
    }

    /**
     * Specify Validator class name
     *
     * @return mixed
     */
    public function validator()
    {
        return KedudukanHukumValidator::class;
    }

    /**
     * Specify Presenter class name
     *
     * @return string
     */
    public function presenter()
    {
        return KedudukanHukumPresenter::class;
    }

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
