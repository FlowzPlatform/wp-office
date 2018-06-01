<?php
/**
 * Altitude Pro.
 *
 * This file adds the landing page template to the Altitude Pro Theme.
 *
 * Template Name: Lead Generation Reps
 *
 * @package Altitude
 * @author  StudioPress
 * @license GPL-2.0+
 * @link    http://my.studiopress.com/themes/altitude/
 */
// Add custom body class to the head.
genesis();
?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<style>
 body{color:#000;font-family:"Ek Mukta",sans-serif}.site-header{background-color:rgba(0,0,0,0.9);opacity:0.7}.site-inner{margin-top:5px}.captainform_form{position:absolute !important;top:30px;right:0%;width:470px}#iFrameResizer2{opacity:0.8 !important;border-top-left-radius:7px;border-top-right-radius:7px}.header-text-container{font-family:"Raleway", sans-serif;font-weight:800}.section-heading{color:#22a1c4;font-weight:700}#services{padding:75px 0;background:#eeeeee}section p{font-weight:100 !important}.entry-content ol,.entry-content ul{margin-bottom:30px;margin-left:0px}header.masthead{text-align:center;color:#fff;background-repeat:no-repeat;background-attachment:scroll;background-position:center center;-webkit-background-size:cover;-moz-background-size:cover;-o-background-size:cover;background-size:cover}header.masthead .intro-text{padding-top:150px;padding-bottom:100px}header.masthead .intro-text .intro-lead-in{font-size:22px;font-style:italic;line-height:22px;margin-bottom:25px;font-family:'Droid Serif', 'Helvetica Neue', Helvetica, Arial, sans-serif}header.masthead .intro-text .intro-heading{width:58%;font-size:50px;font-weight:700;line-height:50px;margin-bottom:25px;font-family:Montserrat, 'Helvetica Neue', Helvetica, Arial, sans-serif}@media (min-width: 768px){header.masthead .intro-text{padding-top:300px;padding-bottom:200px}header.masthead .intro-text .intro-lead-in{font-size:40px;font-style:italic;line-height:40px;margin-bottom:25px;font-family:'Droid Serif', 'Helvetica Neue', Helvetica, Arial, sans-serif}header.masthead .intro-text .intro-heading{font-size:60px;line-height:75px;margin-bottom:50px;font-family:"Raleway", sans-serif;font-weight:800;text-align:left;position:relative;bottom:-240px;text-shadow:0 0 17px rgba(0, 0, 0, 1);margin-left:-12px}}.service-heading{margin:15px 0;text-transform:none}.demo-form{position:absolute;right:70px;top:100px;background-image:url(<?php echo esc_url( get_template_directory_uri() );?>/img/form-bg.png); background-repeat:no-repeat;background-attachment:scroll;background-position:center center;-webkit-background-size:cover;-moz-background-size:cover;-o-background-size:cover;background-size:cover}legend.text-center.header{font-family:'ralewayblack';font-size:53px;text-transform:uppercase;padding:0;margin:0;padding-top:43px}legend.text-center.header img{position:relative;top:-11px}.service-txt.text-center{font-family:'ralewaybold';margin-bottom:50px;font-size:21px}.demo-form{border-radius:5px}form.form-horizontal input,.form-control{border-radius:0px;margin-bottom:26px}.demo-form .btn-primary{margin:25px 0 34px 0px;text-transform:uppercase;background-color:#ffa200;font-size:25px}header.masthead{border-bottom:14px solid #0e84a5}ul.info{padding-left:0px}ul.info li{list-style-type:none;font-weight:100;font-size:18px;line-height:26px}section p{font-weight:600;font-size:18px;line-height:26px}.comment{border-left:14px solid #eeaa26;padding-left:19px;color:#999999;margin:40px 0px}.comment h2{font-size:25px}.comment i{font-weight:600;font-size:18px}.learn{margin-top:10px}.learn a{color:#22a1c4}.testimonial{background:#eeaa26;color:#FFF;padding:28px}.testimonial-main{background:#eeaa26}.get-started.text-center{background-image:url(https://www.officebeacon.com/wp-content/uploads/2017/10/get-started-bg.png);background-repeat:no-repeat;background-attachment:scroll;background-position:center center;min-height:284px}.get-started h2{color:#FFF;font-family:'arial';padding:43px 0px 32px 0px;font-weight:100;font-size:43px}.get-started a{background:#FFF;color:#22a1c4;border-radius:5px;text-decoration:none;padding:19px 15px;font-size:29px;font-weight:700}.get-started h2 span{font-weight:800}.testimonial-main{background:#eeaa26;margin-right:0px;margin-left:0px;margin:63px 0px}.lead-gen{background-image:url(https://www.officebeacon.com/wp-content/uploads/2017/10/lead-gen.png);background-repeat:no-repeat;background-attachment:scroll;background-position:center center}.lead-gen{text-align:center}.lead-gen img{padding-top:37px}.lead-gen h2{color:#FFF;font-size:19px;padding:30px 0px}p.detail{padding:15px;background:#FFF;font-size:17px}.inner-graphic img{padding:18px}.graphic{width:100%}.inner-graphic{float:left;width:20%;background:#22a1c4;border-right:2px solid #fff;min-height:101px}.graphic-text h3{font-size:17px;padding:11px 10px 5px 10px;color:#FFF;text-transform:uppercase;margin-bottom:0px}.graphic-text{float:left;width:249px;font-size:14px;background:#22a1c4}.graphic-text p{color:#FFF;font-size:15px;line-height:18px;margin-left:10px;font-weight:100}.graphic-text{float:left;width:80%;font-size:14px;background:#22a1c4;border-bottom:2px solid #FFF}.block:before{content:url('https://www.officebeacon.com/wp-content/uploads/2017/10/blockquote-up.png');margin-right:9px}.block:after{content:url('https://www.officebeacon.com/wp-content/uploads/2017/10/blockquote-down.png');margin-left:9px}.block{border-left:none}.name{float:right;text-align:right;font-weight:700}.no-pdding{padding-left:0;padding-right:0}.block{margin:0 0 1rem;font-size:20px !important}.play-video-block{height:180px !important}
.block p {
    color: #fff;
}


@media (min-width: 1500px) {
	.container { width: 1190px !important; }
}
@media (max-width: 767px) {
	.free {
    font-size: 20px !important;
}
.full-height .headline img{
	width:12%;
}
header.masthead .intro-text .intro-heading {
      width: auto;
    }
    .captainform_form {

position: INITIAL !important;
top: 0;
right: 0%;
width: AUTO;
}
header.masthead .intro-text .intro-heading {
width: auto;
font-size: 30px;
font-weight: 700;
line-height: 35px;
margin-bottom: 25px;
font-family: Montserrat,'Helvetica Neue',Helvetica,Arial,sans-serif;
text-shadow: 0 0 17px rgba(0,0,0,1);
padding-top: 21px;
}
header.masthead .intro-text {
padding-top: 0;
padding-bottom: 0;
}
.demo-form {
position: initial;
}


.get-started a {
background: #FFF;
color: #22a1c4;
border-radius: 5px;
text-decoration: none;
padding: 19px 15px;
font-size: 13px;
font-weight: 700;
}
.get-started h2 {
color: #FFF;
font-family: 'arial';
padding: 43px 0px 32px 0px;
font-weight: 100;
font-size: 22px;
}
.inner-graphic {
float: left;
width: 100%;
background: #22a1c4;
border-right: 0;
min-height: 101px;
}
.graphic-text h3{
font-size: 17px;
padding: 11px 10px 5px 10px;
color: #FFF;
text-transform: uppercase;
margin-bottom: 0px;
}
.graphic-text {
float: left;
width: 100%;
font-size: 14px;
background: #22a1c4;
border-bottom: 2px solid #FFF;
}
.graphic {
width: 100%;
text-align: center;
}
header.masthead .intro-text .intro-heading{
text-shadow: none;
color: #505050;
}


}
</style>   