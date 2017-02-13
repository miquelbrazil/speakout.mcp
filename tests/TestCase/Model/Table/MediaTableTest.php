<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MediaTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MediaTable Test Case
 */
class MediaTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\MediaTable
     */
    public $Media;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.media'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Media') ? [] : ['className' => 'App\Model\Table\MediaTable'];
        $this->Media = TableRegistry::get('Media', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Media);

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
