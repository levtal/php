<!--- https://www.youtube.com/watch?v=btpWky1JU24&list=PL21E20F9A122DC853&index=11Object Oriented Programming with PHP. 

    Inheritance
	Static Attributes (Variables)
	The _destruct Function
	The Final Keyword
	Overriding Functions
-->
<html>
<head>
              <title><?php echo "Object Oriented Programming";?></title>
</head>

<body>

<?php

# Inheritance is done when you create a new class from another, thus borrowing the data
# and methods that can be found there.

class Animal {
 private $name; # Private variables are only accessed by class methods, but not subclasses
 private $favFood = "meat";

 # A static attributes value is shared by all objects of the class
 # You refer to static attribute like this self::$numOfAnimals, not with $this
 public static $numOfAnimals = 0;

 # Constructor and Deconstructor
 public function __construct($name="No Name") {
	echo "__construct was called" . "<br />";
	
	$this->setName($name);
	self::$numOfAnimals++; # static
 }

 public function __destruct() {
	echo "__destruct was called". "<br />";
 }

 # Get and Set Methods – final is used to keep methods from being overwritten
 final public function getName(){
	return $this->name;
 }

 final public function setName($sentName){
	$this->age = $sentName;
 }

 # Animal Default Functions
 public function makeNoise(){
    echo "Grrrr". "<br />";
 }
 public function favFood(){
   echo "My favorite food is " . $this->favFood . "<br />";
 }
 public function move() {
   echo "Walk around". "<br />";
 }

}# -------  end of animal class

class Dog extends Animal
{
 # If I didn’t create a new constructor the parent would be called
 public function __construct($name="No Name") {
 parent::__construct($name); # How to call the parent constructor
  # Animal::__construct($name); this would also call the parent constructor
 }

 public function __destruct(){
   echo "__destruct was called". "<br />";
  }

# Dog Default Functions Overwrites Class Function
 public function makeNoise(){
  Animal::makeNoise(); # How to call the original class method
  echo “Bark, Bark”. "<br />";
 }
}// end of class dog ------

#function animalStuff(

$grover = new Dog("Grover"); # Create an object grover of class Dog
$paul = new Dog("Paul");
$grover->makeNoise(); # Call the makeNoise() method for the grover object
$grover->favFood();
$grover->move();

echo Animal::$numOfAnimals. "<br />"; # Prints out the number of objects created

?>

</body>
</html>