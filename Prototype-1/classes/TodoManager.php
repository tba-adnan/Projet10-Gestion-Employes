<?php
    class TodoManager {
        private $_dataArray,
        $_dataArrayJson,
        $_dataName;
        public function __construct($dataName = false) {
            if ($dataName) {
                $this->_dataName = 'saves/' . $dataName;
            } else {
                $this->_dataName = "saves/data.json";
            }
        }

        private function getTodoArray(){
            $this->_dataArrayJson= file_get_contents($this->_dataName);
            // $handel = fopen($this->_dataName, "r");
            // $this->_dataArrayJson = fread($handel, filesize ($this->_dataName));
            $this->_dataArray = json_decode($this->_dataArrayJson, true);
            // fclose($handel);
        }

        

        public function insertItem($newItem){
            self::getTodoArray();
            array_push($this->_dataArray, $newItem);
            $this->_dataArrayJson = json_encode($this->_dataArray);
            file_put_contents($this->_dataName, $this->_dataArrayJson);
            self::getTodoArray();
        }


        public function getAllItems(){
            self::getTodoArray();
            $arrayCount = count($this->_dataArray);
            
            
            for($i=0; $i< $arrayCount; $i++){
                $newi = $i;
                echo '<div> Title: ' . $this->_dataArray[$i]['title'] .
                 ' description: ' . $this->_dataArray[$i]['description']
                 . ' <a href=/edit.php?id='.$this->_dataArray[$i]['id'].'>Edit</a>' 
                 . ' <a href=delete.php?id='.$this->_dataArray[$i]['id'].'>Delete</a>' .'</div>';
            }
        }


        // Get item by id from file
        public function getItem($id){
            self::getTodoArray();
            $arrayCount = count($this->_dataArray);

            for($i=0; $i< $arrayCount; $i++){
                if($id === $this->_dataArray[$i]['id']){
                    return $this->_dataArray[$i];
                }
            }
        }

        // Update item 
        public function updateItem($item){
            self::getTodoArray();
            $arrayCount = count($this->_dataArray);

            for($i=0; $i< $arrayCount; $i++){
                if($item->id === $this->_dataArray[$i]['id']){
                    $this->_dataArray[$i]['title'] = $item->title;
                    $this->_dataArray[$i]['description'] = $item->description;
                    $this->_dataArrayJson = json_encode($this->_dataArray);
                    file_put_contents($this->_dataName, $this->_dataArrayJson);
                    self::getTodoArray();
                } 
            }
        }

        //Delete item 
        public function deleteItem($id){
            self::getTodoArray();
            $arrayCount = count($this->_dataArray);

            for($i=0; $i< $arrayCount; $i++){
                if($id === $this->_dataArray[$i]['id']){
                   unset( $this->_dataArray[$i]);
                    $this->_dataArrayJson = json_encode($this->_dataArray);
                    file_put_contents($this->_dataName, $this->_dataArrayJson);
                    self::getTodoArray();
                } 
            }
        } 
      }
?>