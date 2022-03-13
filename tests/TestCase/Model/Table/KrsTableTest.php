<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\KrsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\KrsTable Test Case
 */
class KrsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\KrsTable
     */
    public $Krs;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Krs',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Krs') ? [] : ['className' => KrsTable::class];
        $this->Krs = TableRegistry::getTableLocator()->get('Krs', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Krs);

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
