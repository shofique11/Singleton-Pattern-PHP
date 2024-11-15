<?php
class Singleton{
    // Static property to hold the single instance of the class
    private static? Singleton $instance = null;
    // Private constructor to prevent direct instantiation
    private function __construct()
    {
        echo "Singleton constructor and instance created \n";
    }
    // Private cloning of the instance
    private function __clone(){}
    // Prevent unserialization of the instance
    public function __wakeup()
    {
        throw new Exception("Cannot unserialize a Singleton.");
    }
    // Static method to get the instance of the class
    public static function getInstance()
    {
        if(self::$instance === null){
            self::$instance = new Singleton();
        }
        return self::$instance;
    }
    public function sayHello(){
        echo "Hello from singletons! \n";
    }
}

$singletone1 = Singleton::getInstance();
$singletone1->sayHello();
$singletone2 = Singleton::getInstance();
$singletone2->sayHello();
if($singletone1 === $singletone2){
    echo "Both instance are same instance \n";
}
?>