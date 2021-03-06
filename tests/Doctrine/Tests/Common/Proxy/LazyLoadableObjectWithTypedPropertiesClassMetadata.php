<?php
namespace Doctrine\Tests\Common\Proxy;

use ReflectionClass;
use Doctrine\Common\Persistence\Mapping\ClassMetadata;

/**
 * Class metadata test asset for @see LazyLoadableObjectWithTypedProperties
 */
class LazyLoadableObjectWithTypedPropertiesClassMetadata implements ClassMetadata
{
    /**
     * @var ReflectionClass
     */
    protected $reflectionClass;

    /**
     * @var array
     */
    protected $identifier = [
        'publicIdentifierField'    => true,
        'protectedIdentifierField' => true,
    ];

    /**
     * @var array
     */
    protected $fields = [
        'publicIdentifierField'    => true,
        'protectedIdentifierField' => true,
        'publicPersistentField'    => true,
        'protectedPersistentField' => true,
    ];

    /**
     * @var array
     */
    protected $associations = [
        'publicAssociation'        => true,
        'protectedAssociation'     => true,
    ];

    /**
     * {@inheritDoc}
     */
    public function getName()
    {
        return $this->getReflectionClass()->getName();
    }

    /**
     * {@inheritDoc}
     */
    public function getIdentifier()
    {
        return array_keys($this->identifier);
    }

    /**
     * {@inheritDoc}
     */
    public function getReflectionClass()
    {
        if (null === $this->reflectionClass) {
            $this->reflectionClass = new \ReflectionClass(__NAMESPACE__ . '\LazyLoadableObjectWithTypedProperties');
        }

        return $this->reflectionClass;
    }

    /**
     * {@inheritDoc}
     */
    public function isIdentifier($fieldName)
    {
        return isset($this->identifier[$fieldName]);
    }

    /**
     * {@inheritDoc}
     */
    public function hasField($fieldName)
    {
        return isset($this->fields[$fieldName]);
    }

    /**
     * {@inheritDoc}
     */
    public function hasAssociation($fieldName)
    {
        return isset($this->associations[$fieldName]);
    }

    /**
     * {@inheritDoc}
     */
    public function isSingleValuedAssociation($fieldName)
    {
        throw new \BadMethodCallException('not implemented');
    }

    /**
     * {@inheritDoc}
     */
    public function isCollectionValuedAssociation($fieldName)
    {
        throw new \BadMethodCallException('not implemented');
    }

    /**
     * {@inheritDoc}
     */
    public function getFieldNames()
    {
        return array_keys($this->fields);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdentifierFieldNames()
    {
        return $this->getIdentifier();
    }

    /**
     * {@inheritDoc}
     */
    public function getAssociationNames()
    {
        return array_keys($this->associations);
    }

    /**
     * {@inheritDoc}
     */
    public function getTypeOfField($fieldName)
    {
        return 'string';
    }

    /**
     * {@inheritDoc}
     */
    public function getAssociationTargetClass($assocName)
    {
        throw new \BadMethodCallException('not implemented');
    }

    /**
     * {@inheritDoc}
     */
    public function isAssociationInverseSide($assocName)
    {
        throw new \BadMethodCallException('not implemented');
    }

    /**
     * {@inheritDoc}
     */
    public function getAssociationMappedByTargetField($assocName)
    {
        throw new \BadMethodCallException('not implemented');
    }

    /**
     * {@inheritDoc}
     */
    public function getIdentifierValues($object)
    {
        throw new \BadMethodCallException('not implemented');
    }
}
