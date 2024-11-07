<section class="filemanager-container container">
    <h1>Filemanager</h1>
<?php 
foreach ($images as $image) {
 
    echo "
    <div class='filemanager__item'>
    <img src='$image' width='100px' height='100px'>
    <p><strong>Filename :</strong> $image</p>
    </div>
    
    
    
    
    ";
}
?>

</section>
