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

<div class="section medium-section text-center">
	<p class="lead animated fadeInUp">Browse</p>
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
            <li id="" class="job-filter-trigger active">Show All Jobs</li>
          </ul>
        </li>
        <li>
          <h4>Type</h4>
          <ul class="job-filter-actions">
            <li id="design" class="job-filter-trigger">Design</li>
            <li id="electric-vehicle" class="job-filter-trigger">Electric Vehicle</li>
            <li id="technology" class="job-filter-trigger">Technology</li>
          </ul>
        </li>
      </ul>
    </aside>

  </div>
	<div class="small-12 large-8 columns">

    <div class="jobs-iframe-container">
      <iframe src="https://sbtalent.crelate.com/portal?iframe=true" id="jobsFrame" class="jobs-iframe"></iframe>
    </div>

	</div>
</div>
<?php include 'footer.php'; ?>