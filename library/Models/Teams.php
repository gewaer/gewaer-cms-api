<?php
declare(strict_types=1);

namespace Gewaer\Models;

class Teams extends BaseModel
{
    /**
     * @var integer
     */
    public $id;

    /**
     * @var integer
     */
    public $games_id;

        /**
     * @var integer
     */
    public $organizations_id;

        /**
     * @var integer
     */
    public $leagues_id;

    /**
     * @var string
     */
    public $name;

    /**
     * @var datetime
     */
    public $founded_date;

        /**
     * @var integer
     */
    public $is_active;

    /**
     * @var datetime
     */
    public $created_at;

    /**
     * @var datetime
     */
    public $updated_at;

    /**
     * @var integer
     */
    public $is_deleted;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSource('teams');

        $this->belongsTo(
            'games_id',
            'Canvas\Models\Games',
            'id',
            ['alias' => 'games']
        );
    }
    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource(): string
    {
        return 'teams';
    }

}