/*** @dataProvider dataProvider*/public function testShippingCosts($productWeight){  $model = Mage::getModel('yourcompany_yourmodule/shippingcosts_calculator');  $calculatedCosts = $model->calculateCostsForWeight($productWeight);  $expectedCosts = $this->expected('costs_for_%s', $productWeight)->getCosts();  $this->assertEquals($expectedCosts, $calculatedCosts);}