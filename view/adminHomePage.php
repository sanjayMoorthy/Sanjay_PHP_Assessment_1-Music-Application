<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin Home page</title>
</head>
<body>
    <h2>Admin panel</h2>
    <div class="searchdiv">
        <form action="/search" method="POST">
            <input type="search" name="Details" placeholder="Eg: new">
            <button type="submit">search</button>
        </form>
    </div>

    <div class="artistsUploding">
        <form action="/artistsUplodpage" method="POST">
            <button name="artistsUplod_btn">artist upload</button>
        </form>
    </div>

    <div class="songUploding">
        <form action="/songupload" method="POST">
            <button name="song_uplode_btn">song upload</button>
        </form>
    </div>

    <!-- <div class="searchdetails">
        <?php foreach ($searchdetails  as $searchList):?>
            <ul>
                <li><?php echo $searchList-> song_name ?></li>
            </ul>
        <?php endforeach; ?>   
    </div> -->
</body>
</head>
</html>