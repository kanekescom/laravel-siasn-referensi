<?php

namespace Kanekescom\SiasnReferensi\Repositories;

use Kanekescom\SiasnReferensi\Models\JenisKepanitiaan;
use Kanekescom\SiasnReferensi\Presenters\JenisKepanitiaanPresenter;
use Kanekescom\SiasnReferensi\Repositories\JenisKepanitiaanRepository;
use Kanekescom\SiasnReferensi\Validators\JenisKepanitiaanValidator;
use Kanekescom\RepositoryEnhancer\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;

class JenisKepanitiaanRepositoryEloquent extends BaseRepository implements JenisKepanitiaanRepository
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
        return JenisKepanitiaan::class;
    }

    /**
     * Specify Validator class name
     *
     * @return mixed
     */
    public function validator()
    {
        return JenisKepanitiaanValidator::class;
    }

    /**
     * Specify Presenter class name
     *
     * @return string
     */
    public function presenter()
    {
        return JenisKepanitiaanPresenter::class;
    }

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
