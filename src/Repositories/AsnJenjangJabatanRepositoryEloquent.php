<?php

namespace Kanekescom\Siasn\Referensi\Repositories;

use Kanekescom\Siasn\Referensi\Models\AsnJenjangJabatan;
use Kanekescom\Siasn\Referensi\Presenters\AsnJenjangJabatanPresenter;
use Kanekescom\Siasn\Referensi\Validators\AsnJenjangJabatanValidator;
use Prettus\Repository\Criteria\RequestCriteria;
use Prettus\Repository\Eloquent\BaseRepository;

class AsnJenjangJabatanRepositoryEloquent extends BaseRepository implements AsnJenjangJabatanRepository
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
        return AsnJenjangJabatan::class;
    }

    /**
     * Specify Validator class name
     *
     * @return mixed
     */
    public function validator()
    {
        return AsnJenjangJabatanValidator::class;
    }

    /**
     * Specify Presenter class name
     *
     * @return string
     */
    public function presenter()
    {
        return AsnJenjangJabatanPresenter::class;
    }

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
