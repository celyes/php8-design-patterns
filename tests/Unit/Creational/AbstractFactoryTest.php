<?php declare ( strict_types = 1 ) ;

namespace Tests\Unit\Creational;

use PHPUnit\Framework\TestCase;
use Patterns\Creational\AbstractFactory\MercedesFactory;
use Patterns\Creational\AbstractFactory\Models\MercedesModel;

final class AbstractFactoryTests extends TestCase {

    
    public function testCanCreateMercedesModel(): void
    {
        $mercedes = new MercedesFactory();
        $model = $mercedes->makeModel();
        $this->assertInstanceOf(MercedesModel::class, $model);
    }
    
    public function testCanGetMercedesModelDescription(): void
    {
        $mercedes = new MercedesFactory();
        $model = $mercedes->makeModel();
        $this->assertEquals('A45S AMG', $model->getDescription());
    }
}