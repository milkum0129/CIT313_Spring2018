<?php
class Comments extends Model{

   public $uID;
   public $commentText;
   public $date;
   public $postID;

    public function addComment($data){

        $sql='INSERT INTO comments (uID,commentText,date,postID) VALUES (?,?,?,?)';
        $this->db->execute($sql,$data);
        $message = 'Comment added.';
        return $message;

    }

    public function deleteComment($data) {

        $sql = 'DELETE from comments WHERE commentID = ?';
        $this->db->execute($sql, $data);
        $message = "Comment deleted.";
        return $message;
    }
}

?>