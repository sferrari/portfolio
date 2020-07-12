<!DOCTYPE html>
<html lang="en">

<?php
include 'header.html';
?>  
    <div class="container">  
      <div class="page-header">    
      <h1>Target <small>Senior Product Designer (May 2018 - Present)</small></h1>
    </div>

    <h2>"Offer me ways to make my life easier" <small class="text-muted">October 2019 - Present</small></h2>

	  <p>Since October 2019, my squad has been working on ways to make the lives of guests easier by providing new services they can purchase. This is an important area in retail given the overall shift in consumer spending to experiences and services rather than products. Our squad has also worked on facilitating the purchase of items that require digital activation (like smartphones and other financed electronics), and orders that use financing as a method of payment - making it faster for guests to get their hands on products they want.</p>

    <h2>"When I have free time, help me find ideas for myself and gifts for others" <small class="text-muted">May 2018 - October 2019</small></h2>
      <p>I joined Target to work on a mobile app product team that was focused on the Job to be Done of "When I have free time, help me find ideas for myself and gifts for others." My team created Augmented Reality experiences that help guests "be at Target" even when they physically can't be at a Target store to check out products.</p>

      <img class="img-responsive thumbnail" style="border-radius: 32px;" src="static/see_it_in_your_space.jpg" alt="Screenshot of Target mobile app showing the See it in your space feature.">
      <p style="text-align:center; font-size:1rem;" >Screenshot of the Target mobile app showing the "See it in your space" feature.</p>

      <p>We launched three different visualization features:</p>
      <ul>
        <li>See it in your space</li>
        <li>See it on you</li>
        <li>See it in 3D</li>
      </ul>

    <h3>See it in your space</h3>

      <p>"See it in your space" is a feature to help guests visualize the size, look, and feel of a product directly where they would want to place it in their home or office. We used ARKit on iOS and and ARCore on Android to pull off these experiences. If you have the Target app installed, you can try this feature with <a href="https://www.target.com/p/corinna-angle-leg-side-table-wood-threshold-8482/-/A-53496420">this product</a>.</p> 
      <p>Augmented reality is still a technology that is new to most people, and as a result their mental models are still rooted in 2D experiences. This posed interesting design problems, for example: how do you get people to move their phone or tablet correctly in order to place the virtual object? How do you get people to understand that the item is being shown at scale?</p>

      <p>To determine the answers to these questions and to design the best experience, I did extensive testing with guests using prototypes, competitors' apps, and unreleased versions of the feature. This testing included guest intercepts in the store and also sessions in Target's usability lab. We made several improvements along the way to better guide the guest in using the feature and to help them understand the model was being viewed at scale.</p>

      <p><strong>Business outcomes:</strong> Our OKRs centered around two key metrics:</p> 
      <ol>
        <li>an increase in conversion</li>
        <li>a decrease in return rates</li>
      </ol>
      <p>Although we never ran an A/B test to determine the exact lift in conversion, we could see that directly attributable demand (did guests buy the product the same day they used the AR feature?) was higher than average. The return rate metric was harder to track down because we couldn't tie a return (or lack thereof) directly back to usage of the feature. Instead we compared overall return rates in the furniture category (where return rates are typically higher than average and more expensive to process) between products that had 3D models and those that didn't. We also narrowed down the returns to those that had the reason codes of "Did not fit" and "Changed mind." There we did see a reduction in return rates. Those cost savings were significant and of course contribute directly to the bottom line.</p>

      <h3>See it on you</h3>

      <img class="img-responsive thumbnail" src="static/see_it_on_you.jpeg" alt="Screenshot of Target mobile app showing See it on you button on the product detail page of a pair of sunglasses">
      <p style="text-align:center; font-size:1rem;">Screenshot of the Target mobile app showing the product detail page for a pair of sunglasses.</p>

      <p>From an interaction standpoint, "See it on you" was a lot more straightforward: this feature lets you see how a pair of sunglasses looks on you, using the TrueDepth camera on iPhones with Face ID. If you have the Target app installed, try out the feature with <a href="https://www.target.com/p/women-s-aviator-sunglasses-a-new-day-8482-bronze/-/A-53070706">this product</a>.</p> 

      <p>This time, there was really nothing a guest had to do once they launched the feature: the sunglasses just appear on their face once they finish downloading. It's amazing the difference better technology can make when you compare these two AR experiences (with "See it in your space" you have to comparatively do a lot of work to use the feature). The real challenge with "See it on you" was to make the business case for the feature and make sure there were enough 3D models to warrant developing the experience. Since this feature launched relatively recently, the business outcomes are still to be determined.</p>

      <p>For me, AR hits the sweet spot of what mobile apps enable: using the unique capabilties of smartphones to bridge the gap between physical and digital in a compelling and personal way. As a researcher and designer, the clash between what the technology makes possible and what mental models people bring to it, was fascinating to observe. As AR becomes more familiar, and as new devices (i.e. glasses) emerge to better take advantage of its potential, AR should continue to serve an important function for people shopping online, especially when it comes to questions of fit, size, and style.</p>

      <h3>See it in 3D</h3>

      <p>We also created a 3D spinner to quickly see an item in 3D at a glance. One question I got when we were building the case for doing a 3D spinner: do we need this if we already have an AR feature? I could see where that person was coming from, but at the same time AR is still a difficult and time-consuming feature that isn't the right thing in all circumstances. Sometimes you just want to look at a piece of furniture without getting off the couch, making sure the room is well-lit, and then scanning the room with your camera. That's what the 3D spinner is for. And, just to add evidence to the idea that "easy is best" when it comes to features, 3D also outperforms AR in terms of conversion rates.</p>

      <h3>Gifting and Marketing Content</h3>

      <p>During this period, I also worked on year-round gifting and marketing content in the Target app. This work included:
      <ul>
        <li>Making it easier for guests to find the right gift at the right price</li>
        <li>Updating the look and feel of marketing content on the app so that it was more on-brand and easier for guests to distinguish between tappable and non-tappable elements</li>
      </ul>

      <p>In terms of business outcomes for gifting in particular, I can state that once we launched our Gift Ideas experience on the app, we immediately started outperforming the equivalent web experience (which overall took a different approach to surfacing and filtering content).</p>

      <p>If you'd like to learn more about the previous history behind the design and development of the Target mobile apps, take a look at <a href="https://www.slideshare.net/UXSTRAT/ux-strat-usa-2018-presentation-alison-beattie-target">this presentation</a> by <a href="https://www.linkedin.com/in/alisonbeattie/">Alison Beattie</a>, former UX Director at Target (my former boss - she hired me at Target).</p>

<?php
include 'footer.html';
?>
</html>   