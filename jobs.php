<?php 
// Define variables for SEO
$pageName = 'jobs';
$pageBodyClass = $pageName;
$pageTitle = 'Silicon Beach Talent | Jobs';
$pageDescription = 'We are a recruiting and consulting firm matching skills, company culture and personal connections while building a sustainable tech ecosystem in Southern California.';
$pageKeywords = 'silicon, beach, recruiting, california, southern california, los angeles, san diego, design, developer, electric vehicle';
$pageCanonical = 'http://www.siliconbeachtalent.com';
// $pageRobots = 'noindex,nofollow';

include 'header.php'; ?>

<div class="section medium-section">
	<p class="lead animated fadeInUp">I'm looking for</p>
	<h1>Jobs</h1>
	<p><img src="images/line.svg" class="fadeInDown animated arrow" alt=""></p>
</div>
<div class="row">
  <div class="small-12 large-4 columns">

    <aside class="job-filter-container">
      <h3>Filter by:</h3>

      <ul class="job-filter">
        <li>
          <ul class="job-filter-actions">
            <li class="active">Show All Jobs</li>
          </ul>
        </li>
        <li>
          <h4>Date</h4>
          <ul class="job-filter-actions">
            <li><a href="#">Newer</a></li>
            <li><a href="#">Older</a></li>
          </ul>
        </li>
        <li>
          <h4>Type</h4>
          <ul class="job-filter-actions">
            <li><a href="#">Design</a></li>
            <li><a href="#">Electric Vehicle</a></li>
            <li><a href="#">Technology</a></li>
          </ul>
        </li>
      </ul>
    </aside>

  </div>
	<div class="small-12 large-8 columns">
		<div id="result"></div>
	</div>
</div>
<?php include 'footer.php'; ?>