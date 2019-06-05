<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ClassificacaosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ClassificacaosTable Test Case
 */
class ClassificacaosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ClassificacaosTable
     */
    public $Classificacaos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Classificacaos',
        'app.Unidades'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Classificacaos') ? [] : ['className' => ClassificacaosTable::class];
        $this->Classificacaos = TableRegistry::getTableLocator()->get('Classificacaos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Classificacaos);

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
