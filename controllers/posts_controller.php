

<?php
require_once('base_controller.php');
require_once('models/post.php');
class PostsController extends BaseController
{
  private $postModels;

  function __construct()
  {
    $this->folder = 'posts';
  }


  public function index()
  {
    
    $posts = Post::all();
    $data = array('posts' => $posts);
    $this->render('index', $data);
  }
  public function showPost()
  {
    $post = Post::find($_GET['id']);
    $data = array('post' => $post);
    $this->render('show', $data);
  
  }
  public function edit()
  {
    $post = Post::find($_GET['id']);
    $data = array('post' => $post);
    $this->render('edit', $data);
  
  }
 
  function insert(){
    include "views/posts/insert.php";
   
  }
  function store(){
    
    if(isset($_POST['submitth'])){
      $post = Post::insert($_POST['title'],$_POST['content']);

    }
    header('Location:http://localhost/demo_mvc/index.php?controller=posts');
    exit();
  } 
  function delete(){
    $id = 0;
    if(isset($_GET['id'])  && $_GET['id'] != '' && $_GET['id']>0) {
      $id = $_GET['id'];
      $post = Post::delete($id);   
    }
    header('Location:http://localhost/demo_mvc/index.php?controller=posts');
    exit();  
  }
  function editt(){
    include "views/posts/edit.php";
   
  }
function updated(){
    
  if(isset($_POST['submit'])){
    $post = Post::update($_POST['id'],$_POST['title'],$_POST['content']);
  }
  header('Location:http://localhost/demo_mvc/index.php?controller=posts');
  exit();
}
}


