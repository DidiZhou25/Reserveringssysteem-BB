<?php
//Check if Post isset, else do nothing
if (isset($_POST['submit'])) {
    //Require database in this file & image helpers
    require_once "includes/database.php";

    //Postback with the data showed to the user, first retrieve data from 'Super global'
    $artist = mysqli_real_escape_string($db, $_POST['artist']);
    $name   = mysqli_escape_string($db, $_POST['name']);
    $genre  = mysqli_escape_string($db, $_POST['genre']);
    $year   = mysqli_escape_string($db, $_POST['year']);
    $tracks = mysqli_escape_string($db, $_POST['tracks']);
    //Require the form validation handling
    require_once "includes/form-validation.php";
    //Special check for add form only
    if ($_FILES['image']['error'] == 4) {
        $errors[] = 'Image cannot be empty';
    }
    if (empty($errors)) {
        //Store image & retrieve name for database saving
        $image = addImageFile($_FILES['image']);
        //Save the record to the database
        $query = "INSERT INTO albums (name, artist, genre, year, tracks, image)
                  VALUES ('$name', '$artist', '$genre', $year, $tracks, '$image')";
        $result = mysqli_query($db, $query)
            or die('Error: '.$query);
        if ($result) {
            header('Location: index.php');
            exit;
        } else {
            $errors[] = 'Something went wrong in your database query: ' . mysqli_error($db);
        }
        //Close connection
        mysqli_close($db);
    }
}

?>
