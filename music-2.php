<?php 

    include "header.php";
?>

    <section class="c1-header">
            
            <a href="music.php">Music</a>
            <h4> < Our Pick</h4>
            <h1>Our Pick</h1>

    </section>

    <section class="c2-ourpick">

 		<h3>Reckless - NAV</h3>

		<h4>Source: Spotify</h4>
		
	</section>

	<section class="m2-music">

		<iframe src="https://open.spotify.com/embed?uri=spotify:user:newbranches:playlist:0j1TfvgzRNIgTvsUUEOwxs" width="600" height="380" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>

	</section>
			 
 	<section class="m-cmt-txt">
					
		<h2>Comment your thoughts on our favorite album of the month!</h2>
		<span class="disqus-comment-count" data-disqus-identifier="music-2"></span>

	</section>	 

	 <div id="disqus_thread">

         <script>
         
            (function() { // DON'T EDIT BELOW THIS LINE
            var d = document, s = d.createElement('script');
            s.src = 'https://feedsocietyca.disqus.com/embed.js';
            s.setAttribute('data-timestamp', +new Date());
            (d.head || d.body).appendChild(s);
            })();

        </script>

    </div>

<?php 

    include "footer.php";

?>