
<!-- CSS -->
<style type="text/css" media="screen">
#slider {
    width: 310px; /* important to be same as image width */
    height: 200px; /* important to be same as image height */
    position: relative; /* important */
	overflow: hidden; /* important */
}
#sliderContent {
    width: 310px; /* important to be same as image width or wider */
    position: absolute;
	top: 0;
	margin-left: 3px;
}
.sliderImage {
    float: left;
    position: relative;
	display: none;
}
.sliderImage span {
    position: absolute;
	font: 14px/18px Calibri;
    width: 310px;
    
    filter: alpha(opacity=1);
    -moz-opacity: 1;
	-khtml-opacity: 1;
    opacity: 1;
    
    display: none;
}
.clear {
	clear: both;
}
.sliderImage span strong {
    font-size: 18px;
}
.top {
	top: 0;
	left: 0;
}
.bottom {
	bottom: 8px;
    left: 8px;
}
ul1 { list-style-type: none;}
</style>
<!-- JavaScripts-->

<script type="text/javascript">
    $(document).ready(function() {
        $('#slider').s3Slider({
            timeOut: 4000
        });
    });
</script>




   
    <div id="slider">
        <ul1 id="sliderContent">
            <li class="sliderImage">
                <img src="PhotoGallery/galleryimage/rarecar.png" alt="rare car collection" />
                <span class="bottom"><strong><a style="color:OrangeRed;text-shadow: #0099da 0.1em 0.1em 0.3em;" href="?page=rarecarcollection"><b>RARE CAR COLLECTION</b></a></strong><br /><a style="color:#ffffff;text-shadow: white 0.1em 0.1em 0.3em;" href="?page=rarecarcollection">View More</a></span>
            </li>
			
            <li class="sliderImage">
                <img src="PhotoGallery/galleryimage/latestcar.png" alt="latest model car" />
                <span class="bottom"><strong><a style="color:OrangeRed;text-shadow: #000000 0.1em 0.1em 0.3em;" href="?page=latestmodelcar"><b>LATEST MODEL CAR</b></a></strong><br /><a style="color:#000000;text-shadow: black 0.1em 0.1em 0.3em;" href="?page=latestmodelcar">View More</a></span>
            </li>
           
            
            <li class="sliderImage">
                <img src="PhotoGallery/galleryimage/carshowroom.png" alt="car showroom of bangladesh" />
                <span class="bottom"><strong><a style="color:OrangeRed;text-shadow: #0099da 0.1em 0.1em 0.3em;" href="#"><b>CAR SHOW ROOM</b></a></strong><br /> <a style="color:#ffffff;text-shadow: white 0.1em 0.1em 0.3em;" href="#">View More</a></span>
            </li>
            
            <li class="sliderImage">
                <img src="PhotoGallery/galleryimage/cngconversion.png" alt="cng conversion of bangladesh" />
                <span class="bottom"><strong><a style="color:OrangeRed;text-shadow: #0099da 0.1em 0.1em 0.3em;" href="#"><b>CNG CONVERSION</b></a></strong><br /> <a style="color:#ffffff;text-shadow: white 0.1em 0.1em 0.3em;" href="#">View More</a></span>
            </li>
            
            <li class="sliderImage">
                <img src="PhotoGallery/galleryimage/rentacar.png" alt="rent a car" />
                <span class="bottom"><strong><a style="color:OrangeRed;text-shadow: #0099da 0.1em 0.1em 0.3em;" href="#"><b>RENT-A-CAR</b></a></strong><br /> <a style="color:#000000;text-shadow: black 0.1em 0.1em 0.3em;" href="#">View More</a></span>
            </li>
            
            <li class="sliderImage">
                <img src="PhotoGallery/galleryimage/motorparts.png" alt="car motor parts" />
                <span class="bottom"><strong><a style="color:OrangeRed;text-shadow: #0099da 0.1em 0.1em 0.3em;" href="#"><b>MOTOR PARTS</b></a></strong><br /> <a style="color:#000000;text-shadow: black 0.1em 0.1em 0.3em;" href="#">View More</a></span>
            </li>
            
            <li class="sliderImage">
                <img src="PhotoGallery/galleryimage/cardecoration.png" alt="car decoration of bangladesh" />
                <span class="bottom"><strong><a style="color:OrangeRed;text-shadow: #0099da 0.1em 0.1em 0.3em;" href="#"><b>CAR DECORATION</b></a></strong><br /> <a style="color:#ffffff;text-shadow: white 0.1em 0.1em 0.3em;" href="#">View More</a></span>
            </li>
            
            <div class="clear sliderImage"></div>
        </ul1>
  
    </div>
    <!-- // slider -->
