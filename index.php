<!DOCTYPE html>
<html lang="en">

<?php
include 'header.html';
?>	

      <!-- greeting code -->
      <div class="jumbotron">
        <div class="container">
      <script language=javascript>
          document.write(function(){Now=new Date;Hour=Now.getHours();5>Hour?msg="<h1 class='lg-h'>Hello there, night owl.</h1>":12>Hour?msg="<h1 class='lg-h'>Good morning.</h1>":18>Hour?msg="<h1 class='lg-h'>Good afternoon.</h1>":24>Hour&&(msg="<h1 class='lg-h'>Good evening.</h1>");return msg}());
      </script>
        <noscript><h1>Hello!</h1></noscript>
        <p>My goal is to make software at scale that helps people in their everyday lives. This requires aligning strategy, research, and design around the core problem of understanding and serving people's needs - everything else follows. I enjoy working within teams that are dedicated to craftsmanship and continual learning.</p>
        <div style="margin-bottom:1em"><a type="button" class="btn-link" style="margin-bottom:5px; margin-right:25px; text-decoration:underline;" href="portfolio.php" role="link">View Portfolio</a>
        <a type="button" class="btn-link" style="margin-bottom:5px; text-decoration:underline;" href="/blog" role="link">Read Blog</a></div>
       </div>
       </div>
      <div class="container">
       <div class="gridwrapper3">
       	  <div>
	          <h2 class="box">Understand</h2>
	          <p class="box">I enjoy conducting research to understand people's mental models and the job-to-be-done of a product. This work sets the foundation for a product's success - and I just like figuring out what makes people tick.</p>
          </div>

       	  <div>
	          <h2 class="box">Create</h2>
	          <p class="box">Design brings new things into the world. I value the creative stewardship of ideas, from initial sketches to functional prototypes, and the give-and-take between team members to achieve the best product possible.</p>
          </div>
       
       	  <div>
	          <h2 class="box">Test and Iterate</h2>
	          <p class="box">Through testing and iteration, we learn what works and what can be improved. Software, and learning, are never done.</p>
          </div>
       </div>

<?php
include 'footer.html';
?>

</html>
