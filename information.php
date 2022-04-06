<?php
  include_once 'header.php';
?>


<h1>Follow the image slider to see the purpose of my <br></br> website: </h1>



<style> 
    .fadein { 
    position:relative; height:350px; width:450px; margin:0 auto;
    
    padding: 0px;

 }
.fadein img{
	position:absolute;
	width: calc(100%);
    height: calc(100%);
    object-fit: scale-down;
    }
</style>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script>
    $(function(){
        $('.fadein img:gt(0)').hide();
        setInterval(function(){$('.fadein :first-child').fadeOut().next('img').fadeIn().end().appendTo('.fadein');}, 7000);//Switches every 7 seconds
    });
</script>
<div class="fadein">
<?php 

$dir = "./infoslider/"; //The images from the folder infoslider will be used and formatted for the image slider.
 
$scan_dir = scandir($dir); 
    foreach($scan_dir as $img):
        if(in_array($img,array('.','..')))
        continue;
    ?>

    <img src="<?php echo $dir.$img ?>" alt="<?php echo $img ?>">
    <?php endforeach; ?>
</div>



               

       
        

       

