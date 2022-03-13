<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EnsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EnsTable Test Case
 */
class EnsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\EnsTable
     */
    public $Ens;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Ens',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Ens') ? [] : ['className' => EnsTable::class];
        $this->Ens = TableRegistry::getTableLocator()->get('Ens', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Ens);

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
