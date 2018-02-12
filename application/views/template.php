<?php
if (!defined('APPPATH'))
	exit('No direct script access allowed');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>{pagetitle}</title>
        <meta HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <!--<link href="/assets/css/bootstrap.min.css" rel="stylesheet" media="screen"/>-->
        <link rel="stylesheet" type="text/css" href="/assets/css/style.css"/>
        <link rel="stylesheet" type="text/css" href="/assets/css/styleMadeByDavin.css"/>
    </head>
    <body>
        <div class="container">
            <div class="navbar" id="navbarPlaceholder">
            </div>
            <div class="navbar" id="navbar">
                <div class="navbar-inner">
                    <a class="brand" href="/"></a>
                    {menubar} </div>
            </div>
            <div id="content">
                <div id="contentText">
                    <div id="h1Text"><h1>{pagetitle}</h1></div>
                    {content}
                </div>
            </div>
            <!--
              <div id="footer" class="span12">
                  Copyright &copy; 2017-2018,  <a href="mailto:someone@somewhere.com">Me</a>.
              </div>
 +-->
        </div>
        <script src="/assets/js/jquery-1.11.1.min.js"></script>
        <script src="/assets/js/bootstrap.min.js"></script>
    </body>
</html>
