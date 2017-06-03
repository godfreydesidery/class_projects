<?php
/**
 * Created by PhpStorm.
 * User: Godfrey
 * Date: 6/3/2017
 * Time: 10:54 PM
 */
$message='';
if(isset($_SESSION['page_found'])){
    if($_SESSION['page_found']==false){
        $message='The requested resource could not be found...';
        $_SESSION['page_found']==true;
    }
}else{
    $message='Unknown error!';
}
?>
<?php echo("

<div class='row-fluid'>
    <div class='span12'>
        <div class='well'><span class='icon-exclamation-sign'></span><label class='badge'>$message</label></div>
    </div>
</div>

");
?>
