<?php

namespace NTCDev\User\Repositories;

use NTCDev\Core\Repositories\BaseRepositoryEloquent;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Entities\UserProfile;
use NTCDev\User\Validators\UserProfileValidator;

/**
 * Class UserProfileRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class UserProfileRepositoryEloquent extends BaseRepositoryEloquent implements UserProfileRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return UserProfile::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
