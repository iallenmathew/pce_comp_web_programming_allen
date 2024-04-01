<?php
session_start(); 
// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
    // Redirect to login page if not logged in
    header("Location: login.php");
    exit;
}
?>

<html>
  <header>
    <nav class="navbar">
      <a href="#"><img src="https://res.cloudinary.com/tribune-blog/image/upload/v1706884669/lo_ve_shfos2.png" class="logo"></a>
      <ul class="sidebar">
        <a href="#" onclick="hideSidebar()"><img src="https://i.ibb.co/rt3HybH/close.png" height="20"></a>
        <a href="index.php">HOME</a>
        <a href="about.php">ABOUT</a>
        <a href="login.php">LOGIN</a>
        <a href="contact.php">CONTACT</a>
        
      </ul>
      <ul>
        <a href="index.php" class="hideonmobile">HOME</a>
        <a href="about.php" class="hideonmobile">ABOUT</a>
        <a href="logout.php" class="hideonmobile">LOGOUT</a>
        <a href="contact.php" class="hideonmobile">CONTACT</a>
        <a href="#" onclick="showSidebar()"  class="menu-button"><img src="https://i.ibb.co/HrfVRcx/menu.png" height="20"></a>
      </ul>
    </nav>
  </header><article>
  <h1>India's fastest Cheetah</h1>
   <h2>250,000 people fill the streets in one of the largest protests in city history</h2>
  <h3>By Animal Planet <time>March 3, 2024</time></h3>

  <p><strong>DOWNTOWN —</strong> Last September, eight radio-collared cheetahs made the 5,000-mile-long journey from Namibia to India, eventually landing at Kuno National Park in the central state of Madhya Pradesh. Their arrival marked the final phase of a 13-year-long effort called Project Cheetah, which aims to reintroduce the big cat species to India’s grasslands 70 years after they were hunted into oblivion. 

The project’s launch also coincided with the 72nd birthday of Indian Prime Minister Narendra Modi, who celebrated by personally releasing the first cat from its crate into the park. “Decades ago, the age-old link of biodiversity that was broken and became extinct, today we have a chance to restore it, ” Modi said in his address. “Today, the cheetah has returned to the soil of India.”</p>

  <p>Asiatic cheetahs once roamed the grasslands of the Indian subcontinent for many centuries alongside lions, tigers, and leopards until they became a hunting target of princely rulers and British colonizers. In 1952, they were officially declared extinct in India.

Since then, India has held many discussions on how to reintroduce the animal back to its ecosystem and considered offers from the governments of Iran and Kenya. In 2009, the Indian government officially proposed the introduction of African cheetahs, but the Supreme Court halted these efforts in 2012 after some wildlife experts said importing African animals violated international conservation standards. The top court reversed its decision in early 2020, allowing the import of cheetahs—but in small numbers and on an experimental basis.


Ensuring Project Cheetah’s success is also “a matter of national pride,” adds Yadav, nodding to the Modi government’s aspirations to grow India’s wealth and scientific knowledge. During the cheetahs’ release last September, Modi told spectators that “along with these cheetahs, the nature-loving consciousness of India has also awakened with full force.”

In a statement, Laurie Marker, the executive director of the Cheetah Conservation Fund, which is also advising the project in India, said global conservationists saw the project as central to “ensuring cheetah survival transcends national boundaries.”</p>

  <figure>
    <video width="500" height="240" controls> //autoplay muted for autoplay
  <source src="https://res.cloudinary.com/tribune-blog/video/upload/v1711550979/pexels-nicky-pe-13956259_1080p_kroqko.mp4" type="video/mp4">
    <figcaption>"Ensuring Project Cheetah’s success is also “a matter of national pride,” adds Yadav, nodding to the Modi government’s aspirations to grow India’s wealth and scientific knowledge. During the cheetahs’ release last September, Modi told spectators that “along with these cheetah"</figcaption>
  </figure>

  <p>ow India’s wealth and scientific knowledge. During the cheetahs’ release last September, Modi told spectators that “along with these cheetahs, the nature-loving consciousness of India has also awakened with full force.”</p>

  <p>The march was not the biggest protest in the city's history, though: That honor goes to a May 1, 2006, demonstration that saw an estimated 400,000 people march against anti-immigration laws.</p>

  <blockquote>A Sound of Cheetah <cite>Animal Planet</cite>
    <audio controls autoplay src="https://res.cloudinary.com/tribune-blog/video/upload/v1709371382/trumpet-sound-of-an-elephant-154720_jlonbs.mp3"></audio>
  </blockquote>
  
  <p>Ensuring Project Cheetah’s success is also “a matter of national pride,” adds Yadav, nodding to the Modi government’s aspirations to grow India’s wealth and scientific knowledge. During the cheetahs’ release last September, Modi told spectators that “along with these cheetahs, the nature-loving consciousne<p>

</article>

<footer>
    <p class="tinytext doublewide"><strong>ANIMAL PLANET</strong> A Web Programming Project 
      <a href="https://www.dnainfo.com/chicago/20170121/downtown/womens-march-on-chicago-thousands-unite-for-women-protest-donald-trump" target="_blank">Blog on India's fastest Cheetah</a>
      <a href="https://www.dnainfo.com/chicago/20170123/downtown/womens-march-chicago-turnout-protest-history" target="_blank">Blog on Worlds Beauty of The Sea</a>
    </p>
 
    <p class="tinytext"><strong>Contribution:</strong>Project of <a href="#" target="_new">Alen,Vighnesh,Siddharth</a> is from S.Y CS Engineering from Pillai College of Engineering</p>
    
    <p class="tinytext"><strong>Photo:</strong>Taken from Pexels Website</p>
</footer>
</html>

<style>

/* First! Load any custom fonts */
@import url('https://fonts.googleapis.com/css?family=Montserrat:400,400i,700');

article{
    font-family: 'Montserrat';

    padding: 10%;
}

h1{
    font-size: 15vw;
    font-weight: 700;
    line-height: .8;
    margin-top:0;
    letter-spacing: -1vw;

    color: tomato;
}

h2{
    font-size: 3vw;

    padding: 2vw;

    text-align: center;

    color: white;
    background-color: tomato;
}

h3{
    font-size: 14px;
    line-height: 2;

    text-align: right;
    text-transform: uppercase;

    color: silver;
    background-color: black;
}

time{
    margin-left: 20px;
    padding-right: 10px;
}

p{
    font-size: calc(16px + .5vw);
/*  font-size: 16px; */
/*  font-size: 2vw;  */
    line-height: 1.4;

    color: gray;
}

strong{
    font-size: 80%;
    color:rgba(255,0,0,.5);
/*  color:tomato; */
}

/* You can group selectors (comma separated list) for any elements that share the same rules  */
p,figure,blockquote{
    margin-top: 20px;
}

figcaption{
    font-size: 12px;
    line-height: 1.5;

    margin-top: 10px;
    padding-bottom: 10px;

    color: #00abcd;
    border-bottom: 1px solid skyblue;
}

img{
    width: 100%;

    border: 1px solid skyblue;
}

blockquote{
    font-size: 10vw;
    font-weight: 700;
    line-height: .6;

    padding: 30px 0 15px 10px;

    letter-spacing: -.2vw;
    text-transform: uppercase;

    color: white;
    border-left: 10px solid tomato;
    background-color: rgba(255,0,0,.4);
    text-shadow: 0 -5px 20px maroon;
}

cite{
    font-size: 30%;
    font-weight: 400;
    line-height: 1;

    display: inline-block;

    width: 7ch;

    text-transform: none;

    color: red;
    text-shadow: none;
}

/* Use CSS3's New FlexBox to easily create a multi-column design */
footer{
    display: flex;
    justify-content: space-around;

    padding-bottom: 10vw;
    background-color: black;
}

/* HTML ".Classes" let you target elements that share a common style making it easy to tweak the dsign of all paragraphs that appear only in the footer area.*/

.tinytext{
    width: 20%;
  
    font-family: Georgia;
    font-size: 14px;
    line-height: 18px;
    
    color: silver;
}
/* Using spaces creates a selector "path" to elements that are nested inside another.*/

.tinytext strong{
    font-family: 'Montserrat';
    font-size: 150%;

    display: block;

    margin-top: 1em;
    margin-bottom: .5em;

    letter-spacing: .3em;
    text-transform: uppercase;

    color: gray;
}

.tinytext a{
    font-style: italic;

    transition: color .5s ease;
    text-decoration: none;

    color: white;
}

.tinytext a:hover{
    color: tomato;
}

/* Multiple classes on a single element are allowed. Here we are tweaking the first footer paragraph so it is wider and the links stand-out. */
.doublewide{
      width: 40%;
}

.doublewide a{
  display: block;
  margin-top: .5em;  
}

.doublewide a:before{
  content:"•"; 
  padding-right: 1em;
}



.navbar{
  height:100px;
  background-color:black;
}
.navbar .logo{
margin-top:20px;
margin-left:1%;
width:12rem;
}
.navbar ul{
  float:right;
  margin-top:40px;
  margin-right:20px;
  
}
.navbar ul a{
  padding:20px;
  font-size:15px;
  text-decoration:none;
  color:white;
}

body {
  font-family: "Quicksand", sans-serif;
  font-weight: 400;
}

.container {
	padding: 2rem;
}

.slider-wrapper {
	position: relative;
	max-width: 48rem;
	margin: 0 auto;
}

.slider {
	display: flex;
	aspect-ratio: 16 / 9;
	overflow-x: auto;
	scroll-snap-type: x mandatory;
	scroll-behavior: smooth;
	box-shadow: 0 1.5rem 3rem -0.75rem hsla(0, 0%, 0%, 0.25);
	border-radius: 0.5rem;
	-ms-overflow-style: none; /* Hide scrollbar IE and Edge */
	scrollbar-width: none; /* Hide scrollbar Firefox */
}

/* Hide scrollbar for Chrome, Safari and Opera */
.slider::-webkit-scrollbar {
	display: none;
}

.slider img {
	flex: 1 0 100%;
	scroll-snap-align: start;
	object-fit: cover;
}

.slider-nav {
	display: flex;
	column-gap: 1rem;
	position: absolute;
  margin-top:10px;
	left: 50%;
	transform: translateX(-50%);
	z-index: 1;
}

.slider-nav a {
	width: 0.5rem;
	height: 0.5rem;
	border-radius: 50%;
	background-color: #fff;
	opacity: 0.75;
	transition: opacity ease 250ms;

}

.slider-nav a:hover {
	opacity: 1;
}

.menu-button{
  display:none;
}


.sidebar{
    position:fixed;
    top:0;
    right:0;
    height:100vh;
    backdrop-filter:blur(10px);
    width:250px;
    z-index:999;
    background-color:rgba(255,255,255,0.1);
    box-shadow:-10px 0 10px rgba(0,0,0,0.1);
    display:none;
    flex-direction:column;
    align-tems:flex-start;
    justify-content:flex-start;
  }

.navbar .sidebar a{
  background-color:transparent;
}


@media (max-width:673px)
{
  .hideonmobile{
    display:none;
  }
  .menu-button{
  display:block;
  margin-top:-25px;
}
  }

  
@media (max-width:400px)
{
  .sidebar{
    width:90%;
  }
  }

</style>

<script>
function showSidebar(){
  const sidebar= document.querySelector('.sidebar')
  sidebar.style.display='flex'
}

function hideSidebar(){
  const sidebar= document.querySelector('.sidebar')
  sidebar.style.display='none'
}
</script><?php
session_start(); 
// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
    // Redirect to login page if not logged in
    header("Location: login.php");
    exit;
}
?>


<script>
function showSidebar(){
  const sidebar= document.querySelector('.sidebar')
  sidebar.style.display='flex'
}

function hideSidebar(){
  const sidebar= document.querySelector('.sidebar')
  sidebar.style.display='none'
}
</script>