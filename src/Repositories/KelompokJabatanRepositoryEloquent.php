<?php

namespace Kanekescom\SiasnReferensi\Repositories;

use Kanekescom\SiasnReferensi\Models\KelompokJabatan;
use Kanekescom\SiasnReferensi\Presenters\KelompokJabatanPresenter;
use Kanekescom\SiasnReferensi\Repositories\KelompokJabatanRepository;
use Kanekescom\SiasnReferensi\Validators\KelompokJabatanValidator;
use Kanekescom\RepositoryEnhancer\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;

class KelompokJabatanRepositoryEloquent extends BaseRepository implements KelompokJabatanRepository
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
        return KelompokJabatan::class;
    }

    /**
     * Specify Validator class name
     *
     * @return mixed
     */
    public function validator()
    {
        return KelompokJabatanValidator::class;
    }

    /**
     * Specify Presenter class name
     *
     * @return string
     */
    public function presenter()
    {
        return KelompokJabatanPresenter::class;
    }

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
