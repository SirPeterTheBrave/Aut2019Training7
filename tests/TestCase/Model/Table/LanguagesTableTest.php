<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\LanguagesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\LanguagesTable Test Case
 */
class LanguagesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\LanguagesTable
     */
    public $Languages;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Languages',
        'app.Employees'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Languages') ? [] : ['className' => LanguagesTable::class];
        $this->Languages = TableRegistry::getTableLocator()->get('Languages', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Languages);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
