<?php

/**
 * Class PropertyContainer
 */
class PropertyContainer implements PropertyContainerInterface
{
    /**
     * @var array
     */
    private $propertyContainer = [];

    /**
     * @param $propertyName
     * @param $value
     * @return mixed|void
     */
    public function addProperty($propertyName, $value) {
        $this->propertyContainer[$propertyName] = $value;
    }

    /**
     * @param $propertyName
     * @return mixed|void
     */
    function deleteProperty($propertyName)
    {
        unset($this->propertyContainer[$propertyName]);
    }

    /**
     * @param $propertyName
     * @return mixed|null
     */
    function getProperty($propertyName)
    {
        return $this->propertyContainer[$propertyName] ?? null;
    }

    /**
     * @param $propertyName
     * @param $value
     * @return mixed|void
     * @throws Exception
     */
    function setProperty($propertyName, $value)
    {
        if (!isset($this->propertyContainer[$propertyName])) {
            throw new Exception("Property {$propertyName} not found.");
        }

        $this->propertyContainer[$propertyName] = $value;
    }
}