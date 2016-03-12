<?php
// OPTIONS - PLEASE CONFIGURE THESE BEFORE USE!
if (isset($_POST['name'])) {
$yourEmail = "general@madebyporter.com"; // the email address you wish to receive these mails through
$yourWebsite = "Silicon Beach Talent"; // the name of your website
$thanksPage = 'submit.php'; // URL to 'thanks for sending mail' page; leave empty to keep message on the same page 
$maxPoints = 4; // max points a person can hit before it refuses to submit - recommend 4
$requiredFields = "name,email,comments"; // names of the fields you'd like to be required as a minimum, separate each field with a comma


// DO NOT EDIT BELOW HERE
$error_msg = array();
$result = null;

$requiredFields = explode(",", $requiredFields);

function clean($data) {
  $data = trim(stripslashes(strip_tags($data)));
  return $data;
}
function isBot() {
  $bots = array("Indy", "Blaiz", "Java", "libwww-perl", "Python", "OutfoxBot", "User-Agent", "PycURL", "AlphaServer", "T8Abot", "Syntryx", "WinHttp", "WebBandit", "nicebot", "Teoma", "alexa", "froogle", "inktomi", "looksmart", "URL_Spider_SQL", "Firefly", "NationalDirectory", "Ask Jeeves", "TECNOSEEK", "InfoSeek", "WebFindBot", "girafabot", "crawler", "www.galaxy.com", "Googlebot", "Scooter", "Slurp", "appie", "FAST", "WebBug", "Spade", "ZyBorg", "rabaz");

  foreach ($bots as $bot)
    if (stripos($_SERVER['HTTP_USER_AGENT'], $bot) !== false)
      return true;

  if (empty($_SERVER['HTTP_USER_AGENT']) || $_SERVER['HTTP_USER_AGENT'] == " ")
    return true;
  
  return false;
}

if ($_SERVER['REQUEST_METHOD'] == "POST") {
  if (isBot() !== false) {
    echo "No bots please! UA reported as: ".$_SERVER['HTTP_USER_AGENT'];
  die;
  }
    
  // lets check a few things - not enough to trigger an error on their own, but worth assigning a spam score.. 
  // score quickly adds up therefore allowing genuine users with 'accidental' score through but cutting out real spam :)
  $points = (int)0;
  
  $badwords = array("adult", "beastial", "bestial", "blowjob", "clit", "cum", "cunilingus", "cunillingus", "cunnilingus", "cunt", "ejaculate", "fag", "felatio", "fellatio", "fuck", "fuk", "fuks", "gangbang", "gangbanged", "gangbangs", "hotsex", "hardcode", "jism", "jiz", "orgasim", "orgasims", "orgasm", "orgasms", "phonesex", "phuk", "phuq", "pussies", "pussy", "spunk", "xxx", "viagra", "phentermine", "tramadol", "adipex", "advai", "alprazolam", "ambien", "ambian", "amoxicillin", "antivert", "blackjack", "backgammon", "texas", "holdem", "poker", "carisoprodol", "ciara", "ciprofloxacin", "debt", "dating", "porn", "link=", "voyeur", "content-type", "bcc:", "cc:", "document.cookie", "onclick", "onload", "javascript");

  foreach ($badwords as $word)
    if (
      strpos(strtolower($_POST['comments']), $word) !== false || 
      strpos(strtolower($_POST['name']), $word) !== false
    )
      $points += 2;
  
  if (strpos($_POST['comments'], "http://") !== false || strpos($_POST['comments'], "www.") !== false)
    $points += 2;
  if (isset($_POST['nojs']))
    $points += 1;
  if (preg_match("/(<.*>)/i", $_POST['comments']))
    $points += 2;
  if (strlen($_POST['name']) < 3)
    $points += 1;
  if (strlen($_POST['comments']) < 15 || strlen($_POST['comments'] > 1500))
    $points += 2;
  if (preg_match("/[bcdfghjklmnpqrstvwxyz]{7,}/i", $_POST['comments']))
    $points += 1;
  // end score assignments

  foreach($requiredFields as $field) {
    trim($_POST[$field]);
    
    if (!isset($_POST[$field]) || empty($_POST[$field])) {
      echo "Please fill in all the required fields and submit again.";
      die;
      }
  }

  if (!empty($_POST['name']) && !preg_match("/^[a-zA-Z-'\s]*$/", stripslashes($_POST['name']))) {
    echo "The name field must not contain special characters.\r\n";
  die;}
  if (!empty($_POST['email']) && !preg_match('/^([a-z0-9])(([-a-z0-9._])*([a-z0-9]))*\@([a-z0-9])(([a-z0-9-])*([a-z0-9]))+' . '(\.([a-z0-9])([-a-z0-9_-])?([a-z0-9])+)+$/i', strtolower($_POST['email']))) {
    echo "That is not a valid e-mail address.\r\n";
  die;}
  if (!empty($_POST['url']) && !preg_match('/^(http|https):\/\/(([A-Z0-9][A-Z0-9_-]*)(\.[A-Z0-9][A-Z0-9_-]*)+)(:(\d+))?\/?/i', $_POST['url'])) {
    echo "Invalid website url.\r\n";
  die;}
  
  if ($error_msg == NULL && $points <= $maxPoints) {
    $subject = "SBT General Inquiry";
    
    $message = "You received this e-mail message through your website: \n\n";
    foreach ($_POST as $key => $val) {
      if (is_array($val)) {
        foreach ($val as $subval) {
          $message .= ucwords($key) . ": " . clean($subval) . "\r\n";
        }
      } else {
        $message .= ucwords($key) . ": " . clean($val) . "\r\n";
      }
    }
    $message .= "\r\n";
    $message .= 'IP: '.$_SERVER['REMOTE_ADDR']."\r\n";
    $message .= 'Browser: '.$_SERVER['HTTP_USER_AGENT']."\r\n";
    $message .= 'Points: '.$points;

    if (strstr($_SERVER['SERVER_SOFTWARE'], "Win")) {
      $headers   = "From: $yourEmail\r\n";
    } else {
      $headers   = "From: $yourWebsite <$yourEmail>\r\n"; 
    }
    $headers  .= "Reply-To: {$_POST['email']}\r\n";

    if (mail($yourEmail,$subject,$message,$headers)) {
      if (!empty($thanksPage)) {
        //header("Location: $thanksPage");
        exit;
      } else {
        $result = 'Your mail was successfully sent.';
        $disable = true;
      }
    } else {
      echo 'Your mail could not be sent this time. ['.$points.']';
      die;
    }
  } else {
    if (empty($error_msg))
      echo 'Your mail looks too much like spam, and could not be sent this time. ['.$points.']';
    die;
  }
}
die;
}
function get_data($var) {
  if (isset($_POST[$var]))
    echo htmlspecialchars($_POST[$var]);
}
?>

<?php 
// Define variables for SEO
$pageName = 'contactus';
$pageBodyClass = $pageName;
$pageTitle = 'Silicon Beach Talent | Contact Us';
$pageDescription = 'We are a recruiting and consulting firm matching skills, company culture and personal connections while building a sustainable tech ecosystem in Southern California.';
$pageKeywords = 'silicon, beach, recruiting, california, southern california, los angeles, san diego, design, developer, electric vehicle';
$pageCanonical = 'http://www.siliconbeachtalent.com';
// $pageRobots = 'noindex,nofollow';

include 'header.php'; ?>

<div class="row">
	<div class="small-12 columns">
		<div class="section medium-section text-center">
			<p class="lead">I'm ready to</p>
			<h1>Contact</h1>
			<p class="lead mt0">Silicon Beach Talent</p>
			<p><img src="images/line.svg" alt=""></p>
		</div>
	</div>
</div>
<div class="row">
	<div class="small-12 large-10 large-text large-centered large-text-center columns">
		<div class="section pt0">
			<p>Ready to get started? Follow the instructions and fill out the form below. We respond within 48 hours.</p>
		</div>
	</div>
</div>
<div class="row">
	<div class="small-12 columns">
		<div class="section pt0 large-pt">
			<form id="inquiry-general" action="<?php echo basename(__FILE__); ?>" method="post">
				<noscript>
						<p><input type="hidden" name="nojs" id="nojs" /></p>
				</noscript>
				
				<div class="large-text-center">
					<label class="large-text">Reason for Contact</label>
						<ul class="contact-select">
              <li class="contact-select-ele active">
                <input value="work" type="radio" name="dropdown_eg" id="contact-select-work">
                <label for="contact-select-work">I'm Looking for Work</label>
              </li>
              <li class="contact-select-ele">
                <input type="radio" value="talent" name="dropdown_eg" id="contact-select-talent">
                <label for="contact-select-talent">I'm Looking for Talent</label>
              </li>
              <li class="contact-select-ele">
                <input type="radio" value="general" name="dropdown_eg" id="contact-select-general">
                <label for="contact-select-general">Just a General Inquiry</label>
              </li>
            </ul>
					</label>
				</div>
				<div id="contact-form">

				</div>
			</form>
		</div>
	</div>
</div>
<?php include 'footer.php'; ?>