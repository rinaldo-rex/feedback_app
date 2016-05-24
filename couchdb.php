 <?php
// Licensed under the Apache License. See footer for details.
 //We need to pull in the Sag PHP library. SAG is an open API used to connect to the Cloudant database.
 //We only need to do this once!
 require('vendor/autoload.php');

//Get Connection Variables from VCAPS_SERVICES. We first need to pull in our Cloudant database
//connection variables from the VCAPS_SERVICES environment variable. This environment variable
//will be put in your project by Bluemix once you add the Cloudant database to your Bluemix
//application.

// vcap_services Extraction
$services_json = json_decode(getenv('VCAP_SERVICES'),true);
$VcapSvs = $services_json["cloudantNoSQLDB"][0]["credentials"];


// Extract the VCAP_SERVICES variables for Cloudant connection.
 $myUsername = $VcapSvs["username"];
 $myPassword = $VcapSvs["password"];

 try {
  // Let's login to the database.
  $sag = new Sag($myUsername . ".cloudant.com");
  $sag->login($myUsername, $myPassword);

  // Now that we are logged in, we can create a database to use
  // $sag->createDatabase("ttpfeedback");
  $sag->setDatabase("ttpfeedback");
 /****feedback document starts ****/
 $namee=$_POST["name"];
 $com=$_POST["com"];
 $tweet=$_POST["tweet"];
 $acc=$_POST["service"];
 $sw=$_POST["topic"];
 $text=$_POST["text"];
 $rating=$_POST["rating"];

 /**test starts**/
$ch = curl_init();
$date = new Datetime();
$customer = array(
	'EmailID' => $tweet,
	'Organization' => $com,
	'Rating' => $rating,
	'Service' => $acc,
	'Topics' => $sw,
	'comments' => $text,
	'timestamp' => date_timestamp_get($date)
);
 $sag->put('"'.$namee.'"', $customer);

 /** feedback document ends **/
}
  catch(Exception $e) {
  //We sent something to Sag that it didn't expect.
  echo '<p>There Was an Error Getting Data from Cloudant!!!</p>';
  echo $e->getMessage();
}
echo "Thank you..".$namee."..for the Feedback !! ";

//-------------------------------------------------------------------------------
// Copyright IBM Corp. 2014
//
// Licensed under the Apache License, Version 2.0 (the "License");
// you may not use this file except in compliance with the License.
// You may obtain a copy of the License at
//
// http://www.apache.org/licenses/LICENSE-2.0
//
// Unless required by applicable law or agreed to in writing, software
// distributed under the License is distributed on an "AS IS" BASIS,
// WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
// See the License for the specific language governing permissions and
// limitations under the License.
//-------------------------------------------------------------------------------
?>
