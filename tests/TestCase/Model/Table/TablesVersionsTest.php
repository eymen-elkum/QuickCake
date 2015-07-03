<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TablesVersions;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TablesVersions Test Case
 */
class TablesVersionsTest extends TestCase
{

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('sVersions') ? [] : ['className' => 'App\Model\Table\TablesVersions'];
        $this->TablesVersions = TableRegistry::get('sVersions', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->TablesVersions);

        parent::tearDown();
    }

    /**
     * Test initial setup
     *
     * @return void
     */
    public function testInitialization()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
