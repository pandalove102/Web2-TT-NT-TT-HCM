<?php
if(isset($_GET['id']) && $_GET['id'])
{
    $id=$_GET['id'];
    $sql="DELETE FROM posts WHERE id=$id";
    $sth = $pdo->prepare( $sql );
    $sth->execute(array($id));
    header('Location: http://localhost/web2/admin2.php?page=tintucsukien');
}
    

?>