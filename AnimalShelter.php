<?php
class AnimalShelter {
    /**
     * Constants of possible errors
     */
    const ERROR_UNDEFINED_ANIMAL_TYPE = 1;
    const ERROR_ALLOW_ANIMAL_TYPES_NOT_DEFINED = 2;

    /**
     * Constants of animal`s types
     */
    const ANIMAL_TYPE_CAT = 'Cat';
    const ANIMAL_TYPE_DOG = 'Dog';
    const ANIMAL_TYPE_TURTLE = 'Turtle';

    /**
     * @var array Types of animals that the shelter can take
     */
    protected $allowAnimalTypes = [];

    /**
     * @var array List of animals in the shelter
     */
    protected $animalsList = [];

    /**
     * Take an animal to the shelter
     * @param $animalType string
     * @param $name string New name of adopted animal
     * @param $age integer Identified age of adopted animal
     * @throws Exception If the shelter can`t take given animal`s type
     */
    protected function takeAnimal($animalType, $name, $age){
        if(array_search($animalType, $this->allowAnimalTypes) !== false){
            $newAnimal = new $animalType($name, $age);
            $this->animalsList[] = $newAnimal;
        }else{
            throw new Exception(self::ERROR_UNDEFINED_ANIMAL_TYPE);
        }
    }

    /**
     * Give an animal out of the shelter (with/without indication animal`s type)
     * @param $animalType string Type of animal that you want get;
     * @return Animal
     */
    protected function giveAnimal($animalType = null){
        if(empty($this->animalsList))
            return null;

        if($animalType) {
            foreach ($this->animalsList as $key => $animal) {
                if ($animal instanceof $animalType) {
                    return $this->popAnimalByIndex($key);
                }
            }
        }
        else{
            return $this->popAnimalByIndex(key($this->animalsList));
        }

        return null;
    }

    /**
     * Get animals`s list with indication animal`s type
     * @param $animalType string Type of animal that you want get;
     * @return Animal[]
     */
    protected function getAssortedAnimalsList($animalType){

        $animalListOfIndicatedType = array_filter($this->animalsList, function ($animal) use($animalType){
            return $animal instanceof $animalType;
        });

        uasort($animalListOfIndicatedType, function($animal1, $animal2){
            /** @var $animal1 Animal
             *  @var $animal2 Animal
             */
            $compare = strcmp($animal1->getName(), $animal2->getName());

            if( $compare !== 0 )
                return ($compare > 0) ? 1 : -1;
            return 0;
        });

        return $animalListOfIndicatedType;
    }

    /**
     * Give an animal out of the shelter by index
     * @param $index integer index of returned animal
     * @return Animal
     */
    protected function popAnimalByIndex($index){
        if(!is_integer($index))
            return NULL;

        $givenAnimal = $this->animalsList[$index];
        array_splice($this->animalsList, $index, 1);
        return $givenAnimal;
    }
}