<?php
class MyAnimalShelter extends AnimalShelter {
    /**
     * @var array Animal`s type that the MyAnimalShelter can take
     */
    protected $allowAnimalTypes = [
        self::ANIMAL_TYPE_CAT,
        self::ANIMAL_TYPE_DOG,
        self::ANIMAL_TYPE_TURTLE
    ];

    /**
     * Take a cat to the shelter
     * @param $name string cat`s name
     * @param $age integer cat`s age
     */
    public function takeCat($name, $age)
    {
        $this->takeAnimal(self::ANIMAL_TYPE_CAT, $name, $age);
    }

    /**
     * Take a dog to the shelter
     * @param $name string dog`s name
     * @param $age integer dog`s age
     */
    public function takeDog($name, $age)
    {
        $this->takeAnimal(self::ANIMAL_TYPE_DOG, $name, $age);
    }

    /**
     * Take a turtle to the shelter
     * @param $name string turtle`s name
     * @param $age integer turtle`s age
     */
    public function takeTurtle($name, $age)
    {
        $this->takeAnimal(self::ANIMAL_TYPE_TURTLE, $name, $age);
    }

    /**
     * Give the cat out of the shelter
     * @return Animal
     */
    public function giveCat()
    {
        return $this->giveAnimal(self::ANIMAL_TYPE_CAT);
    }

    /**
     * Give the dog out of the shelter
     * @return Animal
     */
    public function giveDog()
    {
        return $this->giveAnimal(self::ANIMAL_TYPE_DOG);
    }

    /**
     * Give the turtle out of the shelter
     * @return Animal
     */
    public function giveTurtle()
    {
        return $this->giveAnimal(self::ANIMAL_TYPE_TURTLE);
    }

    /**
     * Give the any animal out of the shelter
     * @return Animal
     */
    public function giveAnyAnimal()
    {
        return $this->giveAnimal();
    }

    /**
     * Get cat`s list
     * @return Animal[]
     */
    public function getCatList()
    {
        return $this->getAssortedAnimalsList(self::ANIMAL_TYPE_CAT);
    }

    /**
     * Get dog`s list
     * @return Animal[]
     */
    public function getDogList()
    {
        return $this->getAssortedAnimalsList(self::ANIMAL_TYPE_DOG);
    }

    /**
     * Get turtle`s list
     * @return Animal[]
     */
    public function getTurtleList()
    {
        return $this->getAssortedAnimalsList(self::ANIMAL_TYPE_TURTLE);
    }
}