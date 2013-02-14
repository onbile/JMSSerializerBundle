<?php
namespace JMS\SerializerBundle\Serializer\Naming;

use JMS\Serializer\Naming\PropertyNamingStrategyInterface;
use JMS\Serializer\Metadata\PropertyMetadata;

class PropertyNameStrategy implements PropertyNamingStrategyInterface
{
    public function translateName(PropertyMetadata $property)
    {
        return $property->name;
    }
}
