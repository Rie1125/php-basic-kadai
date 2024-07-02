<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>phpクラス課題</title>
</head>
<body>
  <p>
    <?php
    class Food{
      private $name;
      private $price;

      public function __construct(string $name, int $price) {
        $this->name = $name;
        $this->price = $price;
      }


      public function show_price(){
        return $this->price;
        // echo $this->price;
      }

    }

      
      //   private function __construct(string $name,int $price){
        //     $this->name = $name;
        //     $this->price = $price;
        // }
        // private function show_name(){
          //   echo $this->name . '<br>';
          // }
          
        $potato = new Food("potato",250);
  
        $potato->show_price();
  
        print_r($potato);

        echo '<br>';

        
        
        class Animal{
          private $name;
          private $height;
          private $weight;
          
          public function __construct(string $name, int $height, int $weight) {
            $this->name = $name;
            $this->height = $height;
            $this->weight = $weight;
          }
          
          public function show_height(){
            return $this->height;
          }
          
          
        }
        
        $dog = new Animal("dog",60,5000);
        $dog->show_height();
        print_r($dog);
        
        echo '<br>';
        echo $potato->show_price();
        echo '<br>';
        echo $dog->show_height();
    
    ?>
  </p>

  
</body>
</html>