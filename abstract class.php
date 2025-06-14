<?php  
abstract class BaseClass {  
    abstract public function performAction($param1, $param2);  
    public function greet() {  
        echo "Hello";  
    }  
}  
class DerivedClass extends BaseClass {  
    public function performAction($param1, $param2) {  
        // Just a dummy implementation  
        echo "Action performed with $param1 and $param2";  
    }  
    public function showMessage() {  
        echo "World";  
    }  
}  
$instance = new DerivedClass();  
$instance->greet(); // Output: Hello  
?>  
