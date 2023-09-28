<?php

namespace Kanekescom\Siasn\Referensi\Repositories;

use Kanekescom\Siasn\Referensi\Models\AsnJenisJabatan;
use Kanekescom\Siasn\Referensi\Presenters\AsnJenisJabatanPresenter;
use Kanekescom\Siasn\Referensi\Validators\AsnJenisJabatanValidator;
use Prettus\Repository\Criteria\RequestCriteria;
use Prettus\Repository\Eloquent\BaseRepository;

class AsnJenisJabatanRepositoryEloquent extends BaseRepository implements AsnJenisJabatanRepository
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
        return AsnJenisJabatan::class;
    }

    /**
     * Specify Validator class name
     *
     * @return mixed
     */
    public function validator()
    {
        return AsnJenisJabatanValidator::class;
    }

    /**
     * Specify Presenter class name
     *
     * @return string
     */
    public function presenter()
    {
        return AsnJenisJabatanPresenter::class;
    }

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
