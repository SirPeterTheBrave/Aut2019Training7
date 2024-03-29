<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * FormationsFixture
 */
class FormationsFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'number' => ['type' => 'string', 'length' => 50, 'null' => false, 'default' => null, 'collate' => 'utf8_unicode_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'title' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => null, 'collate' => 'utf8_unicode_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'categorie_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'frequence_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'start_reminder_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'modality_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'duration' => ['type' => 'decimal', 'length' => 10, 'precision' => 0, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => ''],
        'note' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'utf8_unicode_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        '_indexes' => [
            'categorie' => ['type' => 'index', 'columns' => ['categorie_id'], 'length' => []],
            'frequence' => ['type' => 'index', 'columns' => ['frequence_id'], 'length' => []],
            'start_reminder' => ['type' => 'index', 'columns' => ['start_reminder_id'], 'length' => []],
            'modality' => ['type' => 'index', 'columns' => ['modality_id'], 'length' => []],
            'categorie_2' => ['type' => 'index', 'columns' => ['categorie_id'], 'length' => []],
            'frequence_id' => ['type' => 'index', 'columns' => ['frequence_id'], 'length' => []],
            'categorie_id' => ['type' => 'index', 'columns' => ['categorie_id'], 'length' => []],
            'modality_id' => ['type' => 'index', 'columns' => ['modality_id'], 'length' => []],
            'start_reminder_id' => ['type' => 'index', 'columns' => ['start_reminder_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'formations_ibfk_1' => ['type' => 'foreign', 'columns' => ['categorie_id'], 'references' => ['categories', 'id'], 'update' => 'cascade', 'delete' => 'cascade', 'length' => []],
            'formations_ibfk_2' => ['type' => 'foreign', 'columns' => ['frequence_id'], 'references' => ['frequences', 'id'], 'update' => 'cascade', 'delete' => 'cascade', 'length' => []],
            'formations_ibfk_4' => ['type' => 'foreign', 'columns' => ['modality_id'], 'references' => ['modalities', 'id'], 'update' => 'cascade', 'delete' => 'cascade', 'length' => []],
            'formations_ibfk_5' => ['type' => 'foreign', 'columns' => ['start_reminder_id'], 'references' => ['start_reminders', 'id'], 'update' => 'cascade', 'delete' => 'cascade', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_unicode_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd
    /**
     * Init method
     *
     * @return void
     */
    public function init()
    {
        $this->records = [
            [
                'id' => 1,
                'number' => 'Lorem ipsum dolor sit amet',
                'title' => 'Lorem ipsum dolor sit amet',
                'categorie_id' => 1,
                'frequence_id' => 1,
                'start_reminder_id' => 1,
                'modality_id' => 1,
                'duration' => 1.5,
                'note' => 'Lorem ipsum dolor sit amet'
            ],
        ];
        parent::init();
    }
}
