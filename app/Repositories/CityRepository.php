<?php

namespace App\Repositories;

use App\Models\City;

/**
 * Class CityRepository
 *
 * @version July 31, 2021, 7:41 am UTC
 */
class CityRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'state_id',
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return City::class;
    }
}
