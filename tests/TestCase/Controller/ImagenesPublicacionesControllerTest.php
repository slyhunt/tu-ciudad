<?php
namespace App\Test\TestCase\Controller;

use App\Controller\ImagenesPublicacionesController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\ImagenesPublicacionesController Test Case
 */
class ImagenesPublicacionesControllerTest extends IntegrationTestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.imagenes_publicaciones',
        'app.publicaciones',
        'app.negocios',
        'app.lugares',
        'app.negocios_tags',
        'app.tags',
        'app.publicaciones_tags'
    ];

    /**
     * Test index method
     *
     * @return void
     */
    public function testIndex()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     */
    public function testView()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     */
    public function testAdd()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     */
    public function testEdit()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     */
    public function testDelete()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
