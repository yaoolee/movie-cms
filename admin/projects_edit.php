<?php

include( 'includes/database.php' );
include( 'includes/config.php' );
include( 'includes/functions.php' );

secure();

if( !isset( $_GET['id'] ) )
{
  
  header( 'Location: projects.php' );
  die();
  
}

if( isset( $_POST['title'] ) )
{
  
  if( $_POST['title'] and $_POST['runtime'] )
  {
    
    $query = 'UPDATE movies SET
      title = "'.mysqli_real_escape_string( $connect, $_POST['title'] ).'",
      runtime = "'.mysqli_real_escape_string( $connect, $_POST['runtime'] ).'",
      release_date = "'.mysqli_real_escape_string( $connect, $_POST['release_date'] ).'",
      type = "'.mysqli_real_escape_string( $connect, $_POST['type'] ).'",
      lang = "'.mysqli_real_escape_string( $connect, $_POST['lang'] ).'"
      WHERE id = '.$_GET['id'].'
      LIMIT 1';
    mysqli_query( $connect, $query );
    
    set_message( 'Movie has been updated' );
    
  }

  header( 'Location: projects.php' );
  die();
  
}


if( isset( $_GET['id'] ) )
{
  
  $query = 'SELECT *
    FROM movies
    WHERE id = '.$_GET['id'].'
    LIMIT 1';
  $result = mysqli_query( $connect, $query );
  
  if( !mysqli_num_rows( $result ) )
  {
    
    header( 'Location: projects.php' );
    die();
    
  }
  
  $record = mysqli_fetch_assoc( $result );
  
}

include( 'includes/header.php' );

?>

<h2>Edit Movie</h2>

<form method="post">
  
  <label for="title">Title:</label>
  <input type="text" name="title" id="title" value="<?php echo htmlentities( $record['title'] ); ?>">
    
  <br>
  
  <label for="runtime">Run Time:</label>
  <textarea type="text" name="runtime" id="runtime" rows="5"><?php echo htmlentities( $record['runtime'] ); ?></textarea>
  
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
  <input type="text" name="lang" id="lang" value="<?php echo htmlentities( $record['lang'] ); ?>">
    
  <br>
  
  <label for="release_date">Release Date:</label>
  <input type="date" name="release_date" id="release_date" value="<?php echo htmlentities( $record['release_date'] ); ?>">
    
  <br>
  
  <label for="type">Type:</label>
  <?php
  
  $values = array( 'real', 'animated');
  
  echo '<select name="type" id="type">';
  foreach( $values as $key => $value )
  {
    echo '<option value="'.$value.'"';
    if( $value == $record['type'] ) echo ' selected="selected"';
    echo '>'.$value.'</option>';
  }
  echo '</select>';
  
  ?>
  
  <br>
  
  <input type="submit" value="Edit Movie">
  
</form>

<p><a href="projects.php"><i class="fas fa-arrow-circle-left"></i> Return to Movie List</a></p>


<?php

include( 'includes/footer.php' );

?>