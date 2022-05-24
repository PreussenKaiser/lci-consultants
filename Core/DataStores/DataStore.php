<?php

namespace Core\DataStores;

/**
 * The base class for a data store.
 * 
 * @author PreussenKaiser
 */
abstract class DataStore
{
    /**
     * The items in the data store.
     * @var iterable
     */
    private static iterable $items;
    
    /**
     * Initializes a new instance of the DataStore class.
     * 
     * @param iterable $items The items to add to the data store.
     */
    protected function __construct(iterable $items)
    {
        self::$items = $items;
    }

    /**
     * Gets the items in the data store.
     * 
     * @return iterable Items in the data store.
     */
    public final function getItems(): iterable
    {
        return self::$items;
    }

    /**
     * Initializes the data store.
     * 
     * @return iterable The items for the data store.
     */
    protected abstract function init(): iterable;
}
