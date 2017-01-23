<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AppoimentsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AppoimentsTable Test Case
 */
class AppoimentsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\AppoimentsTable
     */
    public $Appoiments;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.appoiments',
        'app.patients',
        'app.carriers',
        'app.invoices',
        'app.doctors'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Appoiments') ? [] : ['className' => 'App\Model\Table\AppoimentsTable'];
        $this->Appoiments = TableRegistry::get('Appoiments', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Appoiments);

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
