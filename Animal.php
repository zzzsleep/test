<?php
/**
 * Animal Class
 */
class Animal {
    /**
     * @var string $name The name of the animal is set only once
     */
    protected $name;

    /**
     * @var integer $age The age of the animal is set only once
     */
    protected $age;

    /**
     * Animal constructor.
     * @param $name Animal`s name
     * @param $age Animal`s age
     */
    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    /**
     * Get animal`s name
     * @return Animal|string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Get animal`s age
     * @return Animal|string
     */
    public function getAge()
    {
        return $this->age;
    }
}