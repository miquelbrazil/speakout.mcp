<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MobilizerEventsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MobilizerEventsTable Test Case
 */
class MobilizerEventsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\MobilizerEventsTable
     */
    public $MobilizerEvents;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.mobilizer_events',
        'app.campaigns',
        'app.regions',
        'app.users'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('MobilizerEvents') ? [] : ['className' => 'App\Model\Table\MobilizerEventsTable'];
        $this->MobilizerEvents = TableRegistry::get('MobilizerEvents', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->MobilizerEvents);

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

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
