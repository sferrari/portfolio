<!DOCTYPE html>
<html lang="en">

<?php
include 'header.html';
?>

    
    <div class="jumbotron">
      <div class="container">
        <!-- greeting code -->
        <script language=javascript>
          document.write(function(){Now=new Date;Hour=Now.getHours();5>Hour?msg="<h1 class='lg-h'>Hello there, night owl.</h1>":12>Hour?msg="<h1 class='lg-h'>Good morning.</h1>":18>Hour?msg="<h1 class='lg-h'>Good afternoon.</h1>":24>Hour&&(msg="<h1 class='lg-h'>Good evening.</h1>");return msg}());
      </script>
        <noscript><h1>Hello!</h1></noscript>
        <p>My goal as a user experience designer and researcher is to make software that helps people in their everyday lives at scale. This requires aligning research, design, and strategy around the core problem of understanding and serving user needs - everything else follows. I enjoy working within teams that are dedicated to craftsmanship and continual learning.</p>
        <p style="text-align:right"><a class="btn btn-primary btn-md" style="margin-bottom:5px;" href="portfolio.php">View My Portfolio &raquo;</a>
        <a class="btn btn-primary btn-md" style="margin-bottom:5px;" href="/blog">Read My Blog &raquo;</a></p>
      </div>
    </div>

    <div class="container">
      <div class="row">

       <div class="col-sm-4">
        <h1>Research</h1>
          <p>Before we can design, we must understand the user and the problems they are trying to solve. Research generates a view of their mental model and the job-to-be-done of the product.</p>
        </div>

        <div class="col-sm-4">
         <h1>IA & Design</h1>
          <p>With solid research in hand, we can create a design that elegantly meets the needs of the user, whatever those needs might be.</p>
        </div>
       

       <div class="col-sm-4">
         <h1>Test & Iterate</h1>
          <p>Through testing and iteration, we learn what works and what can be improved. Software is never done.</p>
        </div>
       </div> 
      
    
      
<?php
include 'footer.html';
?>

</html>