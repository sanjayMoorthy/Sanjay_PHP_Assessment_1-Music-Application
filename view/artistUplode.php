<!DOCTYPE html>
<html lang="en">
<head>
    <title>artist uplodeing page</title>
</head>
<body>
    <div class="container">
        <form action="/uplodeArtist" method="POST" enctype="multipart/form-data">
            <h3>artist name</h3>
            <input type="text" name ='artistName'>
            <h3>artist image</h3>
            <input type="file" name="artistImage">
            <h3>artist description</h3>
            <input type="text" name="artistDescription">
            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>

