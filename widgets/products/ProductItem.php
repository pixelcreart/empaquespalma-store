<?php
namespace app\widgets\products;

use yii\base\Widget;

class ProductItem extends Widget
{
    public $product;

    public function init()
    {
        parent::init();
        if ($this->product === null) {
            throw new \InvalidArgumentException('Product cannot be null.');
        }
    }

    public function run()
    {
        return $this->render('product-item', [
            'product' => $this->product,
        ]);
    }
}