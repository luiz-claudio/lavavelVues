<?php

namespace App\Repositories;


use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\CategorieRepositoryRepository;
use App\Entities\Category;
use App\Validators\CategorieRepositoryValidator;

/**
 * Class CategorieRepositoryRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class CategorieRepositoryRepositoryEloquent extends BaseRepository implements CategorieRepositoryRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Category::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
