<?php

include( 'includes/database.php' );
include( 'includes/config.php' );
include( 'includes/functions.php' );

secure();

if( isset( $_POST['title'] ) )
{
  
  if( $_POST['title'] and $_POST['runtime'] )
  {
    
    $query = 'INSERT INTO movies (
        title,
        runtime,
        release_date,
        type,
        lang
      ) VALUES (
         "'.mysqli_real_escape_string( $connect, $_POST['title'] ).'",
         "'.mysqli_real_escape_string( $connect, $_POST['runtime'] ).'",
         "'.mysqli_real_escape_string( $connect, $_POST['release_date'] ).'",
         "'.mysqli_real_escape_string( $connect, $_POST['type'] ).'",
         "'.mysqli_real_escape_string( $connect, $_POST['lang'] ).'"
      )';
    mysqli_query( $connect, $query );
    
    set_message( 'Movie has been added' );
    
  }
  
  header( 'Location: projects.php' );
  die();
  
}

include( 'includes/header.php' );

?>

<h2>Add Movie</h2>

<form method="post">
  
  <label for="title">Title:</label>
  <input type="text" name="title" id="title">
    
  <br>
  
  <label for="runtime">Run Time:</label>
  <textarea type="text" name="runtime" id="runtime" rows="10"></textarea>
      
  <script>

  ClassicEditor
    .create( document.querySelector( '#runtime' ) )
    .then( editor => {
        console.log( editor );
    } )
    .catch( error => {
        console.error( error );
    } );
    
  </script>
  
  <br>
  
  <label for="lang">Language:</label>
  <input type="text" name="lang" id="lang">
  
  <br>
  
  <label for="releasedate">Release Date:</label>
  <input type="releasedate" name="releasedate" id="releasedate">
  
  <br>
  
  <label for="type">Type:</label>
  <?php
  
  $values = array( 'Ride Along 2', 'The Boss Baby' );
  
  echo '<select name="type" id="type">';
  foreach( $values as $key => $value )
  {
    echo '<option value="'.$value.'"';
    echo '>'.$value.'</option>';
  }
  echo '</select>';
  
  ?>
  
  <br>
  
  <input type="submit" value="Add Movie">
  
</form>

<p><a href="projects.php"><i class="fas fa-arrow-circle-left"></i> Return to Movie List</a></p>


<?php

include( 'includes/footer.php' );

?>