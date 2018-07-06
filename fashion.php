<?php 

	include "header.php";
    include_once "function.php";
?>

	<section class="cat-header">

		<div class="cat-hed-txt">

			 <a href="index.php">Home</a>
			<h4>> Fashion</h4>

		</div>

			<h1>Fashion</h1>
		
	</section>

	<section class="cat-dashboard">
		
		<a href="fashion-1.php" class="cat-box">

            <img src="Assets/Images/f1.jpg">

            <div class="cat-b1-txt">

                <h2>LATEST</h2>
                <br>
                <h3>TOPIC</h3>
                
            </div>

		</a>

		<a href="fashion-2.php" class="cat-box" >

            <img src="Assets/Images/f2.jpg">

            <div class="cat-b2-txt">

                <h2>OUR</h2>
                <br>
                <h3>PICKS</h3>

            </div>

		</a>

		<div id="box-3" class="cat-box">
          
          <div class="cat-b3-txt">

                <h1>Hot Brands</h1>
                
                 <ul>
                    <li>Balenciaga</li>
                    <li>Gucci</li>
                    <li>Vetements</li>
                    <li>Off-White</li>
                    <li>Dolce & Gabbana</li>
                    <li>Yeezy</li>
                    <li>Valentino</li>
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
    output_rss_feed('http://www.highsnobiety.com/category/clothing/feed/', 10, true, true, 200);
?>
		
	</section>

<?php 

    include "footer.php";

?>