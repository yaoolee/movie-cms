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
  lang,
  director
) VALUES (
  "'.mysqli_real_escape_string( $connect, $_POST['title'] ).'",
  "'.mysqli_real_escape_string( $connect, $_POST['runtime'] ).'",
  "'.mysqli_real_escape_string( $connect, $_POST['release_date'] ).'",
  "'.mysqli_real_escape_string( $connect, $_POST['type'] ).'",
  "'.mysqli_real_escape_string( $connect, $_POST['lang'] ).'",
  "'.mysqli_real_escape_string( $connect, $_POST['director'] ).'"
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
  <textarea type="number" name="runtime" id="runtime" rows="10"></textarea>
      
  
  <br>
  
  <label for="lang">Language:</label>
  <input type="text" name="lang" id="lang">
  
  <br>
  
  <label for="release_date">Release Date:</label>
  <input type="date" name="release_date" id="release_date">
  
  <br>
  
  <label for="type">Type:</label>
  <?php
  
  $values = array( 'real', 'animate' );
  
  echo '<select name="type" id="type">';
  foreach( $values as $key => $value )
  {
    echo '<option value="'.$value.'"';
    echo '>'.$value.'</option>';
  }
  echo '</select>';
  
  ?>
  
  <br>

  <label for="director">Director:</label>
  <input type="text" name="director" id="director" required>


  
  <input type="submit" value="Add Movie">
  
</form>

<p><a href="projects.php"><i class="fas fa-arrow-circle-left"></i> Return to Movie List</a></p>


<?php

include( 'includes/footer.php' );

?>