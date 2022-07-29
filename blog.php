<?php
session_start();
require_once("includes/connection.php");
require_once("includes/head.php");
require_once("includes/main.php");
?>

<head>
    <meta charset="UTF-8" />
    <title>Blog</title>
   
    
</head>
<script>

</script>
<style>
.list-inline-item a{
        color: #000;
}
.page-timeline {
    margin: 30px auto 0 auto;
    position: relative;
    max-width: 1000px;
}

.page-timeline:before {
    position: absolute;
    content: '';
    top: 0;
    bottom: 0;
    left: 303px;
    right: auto;
    height: 100%;
    width: 3px;
    background: #9e212b;
    z-index: 0;
    
        -webkit-box-shadow: 0 2px 2px 0 rgba(0,0,0,0.2),0 6px 10px 0 rgba(0,0,0,0.3);
    box-shadow: 0 2px 2px 0 rgba(0,0,0,0.2),0 6px 10px 0 rgba(0,0,0,0.3);
}

.page-timeline:after {
    position: absolute;
    content: '';
    width: 3px;
    height: 40px;
    background: #9e212b;
    background: -webkit-linear-gradient(top, #9e212b, rgba(52, 152, 219, 0));
    background: linear-gradient(to bottom, #9e212b, rgba(52, 152, 219, 0));
    top: 100%;
    left: 303px;
    
        -webkit-box-shadow: 0 2px 2px 0 rgba(0,0,0,0.2),0 6px 10px 0 rgba(0,0,0,0.3);
    box-shadow: 0 2px 2px 0 rgba(0,0,0,0.2),0 6px 10px 0 rgba(0,0,0,0.3);
}

.vtimeline-content {
    margin-left: 350px;
    background: #fff;
    border: 1px solid #e6e6e6;
    padding: 35px 20px;
    border-radius: 3px;
    text-align: left;
    
    -webkit-box-shadow: 0 2px 2px 0 rgba(0,0,0,0.2),0 6px 10px 0 rgba(0,0,0,0.3);
    box-shadow: 0 2px 2px 0 rgba(0,0,0,0.2),0 6px 10px 0 rgba(0,0,0,0.3);
}

.vtimeline-content h3 {
    color: #000;
    font-size: 1.5em;
    font-weight: 600;
    display: inline-block;
    margin: 0;
}

.vtimeline-content p {
    color: #000;
    font-size: 0.9em;
    margin: 0;
}

.vtimeline-point {
    position: relative;
    display: block;
    margin-bottom: 30px;
}

.vtimeline-icon {
    position: relative;
    color: #fff;
    width: 50px;
    height: 50px;
    background: #9e212b;
    border-radius: 50%;
    float: left;
    text-align: center;
    line-height: 50px;
    z-index: 99;
    margin-left: 280px;
}

.vtimeline-icon i {
    display: block;
    font-size: 1.5em;
    line-height: 50px;
    
}

.vtimeline-date {
    width: 260px;
    text-align: right;
    position: absolute;
    left: 0;
    top: 10px;
    font-weight: 400;
    color: #374054;
}
.post-meta {
    padding-top: 15px;
    margin-bottom: 20px;
}
.post-meta li:not(:last-child) {
    margin-right: 10px;
}
h3 {
    font-family: "Montserrat", sans-serif;
    color: #1225;
    font-weight: 700;
    font-variant-ligatures: common-ligatures;
    margin-top: 0;
    letter-spacing: -0.2px;
    line-height: 1.3;
}
.mb20 {
    margin-bottom: 20px !important;
}
</style>

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<div class="container mb80">
    <div class="page-timeline">
        <div class="vtimeline-point">
            <div class="vtimeline-icon">
                <i class="fa fa-image"></i>
            </div>
            <div class="vtimeline-block">
                <span class="vtimeline-date">juillet 12, 2022</span><div class="vtimeline-content">
                    <a href="#"><img src="./images/Blog/B1.png" alt="" class="img-fluid mb20"></a>
                    <a href="#"><h3>Standard post title</h3></a>
                    <ul class="post-meta list-inline">
                        <li class="list-inline-item">
                            <i class="fa fa-user-circle-o"></i> <a href="#">Soulaimane elamini</a>
                        </li>
                        <li class="list-inline-item">
                            <i class="fa fa-calendar-o"></i> <a href="#">12 juillet 2022</a>
                        </li>
                        <li class="list-inline-item">
                            <i class="fa fa-tags"></i> <a href="#">Ordishop</a>
                        </li>
                    </ul>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur in iaculis ex. Etiam volutpat laoreet urna. Morbi ut tortor nec nulla commodo malesuada sit amet vel lacus. Fusce eget efficitur libero. Morbi dapibus porta quam laoreet placerat.
                    </p><br>
                    
                </div>
            </div>
        </div>

        
        <div class="vtimeline-point">
            <div class="vtimeline-icon">
                <i class="fa fa-image"></i>
            </div>
            <div class="vtimeline-block">
                <span class="vtimeline-date">juillet 12, 2022</span><div class="vtimeline-content">
                    <a href="#"><img src="./images/Blog/B2.png" alt="" class="img-fluid mb20"></a>
                    <a href="#"><h3>Standard post title</h3></a>
                    <ul class="post-meta list-inline">
                        <li class="list-inline-item">
                            <i class="fa fa-user-circle-o"></i> <a href="#">Soulaimane elamini</a>
                        </li>
                        <li class="list-inline-item">
                            <i class="fa fa-calendar-o"></i> <a href="#">12 juillet 2022</a>
                        </li>
                        <li class="list-inline-item">
                            <i class="fa fa-tags"></i> <a href="#">Ordishop</a>
                        </li>
                    </ul>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur in iaculis ex. Etiam volutpat laoreet urna. Morbi ut tortor nec nulla commodo malesuada sit amet vel lacus. Fusce eget efficitur libero. Morbi dapibus porta quam laoreet placerat.
                    </p><br>
                    
                </div>
            </div>
        </div>
        <div class="vtimeline-point">
            <div class="vtimeline-icon">
                <i class="fa fa-image"></i>
            </div>
            <div class="vtimeline-block">
                <span class="vtimeline-date">juillet 12, 2022</span><div class="vtimeline-content">
                    <a href="#"><img src="./images/Blog/B3.png" alt="" class="img-fluid mb20"></a>
                    <a href="#"><h3>Standard post title</h3></a>
                    <ul class="post-meta list-inline">
                        <li class="list-inline-item">
                            <i class="fa fa-user-circle-o"></i> <a href="#">Soulaimane elamini</a>
                        </li>
                        <li class="list-inline-item">
                            <i class="fa fa-calendar-o"></i> <a href="#">12 juillet 2022</a>
                        </li>
                        <li class="list-inline-item">
                            <i class="fa fa-tags"></i> <a href="#">Ordishop</a>
                        </li>
                    </ul>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur in iaculis ex. Etiam volutpat laoreet urna. Morbi ut tortor nec nulla commodo malesuada sit amet vel lacus. Fusce eget efficitur libero. Morbi dapibus porta quam laoreet placerat.
                    </p><br>
                    
                </div>
            </div>
        </div>
    </div>
</div>

<?php include "includes/footer.php" ?>
</body>

</html>