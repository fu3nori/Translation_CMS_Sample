<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\JpsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\JpsTable Test Case
 */
class JpsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\JpsTable
     */
    public $Jps;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Jps',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Jps') ? [] : ['className' => JpsTable::class];
        $this->Jps = TableRegistry::getTableLocator()->get('Jps', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Jps);

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
