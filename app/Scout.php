<?php

namespace App;

use AlgoliaSearch\Laravel\AlgoliaEloquentTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Scout\Searchable;

class Scout extends Model
{
    use Notifiable, AlgoliaEloquentTrait, Searchable;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'scouts';

    /**
     * Get the index name for the model.
     *
     * @return string
     */
    public function searchableAs()
    {
        return 'scouts_index';
    }

    /**
     * Get the indexable data array for the model.
     *
     * @return array
     */
    public function toSearchableArray()
    {
        $array = $this->toArray();

        // Customize array...

        return $array;
    }
}
