<style>
/* Main navigation block element */
#cssmenu{
height:37px;
display:block;
padding:0;
margin:20px auto; 
border:1px solid;
border-radius:5px;
}

#cssmenu > ul {list-style:inside none; padding:0; margin:0;}
#cssmenu > ul > li {list-style:inside none; padding:0; margin:0; float:left; display:block; position:relative;}

/* Styling navigation links */
#cssmenu > ul > li > a{
outline:none;
display:block;
position:relative;
padding:12px 20px;
font:bold 13px/100% Arial, Helvetica, sans-serif;
text-align:center;
text-decoration:none;
text-shadow:1px 1px 0 rgba(0,0,0, 0.4);
}

#cssmenu > ul > li:first-child > a{border-radius:5px 0 0 5px;}


/* Extra border for navigation links */
#cssmenu > ul > li > a:after{
content:'';
position:absolute;
border-right:1px solid;
top:-1px; bottom:-1px; right:-2px;
z-index:99;
}
#cssmenu ul li.has-sub:hover > a:after{top:0; bottom:0;}

/* Bullet for dropdowns */
#cssmenu > ul > li.has-sub > a:before{
content:'';
position:absolute; top:18px; right:6px;
border:5px solid transparent;
border-top:5px solid #fff;
}
#cssmenu > ul > li.has-sub:hover > a:before{top:19px;}

/* Hover state styles for drop menu link */
#cssmenu ul li.has-sub:hover > a{
background:#3f3f3f;
border-color:#3f3f3f;
padding-bottom:13px; padding-top:13px;
top:-1px;
z-index:999;
}

/* Show dropdown when hover */
#cssmenu ul li.has-sub:hover > ul, #cssmenu ul li.has-sub:hover > div{display:block;}
#cssmenu ul li.has-sub > a:hover{background:#3f3f3f; border-color:#3f3f3f;}

/* Dropdown styles */
#cssmenu ul li > ul, #cssmenu ul li > div{
display:none; width:auto;
position:absolute; top:38px;
padding:10px 0;
background:#3f3f3f;
border-radius:0 0 5px 5px;
z-index:999;
}

/* Dropdown list style */
#cssmenu ul li > ul{width:200px;}
#cssmenu ul li > ul li{display:block; list-style:inside none; padding:0; margin:0; position:relative;}
#cssmenu ul li > ul li a{
outline:none; display:block;
position:relative;
margin:0; padding:8px 20px;
font:10pt Arial, Helvetica, sans-serif; color:#fff;
text-decoration:none;
text-shadow:1px 1px 0 rgba(0,0,0, 0.5);
}

/* Dropdown box styles */
#cssmenu ul li > div{width:auto; padding:20px;}
#cssmenu ul li > div p{
font:9pt/150% Arial, Helvetica, sans-serif; color:#fff;
text-align:justify;
text-shadow:1px 1px 0 rgba(0,0,0,0.5);
margin:0;
}

#cssmenu ul li > div h1{
position:relative;
margin:0 0 12px 0;
padding-bottom:10px;
border-bottom:1px solid #222;
font:bold 13pt Arial, Helvetica, sans-serif; color:#bbb;
text-shadow:1px 1px 0 rgba(0,0,0,0.5);
}
#cssmenu ul li > div h1:after{
content:'';
height:0; padding:0;
position:absolute; bottom:-2px; left:0; right:0;
border-bottom:1px solid #555;
}

/* ---------------- Styles ----------------- */


/* Gray */
#cssmenu, 
#cssmenu > ul > li > ul > li a:hover{
background:#d5d5d5;
background:-moz-linear-gradient(top, #d5d5d5 0%, #c5c5c5 100%);
background:-webkit-gradient(linear, left top, left bottom, color-stop(0%,#d5d5d5), color-stop(100%,#c5c5c5));
background:-webkit-linear-gradient(top, #d5d5d5 0%,#c5c5c5 100%);
background:-o-linear-gradient(top, #d5d5d5 0%,#c5c5c5 100%);
background:-ms-linear-gradient(top, #d5d5d5 0%,#c5c5c5 100%);
background:linear-gradient(top, #d5d5d5 0%,#c5c5c5 100%);
filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#d5d5d5', endColorstr='#c5c5c5',GradientType=0);
}
#cssmenu {border-color:#888;}
#cssmenu > ul > li > a{border-right:1px solid #888; color:#fff;}
#cssmenu > ul > li > a:after{border-color:#e5e5e5;}
#cssmenu > ul > li > a:hover{background:#bbb;}

</style>
<div id='cssmenu'>
<ul>
   <li class='active '><a href='index.html'><span>Home</span></a></li>
   <li class='has-sub '><a href='#'><span>Products</span></a>
      <ul>
         <li><a href='#'><span>Product 1</span></a></li>
         <li><a href='#'><span>Product 2</span></a></li>
      </ul>
   </li>
   <li><a href='#'><span>About</span></a></li>
   <li><a href='#'><span>Contact</span></a></li>
</ul>
</div>

<!--//_______________________________________________________________________________//-->



<!--//_______________________________________________________________________________//-->

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>A Different Top Nav</title>
<style>
    html, body {
    background: #2d2620;
    text-align: center;
    margin: 0px;
    height: 100%;
    width: 100%;
}
#wrap {
    margin-left: auto;
    margin-right: auto;
    width: 900px;
    position: relative;
    background: url(body.png) center no-repeat;
    min-height: 600px;
}
#body-image {
    margin-top: 60px;
}
#main-nav {
    margin: 0px 0px 0px 2px;
    text-align: left;
    min-height: 25px;
    padding-top: 10px;
    padding-left: 0px;
}
#main-handle {
    width: 605px;
    float: right;
    margin-top: -1px;
}
#main-nav li {
    display: inline;
    list-style: none;
}
#main-nav li a {
    margin-right: 5px;
    font-size: 15px;
    text-decoration: none;
    color: #f2f2f2;
    font-family: Arial, Helvetica, sans-serif;
    text-transform: uppercase;
    font-weight: bold;
    padding: 10px;
    outline: 0;
    position: relative;
    top: -2px;
}
#main-nav li a:hover, #main-nav li a.active {
    background: #514539;
}
#sub-link-bar {
    background: #514539;
    min-height: 10px;
    border-bottom: #645546 1px solid;
}
.sub-links {
    display: none;
    position: absolute;
    width: 100%;
    top: -30px;
    text-align: left;
    left: 0px;
}
#main-nav li .sub-links li a:hover{
    background: #2d2620;
}
#main-nav li a.close{
    display: none;  
    position: absolute;
}
#main-nav li a.close:hover{
    background: #900;
}
</style>
</head>
<body>
<div id="sub-link-bar"> </div>
<!-- End sub-link-bar -->
<div id="wrap">
  <div id="main-handle">
    <div class="roundfg">
      <ul id="main-nav">
        <li><a class="main-link" href="http://net.tutsplus.com/">Home</a>
            <ul class="sub-links">
                <li><a class="main-link" href="http://net.tutsplus.com/">Home</a></li>
            </ul>
        </li>
        <li><a class="main-link" href="http://net.tutsplus.com/category/tutorials/">Tutorials</a>
          <ul class="sub-links">
            <li><a href="http://net.tutsplus.com/category/tutorials/design-tutorials/" title="View all posts filed under Design">Design</a> </li>
            <li><a href="http://net.tutsplus.com/category/tutorials/html-css-techniques/" title="View all posts filed under HTML & CSS">HTML & CSS</a> </li>
            <li><a href="http://net.tutsplus.com/category/tutorials/other/" title="View all posts filed under Other">Other</a> </li>
            <li><a href="http://net.tutsplus.com/category/tutorials/php/" title="View all posts filed under PHP">PHP</a> </li>
            <li><a href="http://net.tutsplus.com/category/tutorials/ruby/" title="View all posts filed under Ruby">Ruby</a> </li>
            <li><a href="http://net.tutsplus.com/category/tutorials/site-builds/" title="View all posts filed under Site Builds">Site Builds</a> </li>
            <li><a href="http://net.tutsplus.com/category/tutorials/tools-and-tips/" title="View all posts filed under Tools & Tips">Tools & Tips</a> </li>
            <li class="cat-item cat-item-35"><a href="http://net.tutsplus.com/category/tutorials/wordpress/" title="View all posts filed under Wordpress">Wordpress</a> </li>
          </ul>
        </li>
        <li><a class="main-link" href="http://net.tutsplus.com/category/articles/">Articles</a>
          <ul class="sub-links">
            <li ><a href="http://net.tutsplus.com/category/articles/general/" title="View all posts filed under General">General</a> </li>
            <li><a href="http://net.tutsplus.com/category/articles/interviews/" title="View all posts filed under Interviews">Interviews</a> </li>
            <li><a href="http://net.tutsplus.com/category/articles/news/" title="View all posts filed under News">News</a> </li>
            <li><a href="http://net.tutsplus.com/category/articles/web-roundups/" title="View all posts filed under Web Roundups">Web Roundups</a> </li>
          </ul>
        </li>
        <li><a class="main-link" href="http://net.tutsplus.com/category/freebies/">Freebies</a>
          <ul class="sub-links">
            <li><a href="http://net.tutsplus.com/category/freebies/books/" title="View all posts filed under Books">Books</a> </li>
            <li><a href="http://net.tutsplus.com/category/freebies/icons-freebies/" title="View all posts filed under Icons">Icons</a> </li>
            <li><a href="http://net.tutsplus.com/category/freebies/lightboxes/" title="View all posts filed under Lightboxes">Lightboxes</a> </li>
            <li><a href="http://net.tutsplus.com/category/freebies/others/" title="View all posts filed under Others">Others</a> </li>
            <li><a href="http://net.tutsplus.com/category/freebies/plugins/" title="View all posts filed under Plugins">Plugins</a> </li>
            <li><a href="http://net.tutsplus.com/category/freebies/themes/" title="View all posts filed under Themes">Themes</a> </li>
            <li><a href="http://net.tutsplus.com/category/freebies/tooltips/" title="View all posts filed under Tooltips">Tooltips</a> </li>
          </ul>
        </li>
        <li><a class="main-link" href="http://net.tutsplus.com/category/videos/">Videos</a>
            <ul class="sub-links">
            <li><a href="http://net.tutsplus.com/category/videos/screencasts/" title="Screencasts">Screencasts</a> </li>
            </ul>
        </li>
        <li><a class="main-link" href="http://net.tutsplus.com/about">About</a>
            <ul class="sub-links">
                <li><a href="http://net.tutsplus.com/about/" title="About">About</a></li> 
                <li><a href="http://tutsplus.com/join/" title="Join Plus">Join Plus</a></li> 
                <li><a href="http://net.tutsplus.com/about/rss-feeds/" title="RSS Feeds">RSS Feeds</a></li> 
                <li><a href="http://net.tutsplus.com/about/submissions/" title="Submit a Freebie">Submit a Freebie</a></li> 
                <li><a href="http://net.tutsplus.com/about/terms/" title="Terms">Terms</a></li> 
                <li><a href="http://net.tutsplus.com/about/write-a-tutorial/" title="Write a Tutorial">Write a Tutorial</a></li> 
            </ul>
        </li>
         <li><a class="close" title="Click to Collapse" href="#">X</a></li>
      </ul>
    </div>
    <!-- End roundfg -->
    <b class="round"> <b class="round5"></b> <b class="round4"></b> <b class="round3"></b> <b class="round2"><b></b></b> <b class="round1"><b></b></b></b> </div>
  <!-- End main-handle-->
 </div>
<!-- End wrap -->
</body>
</html>