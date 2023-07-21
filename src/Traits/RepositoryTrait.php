<?php

namespace Kanekescom\SiasnReference\Traits;

trait RepositoryTrait
{
    /**
     * Delete records from the database.
     *
     * @return mixed
     */
    public function deleteAll()
    {
        return $this->model::query()
            ->delete();
    }

    /**
     * Restore a soft-deleted model instance.
     *
     * @param  array|string|null  $uniqueBy
     * @return bool|null
     */
    public function restoreById($id = null)
    {
        return $this->model::query()
            ->onlyTrashed()
            ->whereIn($this->model->getKeyName(), $id)
            ->restore();
    }
}
