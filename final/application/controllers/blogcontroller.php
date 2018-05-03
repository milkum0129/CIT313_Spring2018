<<?php
class BlogController extends Controller{
	
	public $postObject;
	public $commentsObject;
	public $deleteCom;
	public $commentID;
	
	public function index(){
		$this->postObject = new Post();
		$posts = $this->postObject->getAllPosts();
		$this->set('title', 'The Default Blog View');
		$this->set('posts',$posts);
	}
   	public function post($pID){
     $this->postObject = new Post();
		 $post = $this->postObject->getPost($pID);
	   $this->set('post',$post);
		 $this->commentsObject = new Comments();
		 $comments = $this->commentsObject->getComments($pID);
		 $this->set('comments', $comments);
   	}
	public function addComment() {
		$this->commentsObject = new Comments();
		$data = array('uID'=>$_POST['uID'],'commentText'=>$_POST['commentText'],'date'=>$_POST['date'], 'postID'=>$_POST['postID']);
		$result = $this->commentsObject->addComment($data);
		$this->set('message', $result);
		header("Location: " . BASE_URL . "blog/post/" . $_POST['postID']);
	}
	public function deleteComment() {
		$commentID = $_POST['commentID'];
		$this->commentsObject = new Comments();
		$deleteComment = $this->commentsObject->deleteComment($commentID);
		$this->set('deleteComment', $deleteComment);
		header("Location: " . BASE_URL . "blog/post/" . $_POST['postID']);
	}
	public function category($categoryID){
		$this->postObject = new Post();
		$posts = $this->postObject->getCatPosts($categoryID);
		$this->set('title', 'The Blog Category View');
		$this->set('posts',$posts);
		
	}
}
?>