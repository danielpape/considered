<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">

        <title><?php echo($page_title); ?></title>

        <?php echo($page_meta); ?>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="<?php echo($template_dir_url); ?>style.css">
        <link rel="stylesheet" href="<?php echo($template_dir_url); ?>subdiv.css">
        <link href='http://fonts.googleapis.com/css?family=Cabin:400,300,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600' rel='stylesheet' type='text/css'>

        <?php get_header(); ?>
    </head>
    <style>
    /********************************************************************************************

    Simple v1.0.2 by Jason Schuller (Jason.sc)
    Copyright Circa75 Media, LLC (Circa75.co)

    *********************************************************************************************/

    /* Normalization
    *********************************************************************************************/

    html,body,div,span,applet,object,iframe,h1,h2,h3,h4,h5,h6,p,blockquote,pre,a,abbr,acronym,address,big,cite,code,del,dfn,em,img,ins,kbd,q,s,samp,small,strike,strong,sub,sup,tt,var,b,u,i,center,dl,dt,dd,ol,ul,li,fieldset,form,label,legend,table,caption,tbody,tfoot,thead,tr,th,td,article,aside,canvas,details,embed,figure,figcaption,footer,header,hgroup,menu,nav,output,ruby,section,summary,time,mark,audio,video{margin:0;padding:0;border:0;font-size:100%;font:inherit;vertical-align:baseline;}article,aside,details,figcaption,figure,footer,header,hgroup,menu,nav,section{display:block}body{line-height:1}ol,ul{list-style:none}blockquote,q{quotes:none}blockquote:before,blockquote:after,q:before,q:after{content:'';content:none;}table{border-collapse:collapse;border-spacing:0;}

    /* Setup
    *********************************************************************************************/

    body {
    	background: #ffffff;
    	font-family: 'Cabin', serif;
    	font-weight: 400;
    	font-size: 1em;
    	line-height: 1.5em;
    	color: #373737;
    	text-rendering: optimizeLegibility;
    	margin-bottom: 1.5em;
      margin-left: auto;
      margin-right: auto;
      margin-top: 1.5em;
      max-width: 30em;
      orphans: 2;
      text-align: left;
      widows: 2;
      word-spacing: normal;

    }

    body *
    {
      max-width: 100%;
    }

    nav.main-nav {
        background-color: #FAFAFA;
        background-color: rgba(250,250,250,0.9);
        height:44px;
        z-index:170;
        margin:0 auto;
        border-bottom:1px solid #c0c0c0;
        width:100%;
        position:fixed;
        top:0;
        left:0;
        right:0;
        text-align: center;
    }

    .title {
    	margin-left: 10px;
    	margin-right: 10px;	/*border-bottom: 1px solid #D2D2D2;*/
    	padding-bottom: 2px;
    	border-bottom: 1px solid #e3e3e3 !important;

    }

    #menu {
    line-height: 40px;
    font-size: 1em;
    font-family: 'Cabin',sans-serif;
    }

    #menu a{
    text-decoration: none;
    margin-left: 10px;
    margin-right: 10px;
    border-bottom: 1px solid #ec1232;
    padding-bottom: 2px;
    color: #000;
    }

    /* Typography
    *********************************************************************************************/

    h1, h2, h3, h4, h5, h6 {
      font-weight: 400;
    	color: #303030;
    	margin-bottom: 5px;
    	max-width: 90%;
    }

    h1, h2, h3, h4 {
        font-size: 24px;
        line-height: 39px;
    }

    h3, h4 {
        margin-top: 20px;
    }

    h3 {
    	font-size: 0.5em;
    }

    p, ul, ol {
        margin: 0 0 20px;
    }

    ul, ol {
        margin-left: 40px;
    }

    ul li {
        list-style: disc;
    }

    ol li {
        list-style: decimal;
    }

    em {
        font-style: italic;
    }

    strong {
        font-weight: bold;
    }

    a {
        color: #303030;
        text-decoration: none;
        -moz-transition-duration: 0.1s;
        -webkit-transition-duration: 0.1s;
    }

    a:hover, a:focus {
        color: #000000;
    }

    code, pre {
        font-family: 'Source Sans Pro', monospace;
        text-rendering: optimizeLegibility;
        font-size: 18px;
        letter-spacing: 0.1em;
        margin: 0 0.1em;
    }

    /* Posts
    *********************************************************************************************/

    article {
        width: 100%;
        border-bottom: 1px solid #f1f1f1;
        padding: 60px 0;
    }

    article.draft {
        display: none;
    }

    article:last-child,
    article.single {
        border-bottom: 0;
    }

    .post blockquote {
        border-left:.5em solid #eee;
        padding: 0 2em;
        margin-left:0;
        max-width: 476px;
    }

    .post blockquote  cite {
        font-size:14px;
        line-height:20px;
        color:#bfbfbf;
    }

    .post blockquote cite:before {
        content: '\2014 \00A0';
    }

    .post blockquote p {
        color: #666;
        max-width: 460px;
    }

    .post p a,
    .post ul a,
    .post ol a {
        border-bottom: 1px solid #ebebeb;
    }

    .post p,
    .post ul,
    .post ol {
        max-width: 85%;
    }

    .post img {
        max-width: 100%;
    }

    /* Buttons
    *********************************************************************************************/

    .button {
        background-color: #ffffff;
        font-family: 'Cabin', sans-serif;
        font-size: 14px;
        line-height: 24px;
        font-weight: 300;
        color: #aaa;
        float: left;
        margin: 0 0 0 0;
    		border-bottom: 1px solid #ec1232;
    		padding-bottom: 2px;

    }

    .button.small {
        padding: 0px 12px 1px;
        float: right;
        margin: 5px 0 3px 0;
    }

    .button:hover {
        color: #9b9b9b;
        text-shadow: none;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.05);
    }

    ul.actions {
        width: 100%;
        float: left;
        margin: 0;
    }

    ul.actions li {
        width: 100%;
        float: left;
        margin-top: 3px;
        list-style: none;
    }

    .tag {
      display: inline;
      background-color: #fff;
    	border: 1px solid #000;
      margin-top: -5px;
      padding: 3px 10px 3px 10px;
      text-align: center;
      font-family: Arial, sans-serif;
      border-radius: 20px;
      font-size: 0.7em;
    }

    /* Meta
    *********************************************************************************************/

    .meta {
        font-family: 'Source Sans Pro', sans-serif;
        font-size: 14px;
        line-height: 19px;
        font-weight: 300;
        color: #b3b3b1;
        text-align: right;
    }

    .meta ul {
        border-right: 1px solid #ebebeb;
        width: 100%;
        float: right;
        margin-right: 14px;
        padding: 20px 0 26px;
        position: relative;
    }

    .meta ul li {
        list-style: none;
    }

    .meta ul li span {
        color: #ebebeb;
    }

    .meta ul li:after {
        color: #ebebeb;
        content: " -";
    }

    .meta ul li:last-child {
        border-radius: 50%;
        background-color: #fbfbfb;
        border: 1px solid #ebebeb;
        position: absolute;
        width: 10px;
        height: 10px;
        right: -6px;
        bottom: -6px;
    }

    .meta ul li:last-child:after {
        content:"";
    }

    .meta ul li:first-child {
        font-weight: 400;
    }

    .meta a {
        color: #b3b3b1;
    }

    .meta a:hover {
        color: #303030;
    }

    .thumbnail {
        background-color: #fbfbfb;
        border: 1px solid #ebebeb;
        border-radius: 50%;
        width: 60px;
        height: 60px;
        padding: 5px;
        float: right;
        margin-right: -21px;
        -moz-transition-duration: 0.05s;
        -webkit-transition-duration: 0.05s;
    }

    .not-found .thumbnail {
        background-color: #404040;
        border-color: #404040;
    }

    .thumbnail img {
        border-radius: 50%;
        width: 100%;
        height: 100%;
    }

    /* Powered by Dropplets
    *********************************************************************************************/

    .powered-by {
        border-radius: 3px;
        background-color: #000000;
        color: #ffffff;
        font-family: "Helvetica Neue", Arial, Helvetica, Geneva, sans-serif;
        font-size: 12px;
        position: fixed;
        display: block;
        padding: 2px 10px;
        bottom: 10px;
        right: 10px;
        cursor: pointer;
        opacity: 0.3;
    }

    .powered-by:hover {
        color: #ffffff;
        opacity: 0.8;
    }

    .powered-by img {
        height: 15px;
        float: left;
        margin: 5px 5px 0 -2px;
    }

    /* XL
    *********************************************************************************************/

    @media (max-width: 980px) {

        /* Buttons
        *****************************************************************************************/

        .button {
            font-size: 12px;
            line-height: 17px;
            /*padding: 8px 20px 9px;*/

        }

        /* Meta
        *****************************************************************************************/

        .meta {
            font-size: 12px;
            line-height: 17px;
        }

    }

    /* L
    *********************************************************************************************/

    @media (max-width: 820px) {

        /* Setup
        *****************************************************************************************/

        body {
        	font-size: 14px;
        	line-height: 23px;
        }

        /* Typography
        *****************************************************************************************/

        h1, h2 {
            font-size: 18px;
            line-height: 29px;
        }

        h3, h4 {
            font-size: 14px;
            line-height: 23px;
        }

        p {
            max-width: 100%;
        }

    }

    /* M
    *********************************************************************************************/

    @media (max-width: 640px) {

        /* Meta
        *****************************************************************************************/

        .meta {
            display: none;
        }

        /* Posts
        *****************************************************************************************/

        .post p,
        .post ul,
        .post ol {
            max-width: 100%;
        }

    }

    /* XS
    *********************************************************************************************/

    @media (max-width: 400px) {

        /* Articles
        *****************************************************************************************/

        article {
            padding: 40px 0;
        }


    }

    </style>

    <body>
      <nav class="main-nav">
                <div id="menu"><a href="/" class="title">considered</a><a href="/about.html">about</a> <a href="/contact.html">contact</a></center>
             </nav>
        <?php if($is_home) { ?>
        <!-- <article>
                    <h2><?php echo($intro_title); ?></h2>

                    <p><?php echo($intro_text); ?></p>

                    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
        </article> -->
        <?php } ?>

        <?php echo($content); ?>

        <?php get_footer(); ?>
    </body>
</html>
