<!DOCTYPE html>
<html lang="en">
<head>
    <title>uplodePage</title>
</head>
<body>
    <div class="container">
        <form action="/uplodingSong" method="POST" enctype="multipart/form-data">
            <h3>song Name</h3>
            <input type="text" name="songName">

            <h3>song image</h3>
            <input type="file" name="songImage">

            <h3>song</h3>
            <input type="file" name="song">

            <h3>song description</h3>
            <input type="text" name="des">

            <button type="submit">submit</button>
        </form>
    </div>
</body>
</html>