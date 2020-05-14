<?php

namespace Theprogrammer\ProductFeed\Model\Config;

use Magento\Framework\Module\Dir;

class SchemaLocator implements \Magento\Framework\Config\SchemaLocatorInterface
{
    const CONFIG_FILE_SCHEMA = 'productfeed_list.xsd';

    protected $schema;
    protected $perFileSchema;

    public function __construct(\Magento\Framework\Module\Dir\Reader $moduleReader)
    {
        $configDir              = $moduleReader->getModuleDir(Dir::MODULE_ETC_DIR, 'Theprogrammer_ProductFeed');
        $this->schema           = $configDir . DIRECTORY_SEPARATOR . self::CONFIG_FILE_SCHEMA;
        $this->perFileSchema    = $configDir . DIRECTORY_SEPARATOR . self::CONFIG_FILE_SCHEMA;
    }
    /**
     * @inheritDoc
     */
    public function getSchema()
    {
        return $this->schema;
    }

    /**
     * @inheritDoc
     */
    public function getPerFileSchema()
    {
        return $this->perFileSchema;
    }
}
