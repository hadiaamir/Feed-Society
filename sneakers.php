<?php 

	include "header.php";
  include_once "function.php";

?>
	
	<section class="cat-header">

		<div class="cat-hed-txt">		
	       <a href="index.php">Home</a>
			<h4>> Sneakers</h4>
		</div>

			<h1>Sneakers</h1>
		
	</section>

	<section class="cat-dashboard">
	
		<a href="sneakers-1.php" class="cat-box">

        <img src="Assets/Images/sn1.jpg">
    
        <div class="cat-b1-txt">
            <h2>LATEST</h2>
            <br>
            <h3>TOPIC</h3>
         </div>

        </a>

        <a href="sneakers-2.php" class="cat-box">
             
            <img src="Assets/Images/sn2.jpg">
            
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
                    <li>Adidas</li>
                    <li>Nike</li>
                    <li>Air Jordan</li>
                    <li>Vans</li>
                    <li>New Balance</li>
                    <li>Puma</li>
                    <li>Yeezy</li>
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
    output_rss_feed('http://www.highsnobiety.com/category/sneakers/feed/', 10, true, true, 200);

?>
		
	</section>

<?php 

    include "footer.php";

?>