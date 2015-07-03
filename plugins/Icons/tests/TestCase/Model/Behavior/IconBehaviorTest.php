<?php
namespace Icons\Test\TestCase\Model\Behavior;

use Cake\TestSuite\TestCase;
use Icons\Model\Behavior\IconBehavior;

/**
 * Icons\Model\Behavior\IconBehavior Test Case
 */
class IconBehaviorTest extends TestCase
{

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $this->Icon = new IconBehavior();
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Icon);

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
