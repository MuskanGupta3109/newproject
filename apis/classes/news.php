<?php
class News
{
    private $con;
    public function __construct()
    {
        require_once dirname(__FILE__) . "/includes/DbConnect.php";
        $db = new DbConnect();
        $this->con = $db->connect();
    }
    public function addnews($post,$image)
    {
        $imagename = uniqid() . $image['name'];
        
            $sql ="INSERT INTO `news`(`title`,`category_id`,`description`,`image`) VALUES('$post[title]','$post[category_id]','$post[description]','$imagename');";
        $result = mysqli_query($this->con, $sql);
        
        if ($result) {
            $data= move_uploaded_file($image['tmp_name'], '../assets/img/' . $imagename);
            if($data)
            echo 'file moved   ';
            else
                echo 'failed to move file';
            return true;
        }
     
     

        
    else
        return false;
        // return $poststatus>0;
    }
    public function getAllnews()
    {
        $sql = "SELECT * FROM news";
        return mysqli_query($this->con, $sql);
   
    }
    public function getAllcategory()
    {
        $sql = "SELECT * FROM categories";
        return mysqli_query($this->con, $sql);
   
    }
    public function getrecentnews()
    {
        $sql = "SELECT * FROM news ORDER BY createdAt DESC LIMIT 5 ";
        return mysqli_query($this->con, $sql);
   
    }
    public function getrecenttitle()
    {
        $sql = "SELECT  title FROM news ORDER BY createdAt DESC LIMIT 5 ";
        return mysqli_query($this->con, $sql);
   
    }
    
    public function getnewsbyid($news_id){
        $sql = "SELECT * FROM `news` WHERE news_id='$news_id'";
        return mysqli_query($this->con, $sql);
    }
    public function getnewsbycategoryid($news_id){
        
        $sql = "SELECT * FROM `news` WHERE news_id='$news_id'";
        return mysqli_query($this->con, $sql);
    }
    public function addcategories($post){
     
        $sql ="INSERT INTO `categories`(`cat_name`) VALUES('$post[cat_name]');";
        $result = mysqli_query($this->con, $sql);
        if ($result) {
           return true;
        }
        
    }
    public function getAllcategorieswithoutlimit()
    {
        $sql = "SELECT * FROM `categories` ORDER BY createdAt DESC";
       return mysqli_query($this->con, $sql);
       
    }
    public function getAllcategories()
    {
        $sql = "SELECT * FROM `categories` ORDER BY createdAt DESC LIMIT 3";
       return mysqli_query($this->con, $sql);
       
    }
    public function getAllrecentusedcategories($category_id)
    {
        $sql = "SELECT * FROM `categories` WHERE category_id='$category_id' ORDER BY createdAt DESC LIMIT 5";
       return mysqli_query($this->con, $sql);
       
    }
    public function getcategoriesbyid($category_id){
        
        $sql = "SELECT * FROM `categories` WHERE category_id='$category_id'";
        return mysqli_query($this->con, $sql);
        
    }
    public function getcategoriesbyname($cat_name){
        $sql = "SELECT * FROM `categories` WHERE cat_name='$cat_name' ORDER BY createdAt DESC LIMIT 5";
        return mysqli_query($this->con, $sql);
        
    }
    public function getnewsbycategoryname($category_id){
       
        $sql = "SELECT * FROM `news` WHERE category_id='$category_id' ORDER BY createdAt DESC LIMIT 5";
        return mysqli_query($this->con, $sql);
        
    }
    public function getallnewsbycategoryid($category_id){
       
        $sql = "SELECT * FROM `news` WHERE category_id='$category_id' ORDER BY createdAt DESC LIMIT 2";
        return mysqli_query($this->con, $sql);
        
    }
    function editnews($post,$image,$news_id)
    {
        if (!empty($image['name'])) {
            echo
            $sql = "UPDATE `news` set `title`='$post[title]',image='$image[name]',`description`='$post[description]',`category_id`='$post[category_id]' WHERE news_id=$news_id";
            $status = mysqli_query($this->con, $sql);
            if ($status > 0) {

                return move_uploaded_file($image['tmp_name'], "../assets/img/uploaded/" . 'image' . "/$image[name]");
                // return true;

            } else {
                echo "news not edited";
                return false;
            }
        } else {
            echo
            $sql = "UPDATE news set title='$post[title]',description='$post[description]',category_id='$post[category_id]' WHERE news_id=$news_id";
            $status = mysqli_query($this->con, $sql);
            if ($status > 0) {
                return true;
            } else {
                return false;
            }
        }
    }
    function deletenews($news_id)
    {
        $sql = "DELETE FROM `news` where news_id=$news_id";
        if (mysqli_query($this->con, $sql))
            return 1;

        return 0;
    }

    function editcategories($post,$category_id)
    {
       
        
            $sql = "UPDATE categories set cat_name='$post[cat_name]' WHERE category_id=$category_id";
            $status = mysqli_query($this->con, $sql);
            if($status > 0){
                return true;
            } else{
                return false;
            }
        
    }
    function deletecategories($category_id)
    {
        $sql = "DELETE FROM `categories` where category_id=$category_id";
        if (mysqli_query($this->con, $sql))
            return 1;

        return 0;
    }
    public function getAllUsers()
    {
        $sql = "SELECT * FROM users";
       return mysqli_query($this->con, $sql);
       
    }
    public function getUserCount(){
        if($result=mysqli_query($this->con, "SELECT * from users")){
            return mysqli_num_rows($result);
        }
        return false;
    }
    public function getAllnewsbycategoryWithPagination($category_id,$startLimit,$recordPerPage){
       
       
        $sql="SELECT * FROM `news` WHERE `category_id`=$category_id ORDER by `updatedat` DESC LIMIT $startLimit,$recordPerPage;";
        $result=mysqli_query($this->con,$sql);
        return $result;
    }
}
