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
        <p>I'm a designer and researcher with over 7 years of experience in design, and a previous career as a teacher and academic. My goal is to make software that helps people in their everyday lives, and that creates sustainable value for a business or furthers the mission of an organization.</p>
        <div style="margin-bottom:1em"><a type="button" class="btn-link" style="margin-bottom:5px; margin-right:25px; text-decoration:underline;" href="portfolio.php" role="link">View Portfolio</a>
        <a type="button" class="btn-link" style="margin-bottom:5px; text-decoration:underline;" href="/blog" role="link">Read Blog</a></div>
       </div>
       </div>
      <div class="container">
       <div class="gridwrapper3">
       	  <div>
	          <h2 class="box">Understand</h2>
	          <p class="box">I conduct research to understand people's mental models and the Job To Be Done of a product. I take care to understand the business constraints and help craft the strategic direction of the product.</p>
          </div>

       	  <div>
	          <h2 class="box">Create</h2>
	          <p class="box">I value the creative stewardship of ideas, from initial sketches to functional prototypes, and the give-and-take between team members to achieve the best product possible.</p>
          </div>
       
       	  <div>
	          <h2 class="box">Learn</h2>
	          <p class="box">I create and test realistic prototypes to learn what works and what can be improved. I monitor feedback and performance to identify enhancements. Almost as valuable as the product itself, is the new understanding we gain from it.</p>
          </div>

          <div>
            <h2 class="box">The Team</h2>
            <p class="box">I enjoy working within collaborative teams that are dedicated to craftsmanship, learning, and mutual respect. Building a trusting team and a sustainable process is a key part of my job.</p>
          </div>
       </div>
     

       

<?php
include 'footer.html';
?>

</html>
