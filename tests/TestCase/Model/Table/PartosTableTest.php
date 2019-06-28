<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PartosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PartosTable Test Case
 */
class PartosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PartosTable
     */
    public $Partos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Partos',
        'app.Unidades',
        'app.Users',
        'app.Pacientes'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Partos') ? [] : ['className' => PartosTable::class];
        $this->Partos = TableRegistry::getTableLocator()->get('Partos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Partos);

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
