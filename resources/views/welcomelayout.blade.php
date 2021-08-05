<!DOCTYPE html>
<html>
<head>
<title>New Science World</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.gooleapis.com/css? family=Kaushan+Script|Poppins&display=swap" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
    

<style type="text/css" >
// @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap');
*
{
    margin: 0;
    padding: 0;
    font-family: "Poppins", sans-serif;
}
.signup{

padding-top: 10px;
position: absolute;
right: 280px;
top: 20px;
display: inline-block;
}
.signupbtn{
font-size: 20px;
//font-family: "Kaushan Script", cursive;
color: #ffffff ;
}
#banner
{
    background: linear-gradient(rgba(0, 0, 0, 0.5),#009688), url("image/banner01.jpg") ;
    background-size: cover;
    background-position: center;
    height: 100vh;
}
.logo
{
    width: 140px;
    position: absolute;
    top: 2%;
    left: 10%;
}
.banner-text
{
    text-align: center;
    color: #fff;
    padding-top: 40px;
}
.banner-text h1
{
    font-size: 130px;
    font-family: "Kaushan Script", cursive;
}
.banner-text p
{
    font-size: 20px;
    font-style: italic;
}
.banner-btn
{
    margin: 70px  auto 0;
}
.banner-btn a
{
    width: 150px;
    text-decoration: none;
    display: inline-block;
    margin: 0 10px;
    padding: 12px 0;
    color: #fff;
    border: .5px solid #fff;
    position: relative;
    z-index: 1;
    transition: color 0.5s;
}
.banner-btn a span
{
width: 0;
height: 100%;
position: absolute;
top: 0;
left: 0;
background: #fff;
z-index: -1;
transition: 0.5s;
}
.banner-btn a:hover span
{
    width: 100%;
}
.banner-btn a:hover
{
    color: #000;
}
#sideNav
{
    width: 250px;
    height: 100vh;
    position: fixed;
    right: -250px;
    top: 0;
    background: #009688;
    z-index: 2;
    transition: 0.5s;
}
nav ul li
{
    list-style: none;
    margin: 50px 20px;
}
nav ul li a
{
    text-decoration: none;
    color: #fff;
}
#menuBtn
{
    width: 50px;
    height: 50px;
    background: #009688;
    text-align: center;
    position: fixed;
    right: 30px;
    top: 20px;
    border-radius: 3px;
    z-index: 3;
    cursor: pointer;
}
#menuBtn img
{
    width: 20px;
    margin-top: 15px;
}
@media screen and (max-width: 770px)
{
    .banner-text h1
{
    font-size: 44px;
}
.banner-btn a
{
    display: block;
    margin: 20px auto;
}
}

/*--features--*/
#feature
{
    width: 100%;
    padding: 70px 0;
}
.title-text
{
    text-align: center;
    padding-bottom: 70px;
}
.title-text p
{
    margin: auto;
    font-size: 20px;
    color: #009688;
    font-weight: bold;
    position: relative;
    z-index: 1;
    display: inline-block;
}
.title-text p::after
{
    content: "";
    width: 50px;
    height: 35px;
    background: linear-gradient(#019587, #fff);
    position: absolute;
    top: -20px;
    left: 0;
    z-index: -1;
    transform: rotate(10deg);
    border-top-left-radius: 35px;
    border-bottom-right-radius: 35px;
}
.title-text h1
{
   font-size: 50px;
}
.feature-box
{
    width: 80%;
    margin: auto;
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    text-align: center;
}
.features
{
    flex-basis: 50%;
}
.features-img
{
    flex-basis: 50%;
    margin: auto;
}
.features-img img
{
    width: 70%;
    border-radius: 10px;
}
.features h1
{
    text-align: left;
    margin-bottom: 10px;
    font-weight: 100;
    color: #009688;
}
.features-desc
{
    display: flex;
    align-items: center;
    margin-bottom: 40px;
}
.feature-icon .fa
{
    width: 50px;
    height: 50px;
    font-size: 30px;
    line-height: 50px;
    border-radius: 8px;
    color: #009688;
    border: 1px solid #009688;
}
.feature-text p
{
    padding: 0 20px;
    text-align: initial;
}
@media screen and (max-width: 770px)
{
    .title-text h1
    {
        font-size: 35px;
    }
    .features
    {
        flex-basis: 100%;
    }
    .features-img
    {
        flex-basis: 100%;

    }
    .features-img img
    {
        width: 100%;
    }
}

/*service*/
#service
{
    width: 100%;
    padding: 70px 0;
    background: #efefef;
}
.service-box
{
    width: 80%;
    display: flex;
    flex-wrap: wrap;
    justify-content: space-around;
    margin: auto;
}
.single-service
{
    flex-basis: 48%;
    text-align: center;
    border-radius: 7px;
    margin-bottom: 20px;
    color: #fff;
    position: relative;
}
.single-service img
{
    width: 100%;
    border-radius: 7px;
}
.overlay
{
    width: 100%;
    height: 100%;
    position: absolute;
    top: 0;
    border-radius: 7px;
    cursor: pointer;
    background: linear-gradient(rgba(0, 0, 0, 0.5),#009688);
    opacity: 0;
    transition: 1s;
}
.single-service:hover .overlay
{
    opacity: 1;
}
.service-desc
{
    width: 50%;
    position: absolute;
    bottom: 0;
    left: 50%;
    opacity: 0;
    transform: translateX(-50%);
    transition: 1s;
}
hr
{
    background: #fff;
    height: 2px;
    border: 0;
    margin: 15px auto;
    width: 60%;
}
.service-desc p{
    font-size: 14px;
}
.single-service:hover .service-desc
{
    bottom: 40%;
    opacity: 1;
}

@media screen and (max-width: 770px)
{
    .single-service
    {
        flex-basis: 100%;
        margin-bottom: 30px;
    }
    .service-desc p
    {
        font-size: 12px;
    }
    hr
    {
        margin: 5px auto;
    }
    .single-service:hover .service-desc
    {
        bottom: 25% !important;
    }
}

/*testimonial*/
#testimonial
{
    width: 100%;
    padding: 70px 0;
}
.testimonial-row
{
    width: 80%;
    margin: auto;
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    flex-wrap: wrap;
}
.testimonial-col
{
    flex-basis: 28%;
    padding: 10px;
    margin-bottom: 30px;
    border-radius: 5px;
    box-shadow: 0 10px 20px 3px #00968814;
    cursor: pointer;
    transition: transform .5s;
}
.testimonial-col p
{
    font-size: 14px;
}

.user
{
    display: flex;
    align-items: center;
    margin: 20px 0;
}
.user img
{
    width: 40px;
    margin-right: 20px;
    border-radius: 3px;
}
.user-info .fa
{
    margin-left: 10px;
    color: #27c0ff;
    font-size: 20px;
}
.user-info small
{
     color: #009688;
}
.testimonial-col:hover
{
    transform: translateY(-7px);
}

@media screen and (max-width: 770px)
{
    .testimonial-col{
        flex-basis: 100%;
    }
}

/*footer*/
#footer
{
    padding: 100px 0 20px;
    background: #efefef;
    position: relative;
}
.footer-row
{
    width: 80%;
    margin: 0 auto;
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
}
.footer-left, .footer-right
{
    flex-basis: 45%;
    padding: 10px;
    margin-bottom: 20px;
}
.footer-right
{
    text-align: right;
}
.footer-row h1
{
    margin: 10px 0;
}
.footer-row p
{
    line-height: 35px;
}
.footer-left .fa, .footer-right .fa
{
    font-size: 20px;
    color: #009688;
    margin: 10px;
}
.footer-img
{
    max-width: 370px;
    opacity: 0.1;
    position: absolute;
    left: 50%;
    top: 35%;
    transform: translate(-50%, -50%);
}

.social-links
{
    text-align: center;
}
.social-links .fa
{
    height: 40px;
    width: 40px;
    font-size: 20px;
    line-height: 40px;
    border: 1px solid #009688;
    margin: 40px 5px 0;
    color: #009688;
    cursor: pointer;
    transition: 0.5s;
}
.social-links .fa:hover{
    background: #009688;
    color: #fff;
    transform: translateY(-7px);
}
.social-links p
{
    font-size: 12px;
    margin-top: 20px;
}

@media screen and (max-width: 770px)
{
    .footer-left, .footer-right
    {
        flex-basis: 100%;
        font-size: 14px;
    }
    .footer-img{
        top: 25%;
    }
}
</style>
<body>
<div class=”container”>  
@yield('content')
</div>
</body>
<script>
    var menuBtn = document.getElementById("menuBtn")
    var sideNav = document.getElementById("sideNav")
    var menu = document.getElementById("menu")

    sideNav.style.right = "-250px";

    menuBtn.onclick = function(){
        if(sideNav.style.right=="-250px"){
            sideNav.style.right = "0";
            menu.src = "{{ asset('image/close01.png') }}";
        }
        else{
            sideNav.style.right = "-250px";
            menu.src = "{{ asset('image/menu01.png') }}" ;
        }
    }
    var scroll = new SmoothScroll('a[href*="#"]', {
        speed: 1000,
        speedAsDuration: true
    });
</script>

</head>