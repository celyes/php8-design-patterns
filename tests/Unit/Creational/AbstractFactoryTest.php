<?php declare ( strict_types = 1 ) ;

namespace Tests\Unit\Creational;

use PHPUnit\Framework\TestCase;
use Patterns\Creational\AbstractFactory\MercedesFactory;
use Patterns\Creational\AbstractFactory\Models\MercedesModel;
use Patterns\Creational\AbstractFactory\BMWFactory;
use Patterns\Creational\AbstractFactory\Models\BMWModel;

final class AbstractFactoryTests extends TestCase {

    
    public function testCanCreateMercedesModel()
    {
        $mercedes = new MercedesFactory();
        $model = $mercedes->makeModel();
        $this->assertInstanceOf(MercedesModel::class, $model);
    }

    public function testCanCreateBMWModel()
    {
        $mercedes = new BMWFactory();
        $model = $mercedes->makeModel();
        $this->assertInstanceOf(BMWModel::class, $model);
    }

    public function testCanGetMercedesModelDescription()
    {
        $mercedes = new MercedesFactory();
        $model = $mercedes->makeModel();
        $this->assertEquals('A45S AMG', $model->getDescription());
    }
    public function testCanGetBMWModelDescription()
    {
        $bmw = new BMWFactory();
        $model = $bmw->makeModel();
        $this->assertEquals('M5 Competition', $model->getDescription());
    }
}