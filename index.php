<?php 
// Define variables for SEO
$pageName = 'home';
$pageBodyClass = $pageName;
$pageTitle = 'Silicon Beach Talent';
$pageDescription = 'We are a recruiting and consulting firm matching skills, company culture and personal connections while building a sustainable tech ecosystem in Southern California.';
$pageKeywords = 'silicon, beach, recruiting, california, southern california, los angeles, san diego, design, developer, electric vehicle';
$pageCanonical = 'http://www.siliconbeachtalent.com';
// $pageRobots = 'noindex,nofollow';

include 'header.php'; ?>

<div class="interactive-hero">
  <div class="text-layer">
    <div class="text-left text-col">
      <div class="text-container">
        <div class="sub-text">
          FIND WORK
        </div>
        <h2 class="text-header">
          Find a Career <br />You <strong>Love</strong>
        </h2>
        <a class="button" href="work.php">Find Work</a>
        <ul class="sub-paths">
          <li class="sub-path-item">
            <a class="sub-path-link" href="about.php">Learn about SBT</a>
          </li>
          <li class="sub-path-item">
            |
          </li>
          <li class="sub-path-item">
            <a class="sub-path-link" href="contact.php">Contact us</a>
          </li>
        </ul>
      </div>
    </div>
    <div class="text-right text-col">
      <div class="text-container">
        <div class="sub-text">
          HIRE TALENT
        </div>
        <h2 class="text-header">
          Partner with SBT to Build Your <strong>Dream Team</strong>
        </h2>
        <a class="button" href="talent.php">Hire Talent</a>
        <ul class="sub-paths">
          <li class="sub-path-item">
            <a class="sub-path-link" href="about.php">Learn about SBT</a>
          </li>
          <li class="sub-path-item">
            |
          </li>
          <li class="sub-path-item">
            <a class="sub-path-link" href="contact.php">Contact us</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <div class="beach-layer"></div>
  <div class="video-layer">
    <video autoplay="autoplay" id="video" loop="loop">
      <source src="https://dl.dropboxusercontent.com/u/80054631/sbt/sbt-hero-video_4.mp4" type="video/mp4" /><source src="https://dl.dropboxusercontent.com/u/80054631/sbt/sbt-hero-video.webm" type="video/webm" />
    </video>
  </div>
</div>
<div class="xl-section dark-section home-dark-section map-section">
	<div class="row">
		<div class="small-12 large-5 large-end columns">
			<h2 class="reverse"><span class="lead">Made for</span><br>California</h2>
			<p>We are a recruiting and consulting firm matching skills, company culture and personal connections while building a sustainable tech ecosystem in Southern California.</p>

			<p>Perks and bonuses are important, but we understand that what truly makes an opportunity great is the work you do and the impact you make. </p>

			<p>That is why our recruiters work onsite to thoroughly understand the culture of your company so we can talk to exceptional candidates about what really matters to them: the work. </p>
			<p><a href="work.php" class="button button-dark">Get work</a> <a href="talent.php" class="button">Get talent</a></p>
		</div>
	</div>
</div>
<div class="xxl-section pattern-section">
	<div class="row">
		<div class="small-12 large-6 large-centered text-center columns">
			<h2><span class="highlight">LOVE</span> YOUR WORK</h2>
			<p>Silicon Beach Talent was founded on the idea that the world really becomes a better place when people love what they do. Let us help get you there.</p> 
			<p><a href="about.php" class="button">About SBT</a></p>
		</div>
	</div>
</div>
<?php include 'footer.php'; ?>