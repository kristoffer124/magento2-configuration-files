<?php

namespace Theprogrammer\ProductFeed\Model\Config;

class Converter implements \Magento\Framework\Config\ConverterInterface
{
    public function convert($source)
    {
        $productfeed = $source->getElementsByTagName('productfeed_list');

        $data = [];
        $k = 0;
        foreach ($productfeed as $feedLists) {
            foreach($feedLists->childNodes as $feedlist) {
                if ("productfeed" == $feedlist->localName) {
                    foreach($feedlist->childNodes as $child) {
                        if ('feedname' == $child->localName){
                            $data[$k]['feedname'] = $child->textContent;
                        }
                        if ('feedpath' == $child->localName){
                            $data[$k]['feedpath'] = $child->textContent;
                        }
                    }
                    $k++;
                }
            }
        }

        return ['productfeed_list' => $data];
    }
}
