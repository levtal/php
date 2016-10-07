<!---  https://www.youtube.com/watch?v=Ou1kHmODImw&list=PL21E20F9A122DC853&index=10
    Object Oriented Programming with PHP. 

    Encapsulation
    Classes
    Objects
    Public
    Private
    Constructors
    Destructors
    __set
    __get
-->
 <html>
<head>
          <title><?php echo "Object Oriented Programming";?></title>
</head>

<body>

<?php
# Encapsulation = hide the code behind an interface so you can protect the code
# and so your user need not understand the code to use it
#  class = blueprint you use to create objects
# Objects contain the data (attributes) and actions (methods) needed to perform its tasks
# Inheritance is done when you create a new class from another, thus borrowing the data
# and methods that can be found there.
# Polymorphism allows a class to perform differently based on how it is being used.
# Polymorphism can be used to a certain extent with PHP in that you can use common
# method and attribute names for similar classes

# Any use of this is a reference to a specific object and that objects attributes and methods

class Animal
{
 public $name; # Public variables can be accessed directly by anyone
 private $age; # Private variables are   accessed by class methods, not subclasses
 protected $money; # Protected is like private except can be accessed by inherited classes
 const POUNDID = 12345; # A constants value can never change
  # A static attributes value is shared by all objects of the class
  # You refer to static attribute like this self::$numOfAnimals, not with $this
 private static $numOfAnimals = 0;

 public function __construct($age) {
    echo "__construct was called". "<br />";
    $this->setAge($age);
 }

 public function __destruct() {
    echo "__destruct was called". "<br />";
 }

# __set can be used to perform error checking before assigning values to private attribs
 function __set($attribName, $attribValue) {
    echo "__set was called for ". $attribName. "<br />";
   $this->$attribName = $attribValue;
 }

# __get can be used to perform error checking before returning values from private attribs
 function __get($attribName) {
    echo "__get was called for ". $attribName. "<br />";
    return $this->$attribName;
 }

 public function getAge() {
    return $this->age;
 }

 public function setAge($sentAge) {
    $this->age = $sentAge;
 }
}

$dog = new Animal(8); # Create an object dog of class Animal
$dog->name = "Grover"; # Assign a value to the public attribute name
$dogName = $dog->name; # Retreive value from public attribute name

$dog->setAge(8); # Call the setAge() method for the dog object

$dog->age = 9; # Try to set a private attribute that makes a call to __set
echo $dog->age. "<br />"; # Try to get a private attribute that makes a call to __get

echo "The dogs name is " . $dogName . "<br />";
echo "The dogs age is " . $dog->getAge() . "<br />";
echo "The pounds ID number is ". $dog::POUNDID. "<br />";

?>

</body>
</html>