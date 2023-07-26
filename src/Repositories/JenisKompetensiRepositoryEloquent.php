<?php

namespace Kanekescom\SiasnReferensi\Repositories;

use Kanekescom\SiasnReferensi\Models\JenisKompetensi;
use Kanekescom\SiasnReferensi\Presenters\JenisKompetensiPresenter;
use Kanekescom\SiasnReferensi\Repositories\JenisKompetensiRepository;
use Kanekescom\SiasnReferensi\Validators\JenisKompetensiValidator;
use Kanekescom\RepositoryEnhancer\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;

class JenisKompetensiRepositoryEloquent extends BaseRepository implements JenisKompetensiRepository
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
        return JenisKompetensi::class;
    }

    /**
     * Specify Validator class name
     *
     * @return mixed
     */
    public function validator()
    {
        return JenisKompetensiValidator::class;
    }

    /**
     * Specify Presenter class name
     *
     * @return string
     */
    public function presenter()
    {
        return JenisKompetensiPresenter::class;
    }

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
