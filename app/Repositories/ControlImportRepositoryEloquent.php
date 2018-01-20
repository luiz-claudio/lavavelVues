<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\controlImportRepository;
use App\Entities\ControlImport;
use App\Validators\ControlImportValidator;

/**
 * Class ControlImportRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class ControlImportRepositoryEloquent extends BaseRepository implements ControlImportRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return ControlImport::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
