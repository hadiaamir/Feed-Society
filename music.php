<?php 

	include "header.php";
    include_once "function.php";
    
?>

	<section class="cat-header">

		<div class="cat-hed-txt">	

		      <a href="index.php">Home</a>
			<h4>> Music</h4>

		</div>

			<h1>Music</h1>
		
	</section>

	<section class="cat-dashboard">

		<a href="music-1.php" class="cat-box">

        <img src="Assets/Images/m1.jpg">

        <div class="cat-b1-txt">
            <h2>LATEST</h2>
            <br>
            <h3>TOPIC</32>
        </div>

    </a>

        <a href="music-2.php" class="cat-box">
            
             <img src="Assets/Images/m2.jpg">

            <div class="cat-b2-txt">
                <h2>OUR</h2>
                <br>
                <h3>PICKS</h3>
             </div>
            
        </a>

       <div id="box-3" class="cat-box">
          
          <div class="cat-b3-txt">
                
                <h1>Hot Songs</h1>
                
                 <ul>
                    <li>God's Plan - Drake</li>
                    <li>Perfect - Ed Sheeran</li>
                    <li>These Days - Macklemore</li>
                    <li>Barking - Ramz</li>
                    <li>River - Eminem</li>
                    <li>IDGAF - Dua Lipa</li>
                    <li>Havana - Camila Cabello</li>
                 </ul>

          </div>
          
        </div>
		
	</section>

    <section class="feed-header">

        <h1>Feed</h1>
        
    </section>

	<section class="cat-feed">

<?php

    // output RSS feed to HTML
    output_rss_feed('http://www.highsnobiety.com/category/music/feed/', 10, true, true, 200);

?>
		
	</section>

<?php 

    include "footer.php";

?>