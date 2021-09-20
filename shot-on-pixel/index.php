<html>
    <head>
        <title>Shot on Pixel Wallpapers</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://pixel-fy.com/style.css">
    </head>

    <body>
        <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="/">Home</a>
            <a href="/pixel-5/">Pixel 5</a>
            <a href="/pixel-4a/">Pixel 4a</a>
            <a href="/pixel-4/">Pixel 4</a>
            <a href="/shot-on-pixel/">Shot on Pixel</a>
            <a href="/arts-and-culture/">Arts and culture</a>
            <a href="https://pixel-fy.com/">Pixel-fy</a>
          </div>
        <div class="nav">
            <a onclick="openNav()">Menu</a>
        </div>
        <header>
            <h1>Pixel-fy Wallpapers</h1>
            <p>Shot on Pixel wallpapers</p>
        </header>
        <div class="main">
              <?php
$imagesDirectory = "imgs/";
 
if(is_dir($imagesDirectory))
{
	$opendirectory = opendir($imagesDirectory);
  
    while (($image = readdir($opendirectory)) !== false)
	{
		if(($image == '.') || ($image == '..'))
		{
			continue;
		}
		
		$imgFileType = pathinfo($image,PATHINFO_EXTENSION);
		
		if(($imgFileType == 'jpg') || ($imgFileType == 'png'))
		{
			echo "<a href='imgs/".$image."' download><img src='imgs/".$image."' width='200'></a> ";
		}
    }
	
    closedir($opendirectory);
 
}
?>
        </div>
        <script src="https://pixel-fy.com/nav.js"></script>

    </body>
</html>