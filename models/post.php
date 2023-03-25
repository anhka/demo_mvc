

<?php
class Post
{
  public $id;
  public $title;
  public $content;

  function __construct($id, $title, $content)
  {
    $this->id = $id;
    $this->title = $title;
    $this->content = $content;
  }

  static function all()
  {
    $list = [];
    $db = DB::getInstance();
    $req = $db->query('SELECT * FROM posts');

    foreach ($req->fetchAll() as $item) {
      $list[] = new Post($item['id'], $item['title'], $item['content']);
    }

    return $list;
  }
  static function find($id)
  {
    $db = DB::getInstance();
    $req = $db->prepare('SELECT * FROM posts WHERE id = :id');
    $req->execute(array('id' => $id));

    $item = $req->fetch();
    if (isset($item['id'])) {
      return new Post($item['id'], $item['title'], $item['content']);
    }
    return null;
  }

  public static function delete($id){
    // $query = "delete from posts where id = ". $id;
    $db = DB::getInstance();
    $req = $db->prepare('delete  FROM posts WHERE id = :id');
    $req->execute(array('id' => $id));

  }
  public static function insert($title, $content=null) {
   
    $db = DB::getInstance();
    $req = $db->prepare('INSERT INTO posts( title,content) VALUES ( :title, :content)');
    $req->execute(array('title' => $title, 'content' => $content ));
  }
  public static function update($id, $title, $content=null ){
    $db = DB::getInstance();
    $req = $db->prepare('UPDATE `posts` SET `id`= :id ,`title`= :title ,`content`= :content WHERE id= :id ');
    $req->execute(array('id' => $id, 'title' => $title, 'content' => $content ));
  }

}
