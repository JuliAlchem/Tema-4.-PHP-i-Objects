<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <?php
        
        echo '<h1>Nivell 1</h1>';
        echo '<h3>- Exercici 1</h3>';
        echo '<p>Crea una classe Employee defineix com a atributs el seu nom i sou. 
        Definir un mètode initialize que rebi com a paràmetres el nom i sou. 
        Plantejar un segon mètode print que imprimeixi el nom i un missatge si ha o no pagar impostos 
        (si el sou supera 6000 paga impostos).</p>';
        
        class Employee {
            public $name;
            public $salary;

            public function initialize($name,$salary) {
                $this->name = $name;
                $this->salary = $salary;
                
            }
            public function print() {
                echo 'Nombre: '.$this->name.'<br/>';
                
                if ($this->salary<6000) {
                    return 'No hay impuestos';
                } else {
                    return 'Hay impuestos';
                }
            }
        }
            $person = new Employee;

            echo $person->initialize('Mark', 7400);
            
            echo $person->print();

        echo '<h3>- Exercici 2</h3>';
        echo '<p> 
        Escriu un programa que defineixi una classe Shape amb un constructor que rebi com a paràmetres l\'ample i alt. 
        Defineix dues subclasses; Triangle i Rectangle que heretin de Shape 
        i que calculin respectivament l\'àrea de la forma area().</p>

        <p>A l\'arxiu main defineixi dos objectes, un triangle i un rectangle i truca al mètode area de cadascun.</p>';
        

       class Shape {
           public $width;
           public $high;

           public function __construct($width, $high){
                $this->width = $width;
                $this->high = $high;
           }
       }
       
       class Rectangle extends Shape {
        public function area(){
             return $this->width*$this->high;
            }
        }

        $rec = new Rectangle(7,3);
        echo 'Area rectangle: '.$rec->area();
       
        echo '<br/>';
       
        class Triangle extends Shape {
            public function area(){
                return ($this->width*$this->high)/2;
            }
        }
        
        $tri = new Triangle(2,5);
        echo 'Area triangle: '. $tri->area();
        
    ?>
</body>
</html>