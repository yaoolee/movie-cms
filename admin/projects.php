<?php

include( 'includes/database.php' );
include( 'includes/config.php' );
include( 'includes/functions.php' );

secure();

// Delete movie logic
if( isset( $_GET['delete'] ) ) {
  $query = 'DELETE FROM movies WHERE id = '.$_GET['delete'].' LIMIT 1';
  mysqli_query( $connect, $query );
  set_message( 'Movie has been deleted' );
  header( 'Location: projects.php' );
  die();
}

include( 'includes/header.php' );

// Fetch movie records
$query = 'SELECT * FROM movies ORDER BY release_date DESC';
$result = mysqli_query( $connect, $query );

?>

<h2>Manage Movies</h2>

<table>
  <tr>
    <th align="center">ID</th>
    <th align="left">Title</th>
    <th align="center">Type</th>
    <th align="center">Release Date</th>
    <th></th>
    <th></th>
  </tr>
  <?php while( $record = mysqli_fetch_assoc( $result ) ): ?>
    <tr>
      <td align="center"><?php echo $record['id']; ?></td>
      <td align="left">
        <?php echo htmlentities( $record['title'] ); ?>
        <small><?php echo $record['runtime']; ?></small>
      </td>
      <td align="center"><?php echo $record['type']; ?></td>
      <td align="center" style="white-space: nowrap;"><?php echo htmlentities( $record['release_date'] ); ?></td>
      <td align="center"><a href="projects_edit.php?id=<?php echo $record['id']; ?>">Edit</a></td>
      <td align="center">
        <a href="projects.php?delete=<?php echo $record['id']; ?>" onclick="return confirm('Are you sure you want to delete this movie?');">Delete</a>
      </td>
    </tr>
  <?php endwhile; ?>
</table>

<p><a href="projects_add.php"><i class="fas fa-plus-square"></i> Add Movie</a></p>

<?php include( 'includes/footer.php' ); ?>

