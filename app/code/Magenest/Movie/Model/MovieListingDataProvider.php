<?php

namespace Magenest\Movie\Model\ResourceModel;

use Magento\Ui\DataProvider\AbstractDataProvider;

class MovieListingDataProvider extends AbstractDataProvider
{
    public function __construct($name, $primaryFieldName, $requestFieldName, array $meta = [], array $data = [])
    {
        parent::__construct($name, $primaryFieldName, $requestFieldName, $meta, $data);
    }

    public function getData()
    {
        return parent::getData(); // TODO: Change the autogenerated stub
    }
}