<?php
  class Post {

    public $id;
    public $title;
    public $content;
    public $date;

    public function __construct($id, $title, $content, $date) {
      $this->id    = $id;
      $this->title  = $title;
      $this->content = $content;
      $this->date = $date;
    }
    
    public static function all() {

      $conn = new mysqli(servername, username, password, dbname);

      
      if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
      }

      $stmt = $conn->prepare("Select id,title,content,date from Post");
      $stmt->execute();
      $result = $stmt->get_result();

      while($row = $result->fetch_row()) {
        $arr[]=array('id'=>$row['0'], 'title'=>$row['1'], 'content'=>$row['2'], 'date'=>$row['3']);
      }
      $stmt->close();
      $conn->close();

      return $arr;
    }


    public static function update($id) {

    }
    
    public static function add() {

      $title   = $_POST['title'];
      $content = $_POST['content'];
      $date    = $_POST['date'];
      $date = date("Y-d-m", strtotime($date));

      $conn = new mysqli(servername, username, password, dbname);
   
      $stmt = $conn->prepare("INSERT INTO Post (title, content, date) VALUES (?, ?, ?)");
      $stmt->bind_param("sss", $title, $content, $date);
      $stmt->execute();

      $stmt->close();
      $conn->close();
    }



    public static function remove($id) {

   }
  
}
?>