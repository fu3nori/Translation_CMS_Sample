<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ChsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ChsTable Test Case
 */
class ChsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ChsTable
     */
    public $Chs;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Chs',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Chs') ? [] : ['className' => ChsTable::class];
        $this->Chs = TableRegistry::getTableLocator()->get('Chs', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Chs);

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
