<!DOCTYPE html>
<html lang="en">

<?php
include 'header.html';
?>

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-lg-12">
          <br>
          <br>
          <div class="page-header">
          <h1>Listening to the Neighborhood <small>UX Design</small></h1>
        </div><br>
          <a class="btn btn-default" href="https://sferrari.net/LTTN/prototype/lttn_homepage.html">View the Prototype &raquo;</a>
          <br><br>
        </div>
    </div>

        <div class="row">
        
<!-- Project Goal, Design Problem, Design Solution, Tools Used, Skills Applied, Collaborators, Duration, Lessons Learned, Process and Details, Role
 -->
        <div class="col-sm-6 col-md-3 col-lg-3"><div class="well">
          <h3>Project Goal</h3>
          <p>To make an app or service that helps connect neighbors and benefits neighborhoods.</p>
        </div></div>


        <div class="col-sm-6 col-md-3 col-lg-3"><div class="well">
          <h3>Skills Applied</h3>
          <p>Ideation, competitive analysis, sketching, storyboarding, personas, prototyping.<br></p>
        </div></div>

        <div class="clearfix visible-sm"></div>

        <div class="col-sm-6 col-md-3 col-lg-3"><div class="well">
          <h3>Tools Used</h3>
          <p>Paper and pen, Pages for OS X, NinjaMock, iMovie, Spark for iOS, Axure.</p>
        </div></div>  

        <div class="col-sm-6 col-md-3 col-lg-3"><div class="well">
          <h3>Duration and Type</h3>
          <p>One semester - Winter 2014<br>
          Individual project for Interaction Design class</p>
        </div></div>

     </div><br>
      
      <hr>
      <div class="row">
        <div class="col-xs-12 col-sm-6 col-lg-6">
          <h3>The Problem</h3>
          <p>People want to be connected to their neighborhood, but the realities of working, errand-running, and suburban sprawl in the U.S. make that difficult. Setting up a whole new social network with a profile for your neighborhood is just cumbersome, not to mention maintaining your presence on the network is, well, just more work. What if we could just <i>listen</i> to the neighborhood?</p>
        </div>
        <div class="col-xs-12 col-sm-6 col-lg-6">
          <h3>Results</h3>
          <p>Through many iterations and by taking multiple approaches to understanding this problem, I developed a prototype for a service that allows people within the same vicinity (and even further) to hear and tell others what's going on. Importantly, the service has very little barrier to entry, starts with the principle of guarding a user's privacy and anonymity, and involves no maintenance.</p>
        </div>


      </div><br>
      <hr>
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-lg-12">
          <h3>Lessons Learned</h3>
          <p>Part of the joy of creating is not knowing how things will develop. It's important to keep an open mind and to deeply consider whatever feedback is received - you never know what piece of information will help you unlock an even more useful service. I'm happy with the results, and if I had the time, it would be a great challenge to code the app I designed.</p>
        </div>
      </div><br>
      <hr>
      <div class="row">
        <div class="col-lg-12">
     
          <h3>The Theme: Connecting Neighborhoods</h3>
          
          <p>In my interaction design class we were given the challenge of coming up with an app or service that would be of benefit to physical neighborhoods. This could be anything from helping neighbors with their chores or coordinating neighborhood meetings. My interest was drawn to the idea of enabling passive communications with the neighborhood, or perhaps something more like keeping tabs on neighborhood than actual communication. This idea was likely inspired by my then-recent exposure to <a href="http://listen.hatnote.com"> Listen to Wikipedia</a>, which is a real-time sonification and visualization of Wikipedia edits from around the world. It can make for rather mesmerizing and meditative viewing if you watch it for a while. My thinking was that it would be nice and perhaps informative to have a similar way of peering into the activities taking place in your local neighborhood.</p>
          <p>The design process for the app went through several rounds (and is still continuing!), including:</p>

            <ul>
              <li>several rounds of ideation and peer critique (which continues with each step);</li>
              <li>a comparative analysis of similar products;</li>
              <li>forty sketches of possible user interfaces;</li>  
              <li>personas and scenarios of possible users and usages;</li>
              <li>storyboards;</li> 
              <li>wireframes;</li> 
              <li>paper prototype;</li> 
              <li>and two rounds of digital prototyping.</li> 
            </ul>
            <br>
          <p>I am currently working on the paper prototype. So far I have really enjoyed the process of designing the app and especially the evolution of my initial ideas. I started out thinking the app should be completely passive, but through peer critique and further thought I have begun to see the value and possibilities for some limited forms of reciprocal communication and greater interaction, which I explain below.</p>
          <br>
          <h3>Ideation: Design Problem and Design Approaches</h3>
          <p>Below is the text of my initial ideas for the app and the design problem it tries to solve. Here's the <strong>TL;DR</strong>: people want to be connected to their neighborhood, but the realities of working, errand-running, and suburban sprawl in the U.S. make that difficult. Setting up a whole new social network with a profile for your neighborhood is just cumbersome, not to mention maintaining your presence on the network is, well, just more work. What if we could just <i>listen</i> to the neighborhood?</p><br>
          
          <blockquote><p>No one needs another social networking app, where they have to find their friends (or avoid people), post updates, check updates, make sure their information remains private, etc.. All that networking turns out to be, well, just plain work. The decline of Facebook and the rise of social network messaging services like WhatsApp, Snapchat, or even Twitter could be taken as evidence of this fact.</p> 

          <p>But the sensation of feeling connected can be generated through other means then through text and photos: it can also be an audible experience - the sounds of the neighborhood, at work or at play. But as more and more activities take place inside the home and as suburban sprawl continues unabated, it becomes harder and harder to "hear" the neighborhood and create that feeling of connection. </p>

          <p>"Listening to the neighborhood" (LTTN) would be an app that would recreate the sounds of the neighborhood based on data from our personal devices. People coming home, people leaving home, neighbors taking a walk or sharing a photo, friends texting or talking on the phone: these are all events that can be monitored and tallied on a smartphone. Each event could thus generate its own sound. The app would thus be bidirectional: a broadcast of your activities and a stream of incoming sounds signaling the activities of your neighbors</p></blockquote>
          
          <p>Currently the spirit of the app largely remains the same: a passive experience of a community's activities. Though the more realistic possibility is that the app generates tones and visualizations based on online, geo-located activities (sending tweets, posting photos on Flickr, posts on Craigslist, etc.) rather than directly getting data from people's smartphones.</p>

          <p>In considering other design approaches, I basically considered the different forms of inputs I could choose from: hardware (i.e. smartphone data), online activities (Tweets, etc.), and ambient hardware data (which would require installing something akin to iBeacons in neighborhoods). Clearly the most feasible approach would be rely on online activities given the difficulties of adding hardware to the equation.</p>
         
          <br>
          
          <h3>Competitive Analysis</h3>
          
          
          <p>For this step of the process, I discussed four potential competitors: <a href="http://www.nextdoor.com">Nextdoor</a>, <a href="http://listen.hatnote.com/">Listen to Wikipedia</a>, <a href="http://www.listentobitcoin.com/">Listen to Bitcoin</a>, and <a href="http://heavylistening.com/tweetscapes/">#tweetscapes</a>.</p> 
          
          <p>Nextdoor, a private social network for neighborhoods where users have their home addresses verified before joining, doesn't have a visualization and sonification aspect to it. But I thought it worth including because its service is specifically targeted at connecting neighbors while maintaining privacy. LTTN has these same goals, but with the benefit of not having to go through the process of setting up a profile and maintaining yet another social network.</p>
          
          <p>As mentioned previously, Listen to Wikipedia, and the service which inspired it in turn, Listen to Bitcoin (which produces a similar visualization and sonification of Bitcoin transactions), was a source of inspiration for my app. Both of these services provide a passive connection to an online community through a visualization and sonification. What they are missing is a connection to a local, geographically-specific community, which is what LTTN can provide.</p>

          <p>Lastly #tweetscapes is a conceptual project that produced a sonification and visualization of all tweets emanating from Germany. It no longer appears to be operational.</p>
          
          <br>

          <h3>Sketches</h3>
          <br><br>
          <div class="row">
            <div class="col-lg-6">
          <a href="https://sferrari.net/LTTN/sketches.jpg"><img class="img-responsive img-center" alt="A photo of twenty of forty sketches I drew" src="/LTTN/sketches.jpg" width="70%" title="Click to see a larger version of the image."></a>
            </div>
            <div class="col-lg-6">
          <a href="https://sferrari.net/LTTN/sketches2.jpg"><img class="img-responsive img-center" alt="A photo of twenty of forty sketches I drew" src="/LTTN/sketches2.jpg" width="70%" title="Click to see a larger version of the image."></a>
            </div>
          </div>

          <br><br>
          <p>In the next round we drew forty sketches of user interface elements and designs. This was a fun, if tiring, activity. After the first fifteen sketches it becomes increasingly difficulty to come with different ways of visualizing data, or laying out the interface. But there is definitely value to pushing yourself to the limits to see what materializes. Thanks to this activity I began to think more about sending out "Broadcasts" (preset texts messages) or pings (a composition of tones) to the neighborhood.</p>
          <br>

          <h3>Personas and Scenarios</h3>
          <br><br>


          <a href="https://sferrari.net/LTTN/personas.png"><img class="img-responsive img-center" alt="Two personas for LTTN" src="/LTTN/personas.png" width="70%" title="Click to see a larger version of the image."></a>

          <a href="https://sferrari.net/LTTN/personas1.png"><img class="img-responsive img-center" alt="Another persona for LTTN" src="/LTTN/personas1.png" width="35%" title="Click to see a larger version of the image."></a>

          <br><br>
          <p>Though user research is not a part of the class, we generated a set of three personas based on who we thought would be primary and secondary users of our apps. For LTTN, those three were:</p>
          <ul>
            <li>Rohan, a backend developer who wants to be able to "tune" into the happenings in his neighborhood while he is at work;</li>
            <li>Sergey, a retired college professor in Sarajevo who uses the app to keep tabs on his village now that he is living in a senior center in the city;</li>
            <li>Julia, a university music student in Paris who draws inspiration from the app and tweaks the settings to suit her moods and the ambiance of whatever music project she is working on.</li>
          </ul>
          <p>Here are the typical use-case scenarios for each of them:</p>

          <p><blockquote><strong>Scenario #1</strong><br>
          Rohan gets to his office at 8:30 in the morning and has three straight meetings, then lunch, and finally has time to work on his own stuff in the afternoon. Instead of listening to music in the background, he connects his phone to a bluetooth speaker and streams the audio feed of the LTTN app. Upon opening the app, he opts to enter in his home address rather than use his current location at the office. While he is working he can listen to the different tones generated by neighbors as they come and go and perform different activities (texting, running, making and receiving phone calls). Around 2pm he starts to hear a crescendo of activity, with seemingly lots of neighbors arriving back home and this draws his attention, since it’s still early in the day for people to be coming back from home. He texts his roommate and asks him what’s up. Apparently the local elementary school closed early on account of a small fire, though no one was injured. When he gets home, he knocks on his neighbor’s door to see if she and her son are doing ok.
          <br><br>
          <strong>Scenario #2</strong><br>
          It’s Saturday afternoon and Sergey is having his usual tea at the senior center. He gets out his iPad and after looking through the news, he opens up LTTN and enters the name of his village, which is only about a 15 minute drive away. From experience he knows that the app will usually be active with lots of sounds on the weekend. But today it’s even more active than usual, and he sees that the neighbors in his village are pinging each other a bunch. Of course! He forgot that today is the championship game of the local football league. Seeing all the activity taking place, he decides to call up a friend from the village who is only a few years younger than him but still has access to his car. He asks if he wouldn't mind picking him up from the senior center so he can make it to the game.
          <br><br>
          <strong>Scenario #3</strong><br>
          Julia is working on a project for her performance art class. Seeking inspiration, she goes to her computer and turns on the LTTN app. She likes to do this occasionally, and one of her favorite features is that she can skip around from town to town, and city to city, each of which have their own levels of activity. If she wants to hear an especially cacophonous set of sounds, she can zoom out from a single neighborhood and instead hear the sounds of a whole city. Or she can select a rural area that only has a few users if she would instead like the serenity of a steady but slow drip of sounds. Another favorite feature is the option to switch sets of sounds, so that she can go from a more meditative set to a disco-inspired set to a more skeuomorphic set of sounds. She plays around with these different possibilities until she settles on what that fits both her mood and the tone of her project. Then she listens to the app on her speakers and projects the images on to a wall using a projector that’s connected to her computer. She finds that doing this brings her inspiration as she refines her art project.</blockquote></p>

          <br>
          <h3>Storyboards</h3>
          <br><br>

          <a href="https://sferrari.net/LTTN/storyboard.png"><img class="img-responsive img-center" alt="A storyboard for scenario #1" src="/LTTN/storyboard.png" width="70%" title="Click to see a larger version of the image."></a>
          <br><br>
          <p>The above storyboard depicts scenario #1, where Rohan finds out about the fire at the local school. And yes, my stick figures really are that bad.</p>

          
          <br>
          <h3>Wireframes</h3>
          <br><br>

          <a href="https://sferrari.net/LTTN/LTTN_Wireframe.png"><img class="img-responsive img-center" alt="Wireframe of the app" src="/LTTN/LTTN_Wireframe.png" width="70%" title="Click to see a larger version of the image."></a>

          <a href="https://sferrari.net/LTTN/LTTN_Wireframe1.png"><img class="img-responsive img-center" alt="Wireframe of the app" src="/LTTN/LTTN_Wireframe1.png" width="70%" title="Click to see a larger version of the image."></a>

          <br><br>
          <p>In the wireframe assignment I tried to figure out whether or not, and how, I would want to incorporate any form of reciprocal communication in the app. I put together a QOC (Questions - Options - Criteria) diagram to consider the different possibilities, which is reproduced below.</p>

          <a href="https://sferrari.net/LTTN/QOC.png"><img class="img-responsive img-center" alt="Questions Options Critera diagram" src="/LTTN/QOC.png" width="70%" title="Click to see a larger version of the image."></a>

          <p>Below you can read my reasoning on the pluses and minuses of these three options and how they affected the design of the above wireframes:</p>

          <p><blockquote><p>The QOC diagram above shows the implications of three possible options and the criteria that they satisfy or do not satisfy (there are three kinds of lines: a solid line indicates a positive assessment, a dotted line represents a negative assessment, and a mix of dashes and dots means the criteria is somewhat satisfied). I generated three options as possible answers: no communication allowed; communication takes the form of preconfigured messages; or completely open communication is allowed (meaning the user can type or say anything to anyone).</p> 
          <p>LTTN was originally intended as a passive social networking app, one in which you can monitor the neighborhood, but not be forced to contribute or build a profile, etc.. Retaining that passivity even with the possibility of communicating with users is important, and this is the reasoning behind the criterion “No maintenance required.” The user doesn’t have an inbox of messages, doesn’t feel obliged to respond, nor do they have to manage communications. Thus, “No maintenance required.” A second criterion is related to this one, which is “No spam.” This a broad way of saying that whoever is responsible for the design, development, and administration of the app does not have to worry about people doing or saying bad things in the app. “No spam” means eliminating the need to do any policing of the community. Finally the third criterion is “Reciprocation between users.” Although at a glance this might simply mean communication rather than reciprocation, what I am trying to get at is a lower level than verbal communication: something more like acknowledging the presence and existence of others in the community.</p> 
          
          <p>As can be seen in the diagram, having no communication ability strongly satisfies the criteria of “No spam” and “No maintenance required” but does not satisfy the criterion of reciprocation; preset messages weakly satisfies those first two criteria and strongly satisfies the reciprocation criterion; open communication is the opposite of no communication in terms of what it satisfies or doesn’t satisfy. The most interesting and feasible option to me is that of preset messages. Having preset messages (“Hello out there,” “Good morning,” “It’s a beautiful day,” etc.) mostly sidesteps the need for policing: there would be no possibility of verbal abuse or other bad behavior, though it is true that someone could constantly be sending out these messages, but this is behavior that also could easily be limited within the app. These are also messages that do not need to be responded to - they wouldn’t accumulate in an inbox or necessarily be directed at any one person, they could be broadcast out to the community at large and make their own specific tone (a fourth design alternative not considered would be the idea of users simply “pinging” each other - these would be specific tones they could make, but there would be no written message involved). So preset messages satisfy the criterion of “No maintenance required” and allow for a sense of reciprocation between users.</p>
          
          <p>The wireframes (built using NinjaMock) demonstrate that with the addition of a communicative ability, I will definitely have to think about how I want users to be able to compose or choose messages, and how they should be displayed (the two option so far are a banner at the top of the screen, and messages that appear alongside the event bubbles).</p></blockquote></p>

          <br>

          <h3>Paper Prototype</h3>
          <br><br>

          <div class="embed-responsive embed-responsive-16by9">
          <iframe src="//player.vimeo.com/video/89814657" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe> <p><a href="http://vimeo.com/89814657">LTTN Paper Prototype</a> from <a href="http://vimeo.com/user14635526">Sebastian F</a> on <a href="https://vimeo.com">Vimeo</a>.</p>
          </div>

          
          <br><br>
          <p>The paper prototype is the last stage before the digital prototype. Using the Spark iOS video app made putting together the video a pretty simple process, and then iMovie. Working with paper definitely keeps you close to the grain of the materials you are working and makes you really consider the details. In the video you can see that I have gone a step further and I am now letting users interact with the bubbles - click or tap on a Flickr bubble, for instance, and the bubble will show you the photo from Flickr. You might ask why not show the photo in the first place? For me, it's important to keep the app as simple as possible, and having to interact with the visualization in order to reveal more details lets the interface be less cluttered.</p>

          <p>Making a paper prototype was a bit difficult because it failed to convey the dynamic nature of my app, which continually generates a visualization and sonification as neighborhood activities are registered. Doing this with paper is not easy, but I tried to use music a bit to convey its dynamic nature. But the overall effect might be a bit dorky!</p>

          <p>The prototyping process made me think that “Broadcasts” (as I am calling the preset messages that can be sent out to the community) should appear like other bubbles do in the visualization. Previously I had thought of making a separate shape for them, but I think that a uniform color and tone will help highlight them more so than a shape. I had also considering streaming the broadcasts through a scrolling list at the bottom of the screen, but I think that would move the broadcasts away from the overall experience (which should be somewhat immersive).</p> 

          <p>I was also unable to prototype the “rewind” process, given that I cannot show a "live stream" in the first place. The bubbles should fade in, expand, and then fade out. Using the rewind button you would be able to go back in time and see activities/bubbles that had passed by recently. I also realized that fast forward button doesn’t make sense when looking at the app in “live” mode, and the play button should really be a pause button (unless the feed is actually paused, then it should be a play button). This might be something I can work for the digital prototype.</p>
          <br>
          <h3>Digital Prototype</h3>
          <br><br>

          <p>I made a very rough prototype and in the process of making it, I finally found a better name for the app than "Listening to the Neighborhood." While thinking about whether or not "Broadcasts" should just refer to the preset messages, I realized that "Broadcasts" would be a much better name for the app itself, which is really a visualization and sonification of broadcasts of neighborhood activity.</p>
          <p>Click <a href="https://sferrari.net/LTTN/prototype/lttn_homepage.html">here</a> to see the prototype.</p>

          <br>
          <br>
          
        
          
        </div>

      </div>

<?php
include 'footer.html';
?>

</html>

