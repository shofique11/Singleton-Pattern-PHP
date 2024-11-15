# Singleton-Pattern-PHP
The singleton pattern is a design pattern that ensures a class has only one instance throughout the application's life cycle. and provides a global access point to that instance. This pattern is commonly used when we need to restrict object creation to one instanc.
Example database connection, Configuration settings and Logging machanisms.

# Key Features of Singleton:
1. Single Instance: Ensures that only one instance of the exist class
2. Global access: Provide a single point of access to the instance
3. lazy initialization: The instance is created only when it is needed, not at the start of the programm.

# Implementing the singleton pattern in PHP
1. Private Constructor: We have to making a constructor private so that no other class directly instantiates it.
2. Static method: Creating a static method to access the instance.
3. Prevention of Cloning and Serialization: Prevents creating new instances through cloning or unserialization.
4. Storing the instance in a private, static property.