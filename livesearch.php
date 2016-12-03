<?php
include 'header.php'
?>

<div class="topmain">

<div class="maincont2">
<div class="featureTop" style="color:OrangeRed;text-shadow: grey 0.1em 0.1em 0.3em;"><h3>DETAILS SEARCHING INFORMATION</h3></div>
<div class="featureContent">
<div style="margin:20px; height:auto;">

<?php
$xmlDoc=new DOMDocument();
$xmlDoc->load("links.xml");

$x=$xmlDoc->getElementsByTagName('link');

//get the q parameter from URL
$q=$_GET["q"];

//lookup all links from the xml file if length of q>0
if (strlen($q)>0)
{
$hint="";
for($i=0; $i<($x->length); $i++)
  {
  $y=$x->item($i)->getElementsByTagName('title');
  $z=$x->item($i)->getElementsByTagName('url');
  if ($y->item(0)->nodeType==1)
    {
    //find a link matching the search text
    if (stristr($y->item(0)->childNodes->item(0)->nodeValue,$q))
      {
      if ($hint=="")
        {
        $hint="<a href='" . 
        $z->item(0)->childNodes->item(0)->nodeValue . 
        "' target='_blank'>" . 
        $y->item(0)->childNodes->item(0)->nodeValue . "</a>";
        }
      else
        {
        $hint=$hint . "<br /><a href='" . 
        $z->item(0)->childNodes->item(0)->nodeValue . 
        "' target='_blank'>" . 
        $y->item(0)->childNodes->item(0)->nodeValue . "</a>";
        }
      }
    }
  }
}

// Set output to "no suggestion" if no hint were found
// or to the correct values
if ($hint=="")
  {
  $response="Sorry, no search result found.";
  }
else
  {
  $response=$hint;
  }

//output the response
echo $response;
?>
</div>
<br />
</div>
<div class="featureBottom"></div>
</div>


</div>

<?php
include 'footer.php';
include 'copyright.php';
?>