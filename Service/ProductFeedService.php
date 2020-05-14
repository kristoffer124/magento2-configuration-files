<?php

namespace Theprogrammer\ProductFeed\Service;

/**
 * Class ProductFeedService
 *
 * @package Theprogrammer\ProductFeed\Service
 */
class ProductFeedService
{
    /*
     * \Theprogrammer\ProductFeed\Model\Config\Data
     */
    protected $productFeedConfig;

    /**
     * ProductFeedService constructor.
     *
     * @param $productFeedConfig
     */
    public function __construct(
        \Theprogrammer\ProductFeed\Model\Config\Data $productFeedConfig
    ) {
        $this->productFeedConfig = $productFeedConfig;
    }

    public function getProductFeedList()
    {
        $productfeedList = $this->productFeedConfig->get('productfeed_list');

        return $productfeedList;
    }
}
