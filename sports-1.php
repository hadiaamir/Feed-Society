<?php 

	include "header.php";
    require_once "function.php";

?>

<body>
	
	<section class="c1-header">
			
			<a href="sports.php">Sports</a>
			<h4> < Latest Topic</h4>
			<h1>Latest Topic</h1>

	</section>

	<section class="c1-feed">

<?php
    // output RSS feed to HTML
    output_rss_feed('http://slamonline.com/feed', 1, true, true, 200);
?>

	</section>

    <section class="m-cmt-txt">

        <h2>Comment your thoughts on the latest sports feed!</h2>
                    
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