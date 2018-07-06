<?php 
	include "header.php";
  include_once "function.php";
?>

	<section class="cat-header">

		<div class="cat-hed-txt">		
			<a href="index.php">Home</a>
			<h4>> Sports</h4>
		</div>
			<h1>Sports</h1>
		
	</section>

	<section class="cat-dashboard">
		
		<a href="sports-1.php" class="cat-box">

            <img src="Assets/Images/sp1.jpg">

            <div class="cat-b1-txt">
                 <h2>LATEST</h2>
                 <br>
                <h3>TOPIC</h3>
            </div>

        </a>

        <a href="sports-2.php" class="cat-box">

            <img src="Assets/Images/sp2.jpg">

            <div class="cat-b2-txt">
                <h2>OUR</h2>
                <br>
                <h3>PICKS</h3>
             </div>
            
        </a>

        <div id="box-3" class="cat-box">
          
          <div class="cat-b3-txt">
                
                <h1>Hot Topics</h1>
                
                 <ul>
                    <li>World Cup</li>
                    <li>Golden State Warriors</li>
                    <li>Lebron James</li>
                    <li>Cristiano Ronaldo</li>
                    <li>Kevin Durant</li>
                    <li>Russia vs Egypt</li>
                    <li>Messi</li>
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
    output_rss_feed('https://www.slamonline.com/feed ', 10, true, true, 200);
?>
		
	</section>

<?php 

    include "footer.php";

?>