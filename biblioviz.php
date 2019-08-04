<!DOCTYPE html>
<html lang="en">

<?php
include 'header.html';
?>
    

    <div class="container">
          <div class="page-header">
               <h1>Academic Search Engine Visualization <small class="text-muted">Prototyping</small></h1>
          </div>


          <p><a class="btn btn-outline-primary btn-sm" style="margin-bottom:5px;margin-right:5px;" href="https://sferrari.net/biblioviz/biblioviz/Home.html">View the Prototype</a> 
          <a class="btn btn-outline-primary btn-sm" style="margin-bottom:5px;" href="https://www.screencast.com/t/zdEo2oMiT">Watch the Screencast</a>
          
          <p>Academic search engines have different needs and jobs-to-be-done than the typical online search engine. For instance, the original insight that launched the Google search engine and propelled it to success was twofold: on the data side of the equation, the algorithm sorted through and analyzed the links between pages rather than relying primarily on keywords which could be easily manipulated by SEO companires; on the user-facing side of the equation, the search results were presented in a clean and simple list that focused on quickly getting the user to their intended destination (this might not sound innovative, but users today should be reminded that search engines like Yahoo! and AltaVista tried to keep users within their web properties as much as possible, rather than directing them as quickly as possible to the right website).</p>
          
          <p>An academic researcher, however, would also benefit from being able to better and more quickly visualize the citation links between articles, books, and other sources. While perhaps even a majority of academic researchers are looking for a specific article, a large percentage of users (undergraduate students, for instance) might be seeking not just one source, but a better understanding of the many different sources that inform their area of research.</p>
          <p>
          This difference in the job-to-be-done could be reflected through an intelligent use of data visualization: not a replacement of the simple, clean list, but a supplementary, dynamic visual mapping of search results and how they are linked by relationships of citation.</p>
          
          <p style="text-align: center;">
          <br>

          <img class="img-responsive img-center" alt="A screenshot of my prototype for Visualized Academic Search Engine results." src="biblioviz/googlescholarwider.png"> 
          <!--width="80%" height ="63.5%"-->
          <!--width="800em" height="635em"-->
          <br><br>
          <p style="text-align: left;">The above screenshot is from my prototype of a hypothetical data visualization layer for an academic search engine. In this example I did a search for the Chilean novelist Roberto Bolaño. Each bubble represents a novel by Bolaño, with the size of the bubble indicating the number of times it has been cited, so a quick glance reveals which works have been the most popular ones to cite in academia. Below you can see a screenshot of the same search done in Google Scholar with the traditional list of results.</p>
          <br><br>
          <p style="text-align: center;"><img class="img-responsive img-center" alt="A screenshot of a normal Google Scholar search" src="biblioviz/normalgooglescholar.png"/></p>
          <br><br>
          You can try playing around with the prototype in this seamless iframe below (you must be using Chrome or Safari; and sadly, rollover animations currently only work in Safari when viewed in this iframe - click the link at the top of this page for the full experience of the protoype in any browser):
          <br><br>
          <div class="embed-responsive embed-responsive-4by3">
          <iframe class="embed-responsive-item" src="https://sferrari.net/biblioviz/biblioviz/Home.html" seamless height="750em" width="98%"></iframe>
          </div>
           
          <!-- 
           To view the prototype in action, visit <a href="http://www-personal.umich.edu/~ferraris/googlescholar/Home.html">http://www-personal.umich.edu/~ferraris/googlescholar/Home.html</a> -->
          
          
          <h2>How it would work</h2>
          
          <p>Academic search engines provide information in a list of results by noting how many times a source is cited and presenting a link to a new search with a list of those citations. Like in this screenshot below: </p>
          
          <p style="text-align: center;"><img class="img-responsive img-center" alt="A screenshot of a normal Google Scholar search" src="biblioviz/normalgooglescholar.png"/></p>
          
          <p>
          Alongside these links, I propose adding a new link (perhaps entitled “Map these citations”) which would usher the user into a new data visualization layer (with an easily discoverable path for getting back to the original list of results). At this point, the original source from the list of results becomes a bubble in the center of the screen surrounded by and connected to by lines to other bubbles which would be the scholarly sources that cite the original source (I will call them secondary sources to avoid confusion). Each bubble would contain identifying text, either author names or titles.</p>
          
          <p>Among the secondary sources there could be further relationships of citation which could be indicated by lines connecting them. These relationships of citation would structure how the bubbles are arrayed around the original source. For instance, it could be the case that one of the secondary sources is also cited by nearly all the other secondary sources, in which case this bubble would be closest to the bubble for the original source. Physical proximity on the screen could thus indicate greater scholarly interaction (i.e. if you end up reading the primary source, you should probably read this other secondary source, since both are cited by almost all the same sources).</p>
          
          <p>The more times a source is cited, the larger the bubble should be. This could mean that one of the bubbles for the secondary sources is larger than all the other bubbles, including the primary source. This distinction in size would allow for a greater aspect of discoverability: a student or scholar could see that this source might be the most important one to investigate further, rather than the primary source.</p>
          
          <p>A relationship of citation always indicates a temporal relationship too, since the cited source is always anterior in time to the citing source. The dimension of time would thus need to be represented, potentially along the vertical axis of the screen with earlier sources on top and later sources further below.</p>
          
          <p>Clicking on one of the secondary source bubbles would reorganize the mapping around that source, turning it into the primary source, with a faded color now marking what had previously been the primary source.</p>
          
          <p>At this point, the mapping would begin to make a distinction between the sources that are <i>cited by</i> the original source, and the sources which <i>cite</i> the original source. The former would be arrayed above the primary source, while the latter would be arrayed below. This more general view could also be triggered by zooming out from the first mapped-out view of the primary source and the sources which cite it.</p>
          
          <p>Distinctions in bubble size and proximity would be maintained in this expanded, zoom-out view, especially since the larger number of sources on the screen will make it more difficult to discern the relationships between them.</p>
          
          <p>By zooming out even further, the researcher could see at a glance the intricate relationships between sources, and could even perhaps note important “disconnects” between certain clusters: academic cliques that have formed around one seminal source but don’t take into account another seminal source that has formed its own clique of citers. The user could then take advantage of this insight and see if there isn’t a way to make connection between separate academic currents of thought.</p>
          
          <p>If a source is not cited at all by others, this could either serve as a warning to the researcher that further inquiry into this source is not warranted because it forms a dead end, or it could alert the searcher to valuable new research that hasn’t yet had the time to be cited (and the temporal axis of the mapping should allow for a quick deduction of which of the two cases might apply).</p>
          
          <p>And at any point the user can click on an individual bubble and zoom back into a more limited view of its citations and the sources that cite it.</p>
          
          <h2>Conclusion</h2>
          
          <p>For a scholar these relationships of citations between sources are incredibly important and can be in and of themselves an object of study and research. For the student, a visual mapping of search results could allow for greater discoverability and speed up the early phases of the research process.</p>
          
          <p>Finally, here's a screencast I made of the prototype:</p>
          
          <div class="embed-responsive embed-responsive-16by9">
          <iframe style="display: block; margin:0 auto; overflow:hidden; border:none; scrolling:no;" class=" tscplayer_inline embeddedObject" name="tsc_player" type="text/html" src="https://www.screencast.com/users/sebferrari/folders/Camtasia/media/fff204f1-4ad0-4962-9bbe-46eb4448fde3/embed" height="450" width="720" webkitallowfullscreen mozallowfullscreen allowfullscreen>Your browser does not support seamless iframes. </iframe>
          </div> 
      

<?php
include 'footer.html';
?>

</html>