<?php
   header('Content-type: text/css');
   include("../../CustomizationManager.php");
   CustomizationManager::SetTheme("configurations 1");
   $colors = CustomizationManager::$colors;
?>
@import url(http://fonts.googleapis.com/css?family=Open+Sans:300italic,400,300,800);
@import url(http://fonts.googleapis.com/css?family=Ubuntu:300,400,700);
@import url(../plugins/form/icheck/skins/all.css);
@import url(../plugins/form/switch/switch.css);
@import url(../plugins/datetime/datetime.css);
@import url(animation.css);
@import url(jquery-ui.css);

#img-CES{
  width: 50%;
}
::-moz-selection {
  background-color: #0aa699;
  color: white;
}

::selection {
  background-color: #0aa699;
  color: white;
}

html {
  min-width: 320px;
  overflow-x: hidden;
  overflow-y: hidden;
}
 
.liveSearch{
  display: inline-block;
  float: none;
  margin-bottom: 1px;
  margin-left: 0;
}
body {
  background: #1C1D1F;
  color: <?php echo $colors->ADMIN_PAGE_SIDEBAR_FONT_COLOR; ?>;
  font-family: "Ubuntu";
  font-weight: 300;
  min-width: 320px;
  -webkit-font-smoothing: antialiased;
}
body.full-lg #wrapper, body.full-lg #main {
  margin: 0;
  padding: 0;
}

ul {
  list-style: none;
  margin: 0;
  padding: 0;
}

h1, h2, h3, h4, h5, h6, .h1, .h2, .h3, .h4, .h5, .h6 {
  font-family: "Open Sans";
  font-weight: 300;
  margin: 0;
}

a {
  color: #141c27;
}
a:hover {
  color: #088379;
  text-decoration: none;
}
a.toggle-column-hide {
  color: #cccccc !important;
  text-decoration: line-through;
}

label {
  color: #A1A1A1;
  font-family: "Arial", sans-serif;
  font-size: 12px;
}
label.lighter {
  font-weight: 300;
}

textarea {
  -webkit-transition: height 0.2s;
  -moz-transition: height 0.2s;
  transition: height 0.2s;
}
textarea:focus, input[type="text"]:focus, input[type="password"]:focus, input[type="datetime"]:focus, input[type="datetime-local"]:focus, input[type="date"]:focus, input[type="month"]:focus, input[type="time"]:focus, input[type="week"]:focus, input[type="number"]:focus, input[type="email"]:focus, input[type="url"]:focus, input[type="search"]:focus, input[type="tel"]:focus, input[type="color"]:focus, .uneditable-input:focus {
  outline: 0;
  outline: thin;
}

.box-circle, img.circle, ul.circle li img, .widget-friend ul li:last-child i, .widget-friend ul li.online:after, .widget-friend ul li.busy:after, .avatar-slide .avatar-link a em:after, .avatar-slide .avatar-link a em:before, .easychart .percent, ol.rounded-list a:before {
  -moz-border-radius: 50%;
  -webkit-border-radius: 50%;
  border-radius: 50%;
}

#header {
  background: <?php echo $colors->ADMIN_PAGE_HEADER_COLOR; ?>;
  border-bottom: 5px #CB6C52 solid;
  height: 55px;
  left: 0;
  position: absolute;
  right: 0;
  top: 0;
  z-index: 15;
  -webkit-transition: -webkit-transform 0.5s;
  transition: transform 0.5s;
}
#header .tools-bar {
  margin-left: 250px;
  padding: 0 15px 0 0;
}
#header .tools-bar ul li.h-seperate {
  border-left: 1px solid #eeeeee;
  height: 50px;
}
#header .tools-bar ul li a {
  -webkit-transition: all 0.25s;
  -moz-transition: all 0.25s;
  transition: all 0.25s;
  color: #A1A1A1;
  line-height: 50px;
  padding: 0 15px;
}
#header .tools-bar ul.nav li a:hover {
  color: #C1C1C1;
}
#header .tools-bar ul li a.h-seperate:before {
  border-left: 1px solid #62707D;
  content: "";
  height: 14px;
  left: -10px;
  margin: 0px 10px 0px 10px;
  position: absolute;
  top: 19px;
}
#header .tools-bar a.icon-toolsbar {
  color: #141c27;
  font-size: 21px;
  padding: 0 25px;
}
#header .tools-bar ul li button {
  width: 34px;
  height: 34px;
  text-align: center;
  padding: 0;
  background-color: #f6f6f6;
  border-color: #f6f6f6;
}
#header .tools-bar ul li button.btn-header-search {
  margin: 8px 15px 0 0;
}
#header .tools-bar ul li button.btn-header-search i {
  position: absolute;
  color: #A1A1A1;
  top: 18px;
  left: 9px;
}
#header .tools-bar ul li a:hover {
  background-color: transparent;
}
#header .tools-bar ul li a.avatar-header {
  height: 50px;
  padding: 0px;
  position: relative;
  width: 34px;
}
#header .tools-bar ul li a.avatar-header .badge {
  background-color: #f35958;
  font-weight: 300;
  height: 19px;
  line-height: 19px;
  min-width: 19px;
  padding: 0 6px;
  position: absolute;
  right: -8px;
  text-align: center;
  top: 4px;
  z-index: 2;
}
#header .tools-bar ul li a.avatar-header img {
  -webkit-transition: all 0.5s;
  -moz-transition: all 0.5s;
  transition: all 0.5s;
  left: 50%;
  margin-left: -17px;
  margin-top: -17px;
  position: absolute;
  top: 50%;
  width: 34px;
}
#header .dropdown a em {
  font-style: normal !important;
}
#header .tools-bar ul li a.avatar-header:hover img {
  filter: alpha(opacity=70);
  opacity: 0.7;
}
#header ul li a i.dropdown-icon {
  margin: 0 0 0 5px;
  position: relative;
  top: 1px;
}
#header ul.dropdown-menu {
  margin-top: 5px;
  min-width: 200px;
}
#header ul.dropdown-menu li a {
  background-color: transparent;
  line-height: 28px;
}
#header ul.dropdown-menu li a:hover {
  background-color: #F7F6F1;
  color: #A1A1A1;
  text-decoration: none;
}
#header .dropdown-menu li a i {
  height: 17px;
  margin-right: 3px;
  text-align: center;
  width: 17px;
}
#header .dropdown-menu.icon-right li a i {
  float: right;
  margin-right: -3px;
  margin-top: 6px;
}

#wrapper {
  background: #20242b;
  height: 100%;
  left: 0;
  margin-left: 50px;
  min-width: 320px;
  overflow: hidden;
  position: absolute;
  right: 0;
}

#main {
  background: #e5e9ec;
  height: 100%;
  left: 0;
  margin-left: 250px;
  overflow: auto;
  overflow-x: hidden;
  padding-top: 55px;
  position: absolute;
  right: 0;
  -webkit-transition: -webkit-transform 0.5s, padding-top 0.5s;
  transition: transform 0.5s, padding-top 0.5s;
  z-index: 9;
  -webkit-overflow-scrolling: touch;
}
#main.nav-collapse-out {
  -webkit-transform: translate3d(-250px, 0, 0);
  -moz-transform: translate3d(-250px, 0, 0);
  -ms-transform: translate3d(-250px, 0, 0);
  -o-transform: translate3d(-250px, 0, 0);
  transform: translate3d(-250px, 0, 0);
  right: -250px;
}
#main.slideDown {
  -webkit-transform: translate3d(0, 100px, 0);
  -moz-transform: translate3d(0, 100px, 0);
  -ms-transform: translate3d(0, 100px, 0);
  -o-transform: translate3d(0, 100px, 0);
  transform: translate3d(0, 100px, 0);
}

#nav {
  -webkit-transition: all 0.5s;
  -moz-transition: all 0.5s;
  transition: all 0.5s;
  background-color: #1b1e24;
  height: 100%;
  overflow: hidden;
  position: absolute;
  width: 250px;
  z-index: 2;
}

body.nav-collapse #header {
  -webkit-transform: translate3d(0, 0, 0);
  -moz-transform: translate3d(0, 0, 0);
  -ms-transform: translate3d(0, 0, 0);
  -o-transform: translate3d(0, 0, 0);
  transform: translate3d(0, 0, 0);
  right: 0;
  left: 0;
}
body.nav-collapse #main {
  -webkit-transform: translate3d(-250px, 0, 0);
  -moz-transform: translate3d(-250px, 0, 0);
  -ms-transform: translate3d(-250px, 0, 0);
  -o-transform: translate3d(-250px, 0, 0);
  transform: translate3d(-250px, 0, 0);
  right: -250px;
}
body.nav-collapse #nav {
  -webkit-transform: translate3d(-100px, 0, 0);
  -moz-transform: translate3d(-100px, 0, 0);
  -ms-transform: translate3d(-100px, 0, 0);
  -o-transform: translate3d(-100px, 0, 0);
  transform: translate3d(-100px, 0, 0);
  filter: alpha(opacity=0);
  opacity: 0;
}
body.nav-collapse.nav-collapse-in #header {
  -webkit-transform: translate3d(250px, 0, 0);
  -moz-transform: translate3d(250px, 0, 0);
  -ms-transform: translate3d(250px, 0, 0);
  -o-transform: translate3d(250px, 0, 0);
  transform: translate3d(250px, 0, 0);
  right: 250px;
  left: 0;
}
body.nav-collapse.nav-collapse-in #main {
  -webkit-transform: translate3d(0, 0, 0);
  -moz-transform: translate3d(0, 0, 0);
  -ms-transform: translate3d(0, 0, 0);
  -o-transform: translate3d(0, 0, 0);
  transform: translate3d(0, 0, 0);
  right: 0;
}
body.nav-collapse.nav-collapse-in #nav {
  -webkit-transform: translate3d(0, 0, 0);
  -moz-transform: translate3d(0, 0, 0);
  -ms-transform: translate3d(0, 0, 0);
  -o-transform: translate3d(0, 0, 0);
  transform: translate3d(0, 0, 0);
  filter: alpha(opacity=100);
  opacity: 1;
}

body.nav-collapse-in #header {
  -webkit-transform: translate3d(-250px, 0, 0);
  -moz-transform: translate3d(-250px, 0, 0);
  -ms-transform: translate3d(-250px, 0, 0);
  -o-transform: translate3d(-250px, 0, 0);
  transform: translate3d(-250px, 0, 0);
  right: -250px;
  left: 0;
}
body.nav-collapse-in #main {
  -webkit-transform: translate3d(-250px, 0, 0);
  -moz-transform: translate3d(-250px, 0, 0);
  -ms-transform: translate3d(-250px, 0, 0);
  -o-transform: translate3d(-250px, 0, 0);
  transform: translate3d(-250px, 0, 0);
  right: -250px;
}
body.nav-collapse-in #nav {
  -webkit-transform: translate3d(-100%, 0, 0);
  -moz-transform: translate3d(-100%, 0, 0);
  -ms-transform: translate3d(-100%, 0, 0);
  -o-transform: translate3d(-100%, 0, 0);
  transform: translate3d(-100%, 0, 0);
  filter: alpha(opacity=0);
  opacity: 0;
}

#nav-title {
  height: 55px;
  background-color: #23272e;
  position: relative;
  color: #FFF;
  text-align: center;
}
#nav-title h3 {
  font-family: "Ubuntu";
  line-height: 50px;
  padding: 0 15px;
  overflow: hidden;
  text-overflow: ellipsis;
  white-space: nowrap;
}

#nav-scroll, #mailbox #nav-scroll {
  overflow: scroll;
  overflow-x: hidden;
  -webkit-overflow-scrolling: touch;
  height: 100%;
  padding-bottom: 200px;
  padding-top: 55px;
  position: absolute;
  width: 267px;
}

.nav-slide-collapse {
  background-color: #1b1e24;
  line-height: 38px;
  float: left;
  top: 150px;
  right: 0px;
  position: absolute;
  padding: 0 15px;
}
.nav-slide-collapse a {
  color: white;
}

#content {
  padding: 15px 30px 0;
}
#content.after-mail-box {
  overflow: scroll;
  overflow-x: hidden;
  -webkit-overflow-scrolling: touch;
  bottom: 0;
  left: 0;
  margin-left: 320px;
  position: absolute;
  right: 0;
  top: 55px;
}
#content.after-mail-box::-webkit-scrollbar, #main::-webkit-scrollbar, #nav-scroll::-webkit-scrollbar, #mailbox #nav-scroll::-webkit-scrollbar, .mm-menu > .mm-panel::-webkit-scrollbar,
.ms-list::-webkit-scrollbar {
  background: #f2f0eb;
  width: 5px;
}
#content.after-mail-box::-webkit-scrollbar-thumb, #main::-webkit-scrollbar-thumb, #nav-scroll::-webkit-scrollbar-thumb, #mailbox #nav-scroll::-webkit-scrollbar-thumb, .mm-menu > .mm-panel::-webkit-scrollbar-thumb,
.ms-list::-webkit-scrollbar-thumb {
  background: #cdcdcd;
}

#nav-scroll::-webkit-scrollbar, #mailbox #nav-scroll::-webkit-scrollbar, #mailbox #nav-scroll::-webkit-scrollbar, .mm-menu > .mm-panel::-webkit-scrollbar {
  width: 17px;
}

.logo-area {
  background-color: #262a33;
  border-bottom: 5px #191c21 solid;
  float: left;
  height: 55px;
  position: relative;
  text-align: center;
  width: 250px;
  display: block;
  z-index: 5;
}

a.logo {
  background: url('../img/DailyEvents.png') no-repeat center center;
  padding-left: 50px;
  display: block;
  height: 50px;
  position: relative;
}

body.leftMenu {
  background: url('../img/DailyEvents.png') no-repeat;
  background-position: 11px 10px;
  background-color: #262a33;
}
body.leftMenu:after {
  content: "";
  position: absolute;
  width: 250px;
  height: 5px;
  top: 50px;
  background-color: #191c21;
  z-index: -1;
}
body.leftMenu.in #wrapper {
  margin-left: 50px;
}
body.leftMenu.nav-collapse #header {
  left: 0;
}
body.leftMenu #header {
  left: 250px;
}
body.leftMenu #header .logo-area {
  display: none;
}
body.leftMenu #header .tools-bar {
  margin-left: 0;
}
body.leftMenu #wrapper {
  margin-left: 250px;
}
body.leftMenu #nav-scroll, body.leftMenu #mailbox #nav-scroll, #mailbox body.leftMenu #nav-scroll {
  padding-top: 0;
}

/*
00 -  widget
------------------------------------------------------------*/
.widget {
  display: inline-block;
}

/*
00 - Widget slide setting
------------------------------------------------------------*/
.widget-slide-setting li {
  border-bottom: 1px rgba(255, 255, 255, 0.035) solid;
  padding: 15px;
}
.widget-slide-setting li label, .widget-slide-setting li small {
  color: rgba(255, 255, 255, 0.5);
  display: block;
  font-family: "Ubuntu";
  font-size: 14px;
  font-weight: 300;
  width: 70%;
}
.widget-slide-setting li span {
  color: #FFF;
}
.widget-slide-setting li small {
  color: rgba(255, 255, 255, 0.3);
  font-size: 80%;
}

/*
00 - widget summary chart
------------------------------------------------------------*/
.widget-summary-chart {
  background-color: #FFF;
}
.widget-summary-chart h2 {
  background-color: #f37864;
  color: #FFF;
  font-size: 24px;
  font-weight: lighter;
  margin: 0;
  padding: 25px 15px;
}
.widget-summary-chart section {
  padding: 20px;
}
.widget-summary-chart section h4 {
  font-weight: lighter;
  margin: 0px 0 25px;
}
.widget-summary-chart section h4 i {
  margin: 0 5px;
}
.widget-summary-chart section span {
  display: inline-block;
  height: 60px;
  margin: 20px 0 10px;
  text-align: center;
  vertical-align: top;
  width: 49%;
}
.widget-summary-chart section span strong {
  display: block;
  font-size: 36px;
}

/*
00 - widget chart
------------------------------------------------------------*/
.widget-chart {
  padding: 15px;
  position: relative;
}
.widget-chart h2 {
  color: #FFF;
  margin: 0 0 15px;
  margin: 0 0 15px;
}
.widget-chart.chart-dark {
  color: #575757 !important;
}
.widget-chart.chart-dark .flot-text {
  color: rgba(0, 0, 0, 0.5);
  font-size: 11px !important;
}
.widget-chart .flot-chart {
  display: none;
}

#onlinerealtime {
  padding: 15px;
  text-align: center;
}
#onlinerealtime span {
  display: block;
  font-size: 25px;
  font-weight: 700;
}

/*
00 - widget friend
------------------------------------------------------------*/
.widget-friend ul {
  margin: 0;
  padding: 15px 0;
  text-align: center;
  margin-bottom: 15px;
}
.widget-friend ul li {
  display: inline-block;
  margin: 5px;
  position: relative;
}
.widget-friend ul li:first-child {
  display: block;
  padding: 10px 15px;
  text-align: left;
}
.widget-friend ul li:last-child {
  height: 50px;
  line-height: 50px;
  top: 3px;
  width: 50px;
}
.widget-friend ul li:last-child i {
  border: 1px #CCC dashed;
  display: inline-block;
  height: 48px;
  line-height: 46px;
  text-align: center;
  width: 48px;
}
.widget-friend ul li img {
  border: 2px #EEE solid;
  opacity: 0.3;
  width: 50px;
}
.widget-friend ul li.online img, .widget-friend ul li.busy img {
  opacity: 1;
}
.widget-friend ul li.online:after, .widget-friend ul li.busy:after {
  background-color: #00cc00;
  border: 2px white solid;
  content: "";
  height: 10px;
  position: absolute;
  right: 3px;
  top: 3px;
  width: 10px;
}
.widget-friend ul li.busy:after {
  background-color: #ff9900;
}

.panel .widget-friend ul, .tab-content .widget-friend ul {
  padding: 0;
}

/*
00 - widget clock 
------------------------------------------------------------*/
.widget-clock {
  padding: 20px 10px;
  position: relative;

}
.widget-clock:before {
    content: "";
    height: 100%;
    left: 0px;
    background-color: #141c27;
    position: absolute;
    top: 0%;
    width: 100%
}
.widget-clock #clock {
  max-width: 350px;
  margin: auto;
}
.widget-clock .cl-analog {
  position: absolute;
}
.widget-clock .cl-analog svg {
  position: relative;
}
.widget-clock .cl-analog path {
  stroke: #07766d;
  stroke-linecap: round;
  stroke-width: 42;
  fill: #fafafa;
}
.widget-clock .cl-analog circle {
  stroke: black;
  fill: white;
  stroke-width: 20;
}
.widget-clock .cl-analog #sec {
  margin-left: -10px;
  stroke: #d9534f;
  stroke-width: 15;
}
.widget-clock .cl-analog #min {
  stroke: black;
  stroke-width: 38;
}
.widget-clock .cl-analog #hour {
  stroke: black;
  stroke-width: 38;
  stroke-width: 45;
}
.widget-clock .cl-dateTime {
  padding: 0 0 0 140px;
  position: relative;
  font-family: "Arial", sans-serif;
  color: #FFF;
}
.widget-clock .cl-dateTime span {
  display: inline-block;
  font-size: 16px;
  position: relative;
}
.widget-clock .cl-dateTime span.cl-day, .widget-clock .cl-dateTime span.cl-digital {
  font-size: 13px;
  text-transform: capitalize;
}
.widget-clock .cl-dateTime span.cl-month, .widget-clock .cl-dateTime span.cl-date {
  font-weight: 700;
}
.widget-clock .cl-dateTime span.cl-month a {
  color: #FFF;
}
.widget-clock .cl-dateTime span.cl-year {
  display: block;
  margin: 0 2px;
}
.widget-clock .cl-dateTime span.cl-digital {
  padding: 3px 10px 6px;
  border-radius: 4px;
  background-color: #07766d;
  color: #FFF;
  font-size: 18px;
  font-family: "Ubuntu";
  margin-top: 5px;
  text-align: center;
  display: block;
}
.widget-clock .cl-dateTime span.cl-digital small {
  font-size: 50%;
  text-transform: uppercase;
}

/*
00 - widget chat 
------------------------------------------------------------*/
.widget-chat {
  overflow: hidden;
  position: relative;
  background-color: #f2f4f6;
}
.widget-chat header {
  background-color: #736086;
  color: #FFF;
  height: 45px;
  position: relative;
  z-index: 2;
}
.widget-chat header h4 {
  line-height: 45px;
  overflow: hidden;
  padding: 0 10px 0 35px;
  position: relative;
  text-overflow: ellipsis;
  white-space: nowrap;
}
.widget-chat header h4:before {
  background-color: #DDD;
  border-radius: 50%;
  content: "";
  height: 10px;
  left: 15px;
  margin-top: -5px;
  position: absolute;
  top: 50%;
  width: 10px;
}
.widget-chat header h4.online:before {
  background-color: #00cc00;
}
.widget-chat header h4.busy:before {
  background-color: #ff9900;
}
.widget-chat header span {
  background-color: #5a4b68;
  cursor: pointer;
  line-height: 45px;
  padding: 0 15px;
}
.widget-chat.full-chat {
  height: 100%;
}
.widget-chat.full-chat .chat-body {
  bottom: 67px;
  top: 45px;
  right: 0;
  left: 0;
  height: auto;
  position: absolute;
}
.widget-chat.full-chat .chat-body:after {
  left: 48px;
}
.widget-chat.full-chat .chat-body .chat {
  padding: 25px;
}
.widget-chat.full-chat footer {
  position: absolute;
  bottom: 0;
  z-index: 150;
}
.widget-chat .chat-body {
  height: 500px;
  margin-right: -17px;
  overflow: scroll;
  overflow-x: hidden;
  -webkit-overflow-scrolling: touch;
}
.widget-chat .chat-body:after {
  background-color: #F7F6F3;
  background-color: rgba(255, 255, 255, 0.45);
  content: "";
  left: 36px;
  min-height: 100%;
  position: absolute;
  top: 0;
  width: 4px;
}
.widget-chat .chat {
  color: #333;
  margin: 0 auto;
  padding: 1em .8em;
}
.widget-chat .chat strong {
  font-weight: 400;
}
.widget-chat .chat dt {
  color: #999;
  font-size: .6em;
  margin-bottom: 1em;
  text-align: center;
}
.widget-chat .chat dd {
  position: relative;
  z-index: 2;
}
.widget-chat .chat dd + dt {
  margin-top: 1.5em;
  position: relative;
}
.widget-chat .chat dd + dd {
  margin-top: .5em;
}
.widget-chat .chat dd:after {
  clear: both;
  content: " ";
  display: block;
  height: .1em;
}
.widget-chat .chat img.avatar {
  left: 0;
  max-width: 50px;
  position: absolute;
  top: -8px;
  z-index: 1;
}
.widget-chat .chat p {
  background-color: #FFF;
  float: left;
  margin-left: 65px;
  margin-right: 15%;
  padding: .45em .75em;
  position: relative;
  z-index: 2;
}
.widget-chat .chat p + p {
  clear: both;
  display: block;
}
.widget-chat .chat dd.from p:nth-child(1):before {
  border-bottom: 10px solid transparent;
  border-right: 10px solid #FFF;
  border-top: 10px solid transparent;
  content: "";
  left: -10px;
  position: absolute;
  top: 7px;
  z-index: 1;
}
.widget-chat .chat p img {
  padding: 5px 1px;
}
.widget-chat .chat .to p {
  background-color: #0bbeaf;
  color: #FFF;
  float: right;
  margin-left: 65px;
  margin-right: 15px;
}
.widget-chat .chat dd.to p:before {
  border-bottom: 10px solid transparent;
  border-left: 10px solid #0bbeaf;
  border-top: 10px solid transparent;
  content: "";
  position: absolute;
  right: -8px;
  top: 7px;
  z-index: 1;
}
.widget-chat .chat dd.to p:after {
  background-color: #0bbeaf;
  border-radius: 50%;
  content: "";
  height: 9px;
  position: absolute;
  right: -20px;
  top: 12px;
  width: 9px;
  z-index: 1;
}
.widget-chat footer {
  position: relative;
  width: 100%;
}
.widget-chat footer > .message-input {
  background-color: #eceff2;
  border-top-color: #eceff2;
  padding: 15px;
}
.widget-chat footer > .message-input input[type=text] {
  border: none;
  -moz-border-radius: 3px 0px 0px 3px;
  -webkit-border-radius: 3px 0px 0px 3px;
  border-radius: 3px 0px 0px 3px;
  color: #c2c2c2;
  float: left;
  font-size: 11px;
  margin: 0;
  padding: 10px;
  width: 75%;
}
.widget-chat footer > .message-input button {
  -moz-border-radius: 0px 3px 3px 0px;
  -webkit-border-radius: 0px 3px 3px 0px;
  border-radius: 0px 3px 3px 0px;
  font-size: 11px;
  margin: 0;
  padding: 10px;
  text-transform: uppercase;
  width: 25%;
}

/*
00 - widget write post
------------------------------------------------------------*/
.widget-write-post {
  margin-bottom: 25px;
}
.widget-write-post ul {
  margin-bottom: 10px;
}
.widget-write-post ul li {
  background-color: #0aa699;
  border-radius: 2px;
  color: #FFF;
  display: inline-block;
  font-family: "Arial", sans-serif;
  font-size: 10px;
  margin-right: 5px;
  padding: 8px 15px;
  text-transform: capitalize;
}
.widget-write-post ul li.active {
  background-color: #07766d;
}
.widget-write-post ul li i {
  font-size: 14px;
  margin-right: 3px;
}
.widget-write-post textarea {
  border-color: #FFF;
  -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, 0.05);
  box-shadow: 0 1px 1px rgba(0, 0, 0, 0.05);
  height: 105px;
  margin-bottom: 5px;
  padding: 10px 15px;
}

/*
00 - widget notification
------------------------------------------------------------*/
.widget-im.notification ul li section {
  -webkit-box-shadow: none;
  box-shadow: none;
  margin-bottom: 0px;
  padding: 9px 15px 9px 15px;
}
.widget-im.notification ul li section:after {
  border-bottom: 1px #ededed solid;
  bottom: 0px;
  content: "";
  left: 0;
  position: absolute;
  right: 0;
}
.widget-im.notification ul li section h4 {
  font-size: 14px;
  color: #777;
}
.widget-im.notification ul li section h4 small {
  color: #BBB;
  font-size: 12px;
}
.widget-im.notification ul li section .pre-text {
  font-size: 12px;
  padding-top: 4px;
  width: 95%;
}
.widget-im.notification ul li:last-child section:after {
  border-bottom: 0;
}
.widget-im.notification .btn-block {
  border-radius: 0;
  margin: 0;
}
.widget-im.notification ul li .im-thumbnail {
  box-shadow: inset -3px 3px 20px rgba(0, 0, 0, 0.1);
}
.widget-im.notification ul li .im-thumbnail i {
  font-size: 24px;
  height: 60px;
  line-height: 60px;
  color: rgba(0, 0, 0, 0.2) !important;
}
.widget-im.notification .im-confirm-group .btn {
  height: 60px;
}

.modal-body .widget-im.notification {
  background-color: #FFF;
  padding: 0px;
}

/*
00 - widget inbox
------------------------------------------------------------*/
.widget-im {
  overflow: hidden;
  position: relative;
}
.widget-im ul li {
  position: relative;
}
.widget-im ul li i {
  color: #DDD;
}
.widget-im ul li a:hover i {
  color: #48a770;
}
.widget-im ul li.empty {
  color: #ABAAA5;
  padding: 25px 0;
  text-align: center;
}
.widget-im ul li.empty i {
  color: #EDECE5;
  display: block;
  margin-bottom: 15px;
}
.widget-im ul li section {
  background-color: #FFF;
  border-color: #FFF;
  margin-bottom: 10px;
  padding: 15px 17px 15px 17px;
  position: relative;
  -webkit-transition: -webkit-transform 0.5s;
  transition: transform 0.5s;
  z-index: 1;
}
.widget-im ul li section.push-in {
  -webkit-transform: translate3d(-40%, 0, 0);
  transform: translate3d(-40%, 0, 0);
}
.widget-im ul li section.push-in a.im-delete:after, .widget-im ul li section.push-in a.im-action:after {
  content: "";
  height: 100%;
  left: 0;
  position: absolute;
  top: 0;
  width: 100%;
}
.widget-im ul li section label {
  border-left: 20px solid transparent;
  border-top: 20px solid #99CC00;
  content: "";
  position: absolute;
  right: 0;
  top: 0;
}
.widget-im ul li section.thumbnail-in {
  padding-left: 92px;
}
.widget-im ul li h4 {
  overflow: hidden;
  text-overflow: ellipsis;
  white-space: nowrap;
}
.widget-im ul li .pre-text {
  color: #CCC;
  overflow: hidden;
  padding: 5px 0 0;
  text-overflow: ellipsis;
  white-space: nowrap;
  width: 100%;
}
.widget-im ul li .im-thumbnail {
  background-color: #FBFBFB;
  border-right: 1px #F5F5F5 solid;
  height: 100%;
  left: 0;
  position: absolute;
  top: 0;
  width: 75px;
  z-index: 2;
}
.widget-im ul li .im-thumbnail img {
  border-radius: 2px;
  height: 61px;
  margin-left: 7px;
  margin-top: 7px;
  width: 61px;
}
.widget-im ul li .im-thumbnail i {
  font-size: 30px;
  height: 75px;
  line-height: 75px;
  text-align: center;
  width: 75px;
}
.widget-im .im-confirm-group {
  position: absolute;
  right: 0;
  top: 0;
  width: 40%;
  z-index: 0;
}
.widget-im .im-confirm-group .btn {
  border: 0;
  border-radius: 0;
  height: 75px;
  padding: 0;
}
.widget-im .widget-im-tools span + span {
  color: #999;
  margin-left: 7px;
}
.widget-im ul li time {
  background-color: #F7F6F1;
  border-radius: 2px;
  color: #BBB;
  display: inline-block;
  font-size: 11px;
  height: 20px;
  line-height: 20px;
  padding: 0 10px;
}

.modal-body .widget-im {
  background-color: #e5e9ec;
  padding: 20px;
}

/*
00 - widget time line
------------------------------------------------------------*/
.widget-timeline ul {
  list-style: none;
  margin: 30px auto;
  overflow: hidden;
  padding: 0;
  position: relative;
}
.widget-timeline ul:after {
  background-color: rgba(255, 255, 255, 0.5);
  content: "";
  left: 50%;
  margin-left: -2px;
  min-height: 100%;
  position: absolute;
  top: 0;
  width: 4px;
  z-index: 1;
}
.widget-timeline li {
  border-color: #FFF;
  float: left;
  margin-bottom: 30px;
  position: relative;
  width: 50%;
  z-index: 2;
}
.widget-timeline li time {
  color: #CCC;
  display: block;
  margin-bottom: 10px;
  padding-left: 35px;
  position: relative;
}
.widget-timeline li time i {
  color: #EEE;
  font-size: 30px;
  left: 0;
  margin-top: -6px;
  position: absolute;
}
.widget-timeline li.highlight time {
  padding-left: 0;
}
.widget-timeline li.highlight time i {
  display: block;
  position: relative;
}
.widget-timeline li h3 {
  margin-bottom: 10px;
  overflow: hidden;
  text-overflow: ellipsis;
  white-space: nowrap;
}
.widget-timeline li section {
  background-color: #FFF;
  margin-left: 25px;
  padding: 15px;
  position: relative;
}
.widget-timeline li.left section {
  margin-left: auto;
  margin-right: 25px;
}
.widget-timeline li.highlight section {
  margin: auto;
}
.widget-timeline li .timeline-content {
  display: block;
  margin-right: 35%;
  padding-right: 15px;
}
.widget-timeline li.left .timeline-content {
  margin-left: 35%;
  margin-right: auto;
  padding-left: 15px;
  padding-right: auto;
}
.widget-timeline li .mark {
  background-color: #E8E4D9;
  height: 100%;
  line-height: 50%;
  position: absolute;
  right: 0;
  text-align: center;
  top: 0;
  -moz-transition: width 0.2s;
  -webkit-transition: width 0.2s;
  transition: width 0.2s;
  width: 35%;
  z-index: 2;
}
.widget-timeline li .mark i {
  color: #FFF;
  color: rgba(255, 255, 255, 0.4);
  font-size: 55px;
}
.widget-timeline li .mark.bgimg {
  background: no-repeat center center;
  background-size: cover !important;
  -webkit-background-size: cover !important;
  -moz-background-size: cover !important;
  -o-background-size: cover !important;
}
.widget-timeline li.left .mark {
  left: 0;
  right: auto;
}
.widget-timeline li img {
  width: 100%;
}
.widget-timeline li.left {
  clear: left;
  float: left;
}
.widget-timeline li.right {
  clear: right;
  float: right;
}
.widget-timeline li.highlight {
  clear: both;
  float: none;
  text-align: center;
  width: auto;
}
.widget-timeline li.history {
  background-color: transparent;
  -webkit-box-shadow: none;
  box-shadow: none;
  clear: both;
  float: none;
  padding: 0;
  text-align: center;
  width: auto;
}
.widget-timeline li.history span {
  background-color: #f35958;
  border-radius: 2px;
  color: #FFF;
  display: inline-block;
  padding: 10px 20px;
}
.widget-timeline li:before {
  border-bottom: 10px solid transparent;
  border-top: 10px solid transparent;
  content: "";
  height: 0;
  position: absolute;
  top: 8px;
  width: 0;
  z-index: 1;
}
.widget-timeline li.right:before {
  border-right: 10px solid;
  border-right-color: inherit;
  left: 15px;
}
.widget-timeline li.left:before {
  border-left: 10px solid;
  border-left-color: inherit;
  left: auto;
  right: 15px;
}
.widget-timeline li.right + li.left:before, .widget-timeline li.left + li.right:before {
  top: 32px;
}
.widget-timeline li.highlight:before {
  border-bottom: 10px solid;
  border-bottom-color: inherit;
  border-left: 10px solid transparent;
  border-right: 10px solid transparent;
  left: 50%;
  margin-left: -10px;
  right: auto;
  top: -20px;
}
.widget-timeline li:after {
  background-color: #0aa699;
  border-radius: 50%;
  content: "";
  height: 12px;
  left: 50px;
  left: 0;
  margin-left: -6px;
  margin-right: -6px;
  position: absolute;
  right: 0;
  top: 14px;
  width: 12px;
  z-index: 0;
}
.widget-timeline li.left:after {
  left: auto;
}
.widget-timeline li.right + li.left:after, .widget-timeline li.left + li.right:after {
  top: 36px;
}
.widget-timeline li.right:after {
  right: auto;
}
.widget-timeline li.highlight:after {
  left: 50%;
  margin-left: -6px;
  right: auto;
  top: -30px;
}
.widget-timeline li.history:after {
  display: none;
  visibility: hidden;
}

.panel .widget-timeline ul:after, .tab-content .widget-timeline ul:after {
  background-color: rgba(0, 0, 0, 0.05);
}

.panel .widget-timeline li section, .tab-content .widget-timeline li section {
  background-color: #e5e9ec;
  -webkit-box-shadow: none;
  box-shadow: none;
}

.panel .widget-timeline li, .tab-content .widget-timeline li {
  border-color: #e5e9ec;
}

.panel .widget-timeline li time, .tab-content .widget-timeline li time {
  color: #6f7b8a;
}
.panel .widget-timeline li time i, .tab-content .widget-timeline li time i {
  color: #FFF;
}

/*
00 - widget collapse
------------------------------------------------------------*/
.widget-collapse {
  border-bottom: 1px rgba(0, 0, 0, 0.025) solid;
  position: relative;
}
.widget-collapse.dark {
  color: #FAFAFA;
}
.widget-collapse.dark header {
  background-color: #23272e;
}
.widget-collapse header {
  padding: 0 10px;
}
.widget-collapse header a {
  color: #999;
  display: block;
  overflow: hidden;
  padding: 10px 5px;
  text-overflow: ellipsis;
  white-space: nowrap;
}
.widget-collapse header a i {
  color: rgba(255, 255, 255, 0.2);
  height: 17px;
  line-height: 17px;
  margin-right: 3px;
  text-align: center;
  width: 17px;
}
.widget-collapse header a i.collapse-caret {
  float: right;
  margin-top: 3px;
}
.widget-collapse header a .label {
  border-radius: 1px;
  font-weight: 300;
  padding: 2px 6px;
}
.widget-collapse section .collapse-boby {
  padding: 15px;
}

/*
00 - widget mini chart
------------------------------------------------------------*/
.widget-mini-chart {
  border-bottom: 1px rgba(255, 255, 255, 0.035) solid;
  padding: 15px 15px 20px;
  position: relative;
}
.widget-mini-chart:last-child {
  border-bottom: 0;
}
.widget-mini-chart .mini-chart {
  bottom: 20px;
  left: 20px;
  position: absolute;
}
.widget-mini-chart .pull-right .mini-chart {
  left: auto;
  right: 20px;
}

.dark .widget-mini-chart p {
  border-bottom: 1px #555 solid;
  color: rgba(255, 255, 255, 0.3);
  display: inline-block;
  font-family: Arial, Helvetica, sans-serif;
  font-size: 12px;
  padding: 2px 0;
  position: relative;
}
.dark .widget-mini-chart p:before {
  border-left: 5px solid transparent;
  border-right: 5px solid transparent;
  border-top: 5px solid #666;
  bottom: -6px;
  content: "";
  height: 0;
  left: 8px;
  position: absolute;
  width: 0;
}
.dark .widget-mini-chart p:after {
  border-left: 5px solid transparent;
  border-right: 5px solid transparent;
  border-top: 5px solid #1b1e24;
  bottom: -5px;
  content: "";
  height: 0;
  left: 8px;
  position: absolute;
  width: 0;
}

/*
00 - widget rating
------------------------------------------------------------*/
.widget-rating {
  margin-top: 15px;
}
.widget-rating .glyphicon {
  margin-right: 5px;
}
.widget-rating .rating .glyphicon {
  font-size: 22px;
}
.widget-rating .rating-num {
  font-size: 54px;
  margin-top: 0px;
}
.widget-rating .progress {
  margin-bottom: 18px;
}
.widget-rating .progress.last {
  margin-bottom: 5px;
}
.widget-rating .progress-bar {
  text-align: left;
}
.widget-rating .progress-label {
  margin-bottom: 0;
}
.widget-rating .rating-desc {
  padding-top: 10px;
}
.widget-rating .rating-desc .col-md-3 {
  padding-right: 0px;
}
.widget-rating .col-md-6:first-child {
  padding-right: 0px;
}
.widget-rating .sr-only {
  clip: auto;
  margin-left: 5px;
  overflow: visible;
}

/*
00 - widget tile
------------------------------------------------------------*/
.widget-tile {
  position: relative;
  overflow: hidden;
  margin: -20px;
  padding: 20px;
}
.widget-tile h5 {
  margin-bottom: 5px;
  text-transform: uppercase;
}
.widget-tile h2 {
  margin-bottom: 25px;
}
.widget-tile section {
  position: relative;
}
.widget-tile .hold-icon {
  position: absolute;
  top: 0;
  right: 0.5em;
  color: rgba(0, 0, 0, 0.1);
  font-size: 5em;
}
.widget-tile .progress {
  width: 80%;
}
.widget-tile .progress.progress-over-tile {
  margin: auto -20px 5px;
  width: auto !important;
}

/*
00 - widget plan
------------------------------------------------------------*/
.widget-plan {
  text-align: center;
  padding: 30px;
}
.widget-plan header {
  padding: 10px;
}
.widget-plan header h3 {
  margin-bottom: 5px;
}
.widget-plan section i {
  font-size: 5em;
  color: #ededed;
}
.widget-plan section p {
  padding: 15px 20px;
}
.widget-plan footer {
  margin-bottom: 15px;
}
.widget-plan footer button {
  text-transform: uppercase;
}

/*
00 - widget top-search
------------------------------------------------------------*/
.widget-top-search {
  background-color: #262a33;
  position: absolute;
  left: 0px;
  right: 0;
  top: -185px;
  -webkit-transition: -webkit-transform 0.5s;
  transition: transform 0.5s;
  z-index: 1000;
}
.widget-top-search.nav-top-search {
  -webkit-transform: translate3d(0, 185px, 0);
  -moz-transform: translate3d(0, 185px, 0);
  -ms-transform: translate3d(0, 185px, 0);
  -o-transform: translate3d(0, 185px, 0);
  transform: translate3d(0, 185px, 0);
}
.widget-top-search span.icon {
  position: absolute;
  text-align: center;
  right: 35px;
  top: 30px;
}
.widget-top-search span.icon a {
  font-size: 21px;
  color: rgba(255, 255, 255, 0.3);
}
.widget-top-search span.icon a:hover {
  color: rgba(255, 255, 255, 0.5);
}
.widget-top-search form {
  padding: 15px 25px 25px;
}
.widget-top-search form h2 {
  margin-bottom: 15px;
  font-size: 3.5em;
  color: rgba(255, 255, 255, 0.9);
}
.widget-top-search form input {
  background-color: #313641;
  border: none;
  color: rgba(255, 255, 255, 0.5);
}
.widget-top-search form input:focus {
  background-color: #313641;
}
.widget-top-search form button {
  background-color: #313641;
  border-color: transparent;
  color: rgba(255, 255, 255, 0.5);
}
.widget-top-search form button:hover, .widget-top-search form button:active, .widget-top-search form button:focus {
  color: white;
}

.avatar {
  border: 2px #FFF solid;
  display: inline-block;
  margin-right: 5px;
  position: relative;
}
.avatar img {
  width: 34px;
}

.avatar-small {
  width: 50px;
}

.avatar-mini {
  width: 34px;
}

.avatar-slide {
  color: #FFF;
  padding: 25px 0px 0;
  position: relative;
}
.avatar-slide .avatar-detail {
  margin: 5px auto 25px;
  padding: 5px 15px;
  text-align: center;
}
.avatar-slide .avatar-detail p {
  overflow: hidden;
  text-overflow: ellipsis;
  white-space: nowrap;
  margin-bottom: 5px;
}
.avatar-slide .avatar-detail p a {
  color: #0aa699;
  display: block;
  margin-bottom: 5px;
}
.avatar-slide .avatar-detail p:first-child {
  font-size: 24px;
}
.avatar-slide .avatar-detail span {
  background-color: rgba(255, 255, 255, 0.1);
  color: #FFF;
  display: inline-block;
  font-size: 10px;
  line-height: 25px;
  margin: 5px 5px 0 0;
  padding: 1px 7px;
}
.avatar-slide .avatar-link {
  margin-bottom: 1px;
}
.avatar-slide .avatar-link a {
  color: #FFF;
  font-size: 16px;
  line-height: 35px;
  position: relative !important;
}
.avatar-slide .avatar-link a i {
  height: 20px;
  text-align: center;
  width: 20px;
  z-index: 3;
}
.avatar-slide .avatar-link a.btn {
  border-left: 1px rgba(0, 0, 0, 0.2) solid;
  border-radius: 0;
  background: #372b32;
}
.avatar-slide .avatar-link a.btn:first-child {
  border-left: 0;
}
.avatar-slide .avatar-link a.btn:hover {
  background: #2e242a;
}
.avatar-slide .avatar-link a em {
  height: 14px;
  margin-left: 5px;
  margin-top: -4px;
  position: absolute;
  top: 50%;
  width: 14px;
}
.avatar-slide .avatar-link a em:after {
  background-color: #FFCC33;
  content: "";
  height: 8px;
  left: 0;
  position: absolute;
  width: 8px;
}
.avatar-slide .avatar-link a em.red:after {
  background-color: #E02222;
}
.avatar-slide .avatar-link a em.green:after {
  background-color: #A9D96C;
}
.avatar-slide .avatar-link a em:before {
  background: transparent;
  border: 3px solid #FFF;
  content: "";
  height: 24px;
  left: -8px;
  filter: alpha(opacity=0);
  opacity: 0;
  position: absolute;
  top: -8px;
  width: 24px;
}
.avatar-slide .avatar-link a em.active:before {
  -webkit-animation: sonar 2s ease-out infinite;
  -moz-animation: sonar 2s ease-out infinite;
  animation: sonar 2s ease-out infinite;
}

@-webkit-keyframes sonar {
  from {
    -webkit-transform: scale(0);
    opacity: 1;
  }

  to {
    -webkit-transform: scale(1);
    opacity: 0;
  }
}
@-moz-keyframes sonar {
  from {
    -moz-transform: scale(0);
    opacity: 1;
  }

  to {
    -moz-transform: scale(1);
    opacity: 0;
  }
}
@keyframes sonar {
  from {
    transform: scale(0);
    opacity: 1;
  }

  to {
    transform: scale(1);
    opacity: 0;
  }
}
.avatar-chart {
  display: inline-block;
  height: 118px;
  left: 50%;
  margin-left: -59px;
  position: relative;
  text-align: center;
  width: 118px;
}
.avatar-chart canvas {
  left: 0;
  position: absolute;
  top: 0;
}
.avatar-chart img {
  left: 11px;
  position: absolute;
  top: 11px;
  width: 96px;
}
.avatar-chart .percent {
  background-color: #f35958;
  color: white !important;
  display: inline-block !important;
  font-size: 10px !important;
  padding: 5px 10px;
  position: absolute !important;
  right: -40px;
  text-align: center;
  z-index: 2;
  width: auto !important;
  height: auto !important;
  line-height: 15px !important;
}
.avatar-chart .percent:after {
  content: '%';
  font-size: 0.8em !important;
  margin-left: 0.1em;
}
.avatar-chart .percent:before {
  height: 0;
  width: 0;
  border-color: transparent;
  border-style: solid;
  border-width: 5px;
  border-right-color: #f35958;
  content: "";
  left: -10px;
  position: absolute;
  top: 7px;
}

/*
00 - Corner-flip
------------------------------------------------------------*/
.corner-flip {
  position: relative;
}
.corner-flip .flip {
  border-bottom-color: #e5e9ec;
  border-right: 23px solid transparent;
  border-top: 23px solid #FFF;
  bottom: 0;
  position: absolute;
  right: 0;
  z-index: 3;
}
.corner-flip.flip-bg-white .flip {
  border-bottom-color: #FFF;
  border-top: 23px solid #e5e9ec;
}
.corner-flip .flip:after {
  border-bottom: 23px solid rgba(0, 0, 0, 0.1);
  border-left: 23px solid transparent;
  content: "";
  position: absolute;
  right: 0;
  top: -23px;
}
.corner-flip .flip:before {
  border-bottom: 28px solid;
  border-bottom-color: inherit;
  border-left: 28px solid transparent;
  bottom: -2px;
  content: "";
  position: absolute;
  right: -25px;
}
.corner-flip.flip-gray .flip {
  border-top-color: #CCC;
}

.panel.corner-flip .flip {
  border-top-color: #CCC;
}

/*
00 -Text color
------------------------------------------------------------*/
.color-primary {
  color: #0090d9 !important;
}

.color-success {
  color: #2ecc71 !important;
}

.color-warning {
  color: #ffcc33 !important;
}

.color-danger {
  color: #d9534f !important;
}

.color-info {
  color: #b5d1d8 !important;
}

.color-white {
  color: white !important;
}

.color-inverse {
  color: #62707d !important;
}

.color-theme {
  color: #f35958 !important;
}

.color-theme-inverse {
  color: #0aa699 !important;
}

.color-palevioletred {
  color: #372b32 !important;
}

.color-green {
  color: #99cc00 !important;
}

.color-lightseagreen {
  color: #3db9af !important;
}

.color-purple {
  color: #736086 !important;
}

.color-darkorange {
  color: #f9ba46 !important;
}

.color-pink {
  color: #d13a7a !important;
}

/*
00 - Background Color
------------------------------------------------------------*/
.bg-primary {
  background-color: #0090d9 !important;
  color: white !important;
}

.bg-primary-lighten {
  background-color: #00a1f3 !important;
  color: white !important;
}

.bg-primary-darken {
  background-color: #007fc0 !important;
  color: white !important;
}

.bg-primary-gradient {
  background-color: #0090d9 !important;
  background-color: #0090d9;
  background-image: -webkit-linear-gradient(-425deg, #0090d9 40%, #004c73);
  background-image: linear-gradient(155deg,#0090d9 40%, #004c73);
  color: white !important;
}

.bg-success {
  background-color: #2ecc71 !important;
  color: white !important;
}

.bg-success-lighten {
  background-color: #40d47e !important;
  color: white !important;
}

.bg-success-darken {
  background-color: #29b765 !important;
  color: white !important;
}

.bg-success-gradient {
  background-color: #2ecc71 !important;
  background-color: #2ecc71;
  background-image: -webkit-linear-gradient(-425deg, #2ecc71 40%, #1b7943);
  background-image: linear-gradient(155deg,#2ecc71 40%, #1b7943);
  color: white !important;
}

.bg-warning {
  background-color: #ffcc33 !important;
  color: white !important;
}

.bg-warning-lighten {
  background-color: #ffd24d !important;
  color: white !important;
}

.bg-warning-darken {
  background-color: #ffc61a !important;
  color: white !important;
}

.bg-warning-gradient {
  background-color: #ffcc33 !important;
  background-color: #ffcc33;
  background-image: -webkit-linear-gradient(-425deg, #ffcc33 40%, #cc9900);
  background-image: linear-gradient(155deg,#ffcc33 40%, #cc9900);
  color: white !important;
}

.bg-danger {
  background-color: #d9534f !important;
  color: white !important;
}

.bg-danger-lighten {
  background-color: #de6764 !important;
  color: white !important;
}

.bg-danger-darken {
  background-color: #d43f3a !important;
  color: white !important;
}

.bg-danger-gradient {
  background-color: #d9534f !important;
  background-color: #d9534f;
  background-image: -webkit-linear-gradient(-425deg, #d9534f 40%, #a02622);
  background-image: linear-gradient(155deg,#d9534f 40%, #a02622);
  color: white !important;
}

.bg-info {
  background-color: #b5d1d8 !important;
  color: white !important;
}

.bg-info-lighten {
  background-color: #c6dbe1 !important;
  color: white !important;
}

.bg-info-darken {
  background-color: #a4c7cf !important;
  color: white !important;
}

.bg-info-gradient {
  background-color: #b5d1d8 !important;
  background-color: #b5d1d8;
  background-image: -webkit-linear-gradient(-425deg, #b5d1d8 40%, #72a7b5);
  background-image: linear-gradient(155deg,#b5d1d8 40%, #72a7b5);
  color: white !important;
}

.bg-white {
  background-color: white !important;
  color: #777 !important;
}

.bg-white-lighten {
  background-color: white !important;
  color: #777 !important;
}

.bg-white-darken {
  background-color: #f2f2f2 !important;
  color: #777 !important;
}

.bg-white-gradient {
  background-color: white !important;
  background-color: white;
  background-image: -webkit-linear-gradient(-425deg, white 40%, #cccccc);
  background-image: linear-gradient(155deg,white 40%, #cccccc);
  color: #777 !important;
}

.bg-inverse {
  background-color: #62707d !important;
  color: white !important;
}

.bg-inverse-lighten {
  background-color: #6d7d8b !important;
  color: white !important;
}

.bg-inverse-darken {
  background-color: #57636f !important;
  color: white !important;
}

.bg-inverse-gradient {
  background-color: #62707d !important;
  background-color: #62707d;
  background-image: -webkit-linear-gradient(-425deg, #62707d 40%, #353d44);
  background-image: linear-gradient(155deg,#62707d 40%, #353d44);
  color: white !important;
}

.bg-theme {
  background-color: #f35958 !important;
  color: white !important;
}

.bg-theme-lighten {
  background-color: #f57170 !important;
  color: white !important;
}

.bg-theme-darken {
  background-color: #f14140 !important;
  color: white !important;
}

.bg-theme-gradient {
  background-color: #f35958 !important;
  background-color: #f35958;
  background-image: -webkit-linear-gradient(-425deg, #f35958 40%, #d6110f);
  background-image: linear-gradient(155deg,#f35958 40%, #d6110f);
  color: white !important;
}

.bg-theme-inverse {
  background-color: #0aa699 !important;
  color: white !important;
}

.bg-theme-inverse-lighten {
  background-color: #0bbeaf !important;
  color: white !important;
}

.bg-theme-inverse-darken {
  background-color: #098e83 !important;
  color: white !important;
}

.bg-theme-inverse-gradient {
  background-color: #0aa699 !important;
  background-color: #0aa699;
  background-image: -webkit-linear-gradient(-425deg, #0aa699 40%, #044640);
  background-image: linear-gradient(155deg,#0aa699 40%, #044640);
  color: white !important;
}

.bg-palevioletred {
  background-color: #372b32 !important;
  color: white !important;
}

.bg-palevioletred-lighten {
  background-color: #45363f !important;
  color: white !important;
}

.bg-palevioletred-darken {
  background-color: #292025 !important;
  color: white !important;
}

.bg-palevioletred-gradient {
  background-color: #372b32 !important;
  background-color: #372b32;
  background-image: -webkit-linear-gradient(-425deg, #372b32 40%, black);
  background-image: linear-gradient(155deg,#372b32 40%, black);
  color: white !important;
}

.bg-green {
  background-color: #99cc00 !important;
  color: white !important;
}

.bg-green-lighten {
  background-color: #ace600 !important;
  color: white !important;
}

.bg-green-darken {
  background-color: #86b300 !important;
  color: white !important;
}

.bg-green-gradient {
  background-color: #99cc00 !important;
  background-color: #99cc00;
  background-image: -webkit-linear-gradient(-425deg, #99cc00 40%, #4d6600);
  background-image: linear-gradient(155deg,#99cc00 40%, #4d6600);
  color: white !important;
}

.bg-lightseagreen {
  background-color: #b5d1d8  !important;
  color: white !important;
}

.bg-lightseagreen-lighten {
  background-color: #4cc4ba !important;
  color: white !important;
}

.bg-lightseagreen-darken {
  background-color: #37a69d !important;
  color: white !important;
}

.bg-lightseagreen-gradient {
  background-color: #3db9af !important;
  background-color: #3db9af;
  background-image: -webkit-linear-gradient(-425deg, #3db9af 40%, #246c66);
  background-image: linear-gradient(155deg,#3db9af 40%, #246c66);
  color: white !important;
}

.bg-purple {
  background-color: #736086 !important;
  color: white !important;
}

.bg-purple-lighten {
  background-color: #806b95 !important;
  color: white !important;
}

.bg-purple-darken {
  background-color: #665577 !important;
  color: white !important;
}

.bg-purple-gradient {
  background-color: #736086 !important;
  background-color: #736086;
  background-image: -webkit-linear-gradient(-425deg, #736086 40%, #40354b);
  background-image: linear-gradient(155deg,#736086 40%, #40354b);
  color: white !important;
}

.bg-darkorange {
  background-color: #f9ba46 !important;
  color: white !important;
}

.bg-darkorange-lighten {
  background-color: #fac35f !important;
  color: white !important;
}

.bg-darkorange-darken {
  background-color: #f8b12d !important;
  color: white !important;
}

.bg-darkorange-gradient {
  background-color: #f9ba46 !important;
  background-color: #f9ba46;
  background-image: -webkit-linear-gradient(-425deg, #f9ba46 40%, #d28b07);
  background-image: linear-gradient(155deg,#f9ba46 40%, #d28b07);
  color: white !important;
}

.bg-pink {
  background-color: #d13a7a !important;
  color: white !important;
}

.bg-pink-lighten {
  background-color: #d64f88 !important;
  color: white !important;
}

.bg-pink-darken {
  background-color: #c42e6d !important;
  color: white !important;
}

.bg-pink-gradient {
  background-color: #d13a7a !important;
  background-color: #d13a7a;
  background-image: -webkit-linear-gradient(-425deg, #d13a7a 40%, #861f4b);
  background-image: linear-gradient(155deg,#d13a7a 40%, #861f4b);
  color: white !important;
}

/*
00 - Border Color
------------------------------------------------------------*/
.bd-primary {
  border-color: #0090d9 !important;
}

.bd-primary-darken {
  border-color: #007fc0 !important;
}

.bd-success {
  border-color: #2ecc71 !important;
}

.bd-success-darken {
  border-color: #29b765 !important;
}

.bd-warning {
  border-color: #ffcc33 !important;
}

.bd-warning-darken {
  border-color: #ffc61a !important;
}

.bd-danger {
  border-color: #d9534f !important;
}

.bd-danger-darken {
  border-color: #d43f3a !important;
}

.bd-info {
  border-color: #b5d1d8 !important;
}

.bd-info-darken {
  border-color: #a4c7cf !important;
}

.bd-white {
  border-color: white !important;
}

.bd-white-darken {
  border-color: #f2f2f2 !important;
}

.bd-inverse {
  border-color: #62707d !important;
}

.bd-inverse-darken {
  border-color: #57636f !important;
}

.bd-theme {
  border-color: #f35958 !important;
}

.bd-theme-darken {
  border-color: #f14140 !important;
}

.bd-theme-inverse {
  border-color: #0aa699 !important;
}

.bd-theme-inverse-darken {
  border-color: #098e83 !important;
}

.bd-palevioletred {
  border-color: #372b32 !important;
}

.bd-palevioletred-darken {
  border-color: #292025 !important;
}

.bd-green {
  border-color: #99cc00 !important;
}

.bd-green-darken {
  border-color: #86b300 !important;
}

.bd-lightseagreen {
  border-color: #3db9af !important;
}

.bd-lightseagreen-darken {
  border-color: #37a69d !important;
}

.bd-purple {
  border-color: #736086 !important;
}

.bd-purple-darken {
  border-color: #665577 !important;
}

.bd-darkorange {
  border-color: #f9ba46 !important;
}

.bd-darkorange-darken {
  border-color: #f8b12d !important;
}

.bd-pink {
  border-color: #d13a7a !important;
}

.bd-pink-darken {
  border-color: #c42e6d !important;
}

.easychart {
  display: inline-block;
  height: 110px;
  position: relative;
  text-align: center;
  width: 110px;
}
.easychart canvas {
  left: 0;
  position: absolute;
  top: 0;
}
.easychart .percent {
  background-color: #FFF;
  color: #CCC;
  display: block;
  font-size: 30px;
  font-weight: 700;
  line-height: 118px;
  margin: 10px 10px 10px 18px;
  z-index: 2;
}
.easychart .percent:after {
  content: '%';
  font-size: .5em;
  margin-left: 0.1em;
}

.easy-chart {
  display: inline-block;
  position: relative;
  text-align: center;
}
.easy-chart canvas {
  left: 0;
  top: 0;
}
.easy-chart .percent {
  color: #a7a7a7;
  display: block;
  font-size: 22px;
  height: 100%;
  margin-left: 0.2em;
  position: absolute;
  width: 100%;
  z-index: 2;
}
.easy-chart .percent:after {
  content: '%';
  font-size: .5em;
  margin-left: 0.1em;
}
.easy-chart .percent.up, .easy-chart .percent.down {
  margin-left: 0;
}
.easy-chart .percent.up:before {
  border-bottom: 5px solid #A9D96C;
  border-left: 5px solid transparent;
  border-right: 5px solid transparent;
  content: '';
  margin-right: 0.2em;
  position: relative;
  top: -15px;
}
.easy-chart .percent.down:before {
  border-bottom: 5px solid #A9D96C;
  border-bottom: transparent;
  border-left: 5px solid transparent;
  border-right: 5px solid transparent;
  border-top: 5px solid #f00;
  content: '';
  margin-right: 0.2em;
  position: relative;
  top: -15px;
  top: 17px;
}

.showcase {
  padding: 25px 0;
  position: relative;
}

.showcase-pie-easy ul {
  margin-left: 15%;
  width: 100%;
}
.showcase-pie-easy ul li {
  font-size: 16px;
  padding: 10px 0;
  padding-right: 5%;
  text-align: right;
  width: 80%;
}
.showcase-pie-easy ul li:first-child {
  border-bottom: 1px #DDD solid;
  font-size: 20px;
}
.showcase-pie-easy ul li small {
  color: #CCC;
  display: block;
  font-size: 14px;
  font-weight: normal;
}
.showcase-pie-easy .easy-chart {
  background-color: #FFF;
  left: 5%;
  position: absolute;
}

.showcase-chart-knob {
  padding: 25px 0 0;
}
.showcase-chart-knob span {
  display: inline-block;
  position: absolute;
}
.showcase-chart-knob span i {
  display: inline-block;
  position: absolute;
}
.showcase-chart-knob h5 {
  font-size: 18px;
  margin-top: -25px;
  position: relative;
}
.showcase-chart-knob h5 i {
  color: #CCC;
  font-size: 50px;
  left: 50%;
  margin-top: -75px;
  position: absolute;
}
.showcase-chart-knob span a {
  color: #AAA;
  display: block;
  text-transform: capitalize;
}
.showcase-chart-knob span small {
  display: block;
  font-size: 24px;
}
.showcase-chart-knob span small:after {
  content: "%";
  font-size: 0.8em;
}
.showcase-chart-knob span i {
  color: #CCC;
  font-size: 25px;
}
.showcase-chart-knob span:nth-child(1) {
  left: 0%;
  text-align: left;
}
.showcase-chart-knob span:nth-child(1) a {
  padding-left: 35px;
}
.showcase-chart-knob span:nth-child(2) {
  right: 0%;
  text-align: right;
}
.showcase-chart-knob span:nth-child(2) i {
  font-size: 30px;
  right: 0%;
  top: -5px;
}
.showcase-chart-knob span:nth-child(2) a {
  padding-right: 20px;
}

#content.after-mail-box:after {
  -webkit-transition: all 0.5s;
  -moz-transition: all 0.5s;
  transition: all 0.5s;
  background-color: rgba(0, 0, 0, 0.45);
  content: "";
  height: 100%;
  left: 0;
  filter: alpha(opacity=0);
  opacity: 0;
  position: absolute;
  top: 0;
  visibility: hidden;
  width: 100%;
  z-index: 99;
}
#content.after-mail-box .mail-tools {
  -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, 0.05);
  box-shadow: 0 1px 1px rgba(0, 0, 0, 0.05);
  background-color: #FFF;
  margin-bottom: 15px;
  padding: 10px 10px 8px;
  text-align: center;
}
#content.after-mail-box .mail-tools h4 {
  line-height: 34px;
}

#mailbox {
  -webkit-transition: transform 0.5s;
  -moz-transition: transform 0.5s;
  transition: transform 0.5s;
  background-color: white;
  bottom: 0;
  -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, 0.05);
  box-shadow: 0 1px 1px rgba(0, 0, 0, 0.05);
  margin-left: 0px;
  margin-top: 55px;
  overflow: hidden;
  position: absolute;
  top: 0;
  width: 320px;
}
#mailbox #nav-scroll {
  padding: 0;
  width: 337px;
}

.mail-menu ul {
  padding: 0px 0px 30px;
}
.mail-menu ul li {
  position: relative;
  border-bottom: 1px rgba(0, 0, 0, 0.1) solid;
}
.mail-menu ul li.mail-menu-label {
  text-transform: uppercase;
  font-family: Open Sans;
  font-size: 16px;
  color: #A1A1A1;
  padding: 10px 20px;
}
.mail-menu ul li.mail-menu-btn {
  padding: 0 15px 25px;
}
.mail-menu ul li.mail-menu-btn button {
  border-radius: 0;
  line-height: 35px;
  text-transform: uppercase;
  margin: 0;
}
.mail-menu ul li.mail-menu-btn button i {
  margin-right: 5px !important;
}
.mail-menu ul li a {
  display: block;
  border-left: 5px solid;
  border-left-color: transparent;
  padding: 10px 20px;
  color: #666;
  text-transform: capitalize;
  -webkit-transition: all 0.25s;
  -moz-transition: all 0.25s;
  transition: all 0.25s;
}
.mail-menu ul li.active a {
  border-left-color: #6CC3A0;
  background-color: #2E2E31;
  color: #EFEFEF;
}
.mail-menu ul li a:hover {
  background-color: #2E2E31;
  color: #CCC;
}
.mail-menu ul li i {
  margin-right: 15px;
  width: 17px;
  height: 17px;
  text-align: center;
}
.mail-menu ul li .badge {
  position: absolute;
  right: 20px;
}
.mail-menu ul li span.label {
  position: absolute;
  right: 20px;
  display: inline-block;
  width: 15px;
  height: 15px;
  top: 50%;
  margin-top: -7px;
  padding: 0;
}

.mail-list {
  padding: 10px 25px;
}
.mail-list header {
  border-bottom: 1px #ededed solid;
  padding: 10px 0px 25px;
  background-color: #FFF;
}
.mail-list header .header-text {
  font-family: "Ubuntu";
  font-size: 3.5em;
  text-transform: capitalize;
  color: #717171;
  display: inline-block;
  margin-bottom: 10px;
}
.mail-list ul.mlist li {
  position: relative;
  padding: 10px;
  border-bottom: 1px #ededed solid;
}
.mail-list ul.mlist li:hover {
  background-color: #FCFCFC;
}
.mail-list ul.mlist li .iCheck {
  position: relative;
}
.mail-list ul.mlist li span {
  display: inline-block;
  padding: 0 40px 0 30px;
}
.mail-list ul.mlist li p {
  text-overflow: ellipsis;
  white-space: nowrap;
  overflow: hidden;
}
.mail-list ul.mlist li h5 {
  text-overflow: ellipsis;
  white-space: nowrap;
  overflow: hidden;
  padding-top: 3px;
  width: 180px;
}
.mail-list ul.mlist li p {
  padding-top: 10px;
  margin: 0;
  width: 210px;
  color: #CCC;
}
.mail-list ul.mlist li p strong {
  color: #999;
}
.mail-list ul.mlist li time {
  font-size: 10px;
  color: #BBB;
}
.mail-list ul.mlist li label {
  content: "";
  top: -1px;
  right: 0px;
  position: absolute;
  border-top: 20px solid #99CC00;
  border-left: 20px solid transparent;
}
.mail-list ul.mlist li .mail-attach {
  position: absolute;
  right: 17px;
  bottom: 10px;
  color: #DDD;
}
.mail-list ul.mlist li .mail-tools {
  position: absolute;
  right: 10px;
  top: 10px;
  display: none;
}
.mail-list ul.mlist li .mail-tools a {
  display: inline-block;
  padding-right: 5px;
  color: #AAA;
}
.mail-list ul.mlist li:hover .mail-tools {
  display: block;
}
.mail-list ul.mlist li a.mail-favourite {
  position: absolute;
  left: 12px;
  top: 35px;
  font-size: 18px;
  color: #EDEDED;
}
.mail-list ul.mlist li a.mail-favourite.active {
  color: #FFCC33;
}

.mail-pagination {
  display: inline-block;
  line-height: 34px;
  height: 34px;
  margin-top: 20px;
  padding: 0 10px;
  font-style: italic;
  font-size: 12px;
  float: left;
}

.mail-title section {
  padding: 10px 15px 15px;
}
.mail-title section .mail-thumbnail {
  display: inline-block;
}
.mail-title section .mail-thumbnail img {
  width: 40px;
  border: 2px #FFF solid;
}
.mail-title section span {
  display: inline-block;
  background-color: #CCC;
  background-color: rgba(0, 0, 0, 0.1);
  margin: 3px;
  color: #FFF;
  padding: 5px 10px;
  border-radius: 2px;
  font-size: 11px;
  font-family: Arial, Helvetica, sans-serif;
}
.mail-title section span a {
  color: #DDD;
}
.mail-title section span a:hover {
  color: #FFF;
}

.mail-tools-action {
  margin-bottom: 25px;
  border-top: 1px #EDEDED solid;
}

.mail-seach {
  padding: 0 0 15px;
}
.mail-seach input {
  background-color: #EDEDED;
  color: #AAA;
}
.mail-seach input:focus {
  border-color: #DDD;
}
.mail-seach input:-moz-placeholder, .mail-seach input::-moz-placeholder, .mail-seach input:-ms-input-placeholder, .mail-seach input::-webkit-input-placeholder {
  color: #CCC;
}

.mail-attach-list {
  border-top: 1px #EDEDED solid;
  padding: 15px 0 0;
  margin-bottom: 5px;
}
.mail-attach-list h5 {
  font-family: Arial, Helvetica, sans-serif;
  font-size: 12px;
  font-weight: 700;
}
.mail-attach-list ul {
  padding: 10px 5px 0;
}
.mail-attach-list ul li {
  padding-bottom: 5px;
  font-size: 12px;
}
.mail-attach-list ul li .label {
  margin-right: 5px;
}

/*
00 -  gallery albums
------------------------------------------------------------*/
.gallery-albums h5 {
  margin: 7px 0 0;
}

.img-preview {
  height: inherit !important;
  width: 100% !important;
}

#gallery-content {
  min-height: 700px;
  position: relative;
  width: 100%;
}
#gallery-content #canvas_loading {
  left: 50%;
  margin-left: -16px;
  position: absolute;
  top: 50%;
}
#gallery-content.fullScreen {
  height: 100%;
  overflow: hidden;
}

#gallery {
  position: relative;
}
#gallery div {
  background-color: #262729;
  float: left;
  opacity: 0;
  position: relative;
  -moz-transform: scale(0.8);
  -webkit-transform: scale(0.8);
  transform: scale(0.8);
  -moz-transition: 0.4s;
  -webkit-transition: 0.4s;
  transition: 0.4s;
}
#gallery div span.img-tools {
  bottom: 10px;
  left: 7px;
  position: absolute;
  right: 7px;
  text-align: center;
}
#gallery div a {
  background-color: #C30;
  color: #FFF;
  display: inline-block;
  margin: 0 2px;
  opacity: 0;
  padding: 5px 10px;
  -moz-transition: 0.4s;
  -webkit-transition: 0.4s;
  transition: 0.4s;
}
#gallery section {
  background-position: center center;
  background-size: cover;
  position: relative;
  -moz-transition: 0.4s;
  -webkit-transition: 0.4s;
  transition: 0.4s;
}
#gallery div.static:hover section, #gallery div.show:hover section {
  opacity: 0.6 !important;
}
#gallery div.static:hover a, #gallery div.show:hover a {
  opacity: 1 !important;
}
#gallery div.static {
  opacity: 1;
  -moz-transform: none;
  -webkit-transform: none;
  transform: none;
  -moz-transition: opacity 0.4s;
  -webkit-transition: opacity 0.4s;
  transition: opacity 0.4s;
}
#gallery div.next, #gallery div.prev {
  background-color: #262729;
  color: #FFF;
  cursor: pointer;
  font-size: 24px;
  text-align: center;
}
#gallery div.show {
  opacity: 1;
  -moz-transform: scale(1);
  -webkit-transform: scale(1);
  transform: scale(1);
}

/*
00 -  profile overview
------------------------------------------------------------*/
#overview {
  background: url(../img/overview.jpg) no-repeat left top;
  background-color: #454545;
  background-size: cover !important;
  border-bottom: 5px #0aa699 solid;
  height: 237px;
  position: relative;
  -webkit-background-size: cover !important;
  -moz-background-size: cover !important;
  -o-background-size: cover !important;
}

.profile-cover {
  background: url(../img/overview.png) bottom repeat;
  height: 232px;
  margin-right: -100px;
  overflow: hidden;
  padding: 15px 25px;
}

.profile-status {
  background-color: rgba(255, 255, 255, 0.2);
  border-radius: 2px;
  bottom: 17px;
  display: inline-block;
  position: absolute;
  right: 0px;
}
.profile-status a {
  color: #FFF;
  font-size: 1.5em;
  font-weight: 700;
}
.profile-status a:hover {
  color: #EEE;
}
.profile-status a small {
  display: block;
  font-size: 0.5em;
  font-weight: 300;
}

.profile-avatar {
  bottom: 15px;
  position: absolute;
}
.profile-avatar div {
  margin: 10px 0 5px;
}
.profile-avatar span {
  background-color: #FFF;
  background-color: rgba(255, 255, 255, 0.6);
  border-radius: 2px;
  display: inline-block;
  font-size: 18px;
  margin-left: -13px;
  padding: 2px 15px 5px;
}
.profile-avatar img {
  border: 3px #FFF solid;
  display: inline-block;
  margin: 0 0 7px;
  position: relative;
  width: 50px;
  z-index: 2;
}

.profile-about {
  background-color: #FFF;
  height: 232px;
  overflow: hidden;
  padding: 15px 25px;
  position: absolute;
}

/*
00 -  profile comment
------------------------------------------------------------*/
.comment {
  margin: 20px auto 0 auto;
  padding: 5px;
}
.comment .reply {
  margin: 20px 0px 0 80px;
}

.comment-content {
  margin: 0 0 0 80px;
}
.comment-content > span {
  background: #f2f4f6;
  border-radius: 3px 3px 0 0px;
  color: #444;
  display: block;
  display: block;
  font-size: .9em;
  line-height: 150%;
  padding: 10px 15px 10px 15px;
  position: relative;
  width: 100%;
}

.comment .reply .comment-content > span {
  background: #f2f4f6;
}
.comment p {
  font-family: 'Open Sans';
  text-shadow: 1px 1px 2px #fff;
}
.comment strong {
  font-weight: 700;
}
.comment .author {
  font-size: .8em;
  font-weight: 300;
}
.comment img {
  border: 3px rgba(111, 111, 111, 0.1) solid;
  display: inline-block;
  float: left;
  margin: 0 10px;
  max-width: 50px;
}
.comment footer {
  background-color: #e9ecf0;
  border-radius: 0 0 3px 3px;
  padding: 10px 10px 10px 7px;
}
.comment footer img {
  border: 3px rgba(255, 255, 255, 0.5) solid;
  max-width: 35px;
}
.comment footer > .message-input {
  margin-left: 60px;
}
.comment footer > .message-input input[type=text] {
  border: none;
  border-radius: 2px;
  color: #c2c2c2;
  float: left;
  font-size: 11px;
  margin: 0;
  padding: 10px;
  width: 100%;
}

/*
00 - box-feed and Isotope filtering 
------------------------------------------------------------*/
.box-feed [class*=col-] {
  margin-bottom: 20px;
}

.isotope-item {
  z-index: 2;
}

.isotope-hidden.isotope-item {
  pointer-events: none;
  z-index: 1;
}

.isotope {
  -moz-transition-duration: 0.8s;
  -ms-transition-duration: 0.8s;
  -o-transition-duration: 0.8s;
  -webkit-transition-duration: 0.8s;
  transition-duration: 0.8s;
  -moz-transition-property: height, width;
  -ms-transition-property: height, width;
  -o-transition-property: height, width;
  -webkit-transition-property: height, width;
  transition-property: height, width;
}
.isotope .isotope-item {
  -moz-transition-duration: 0.8s;
  -ms-transition-duration: 0.8s;
  -o-transition-duration: 0.8s;
  -webkit-transition-duration: 0.8s;
  transition-duration: 0.8s;
  -moz-transition-property: -moz-transform, opacity;
  -ms-transition-property: -ms-transform, opacity;
  -o-transition-property: top, left, opacity;
  -webkit-transition-property: -webkit-transform, opacity;
  transition-property: transform, opacity;
}
.isotope.no-transition {
  -moz-transition-duration: 0s;
  -ms-transition-duration: 0s;
  -o-transition-duration: 0s;
  -webkit-transition-duration: 0s;
  transition-duration: 0s;
}
.isotope.no-transition .isotope-item {
  -moz-transition-duration: 0s;
  -ms-transition-duration: 0s;
  -o-transition-duration: 0s;
  -webkit-transition-duration: 0s;
  transition-duration: 0s;
}
.isotope .isotope-item.no-transition {
  -moz-transition-duration: 0s;
  -ms-transition-duration: 0s;
  -o-transition-duration: 0s;
  -webkit-transition-duration: 0s;
  transition-duration: 0s;
}

/*
00 - invoice 
----------------------*/
.invoice {
  margin-bottom: 35px;
}

.invoice h4 {
  margin-bottom: 10px;
}

/*
00 - Search result
----------------------*/
.resultSearch {
  margin: 0;
}
.resultSearch small.resultStats {
  color: #CCC;
  display: block;
  padding: 7px 0 22px 0;
  border-bottom: 1px #ededed solid;
  margin-bottom: 25px;
}
.resultSearch ul.resultItem li {
  margin-bottom: 30px;
}
.resultSearch ul.resultItem li h4 a {
  color: #1e0fbe;
}
.resultSearch ul.resultItem li h4 a:hover {
  text-decoration: underline;
}
.resultSearch ul.resultItem li p time {
  color: #CCC;
  display: inline-block;
  margin-right: 7px;
}
.resultSearch ul.resultItem li .rating span {
  color: #CCC;
  display: inline-block;
  margin-right: 7px;
}
.resultSearch ul.resultItem li .rating span:before {
  color: #ffcc33;
}
.resultSearch ul.resultItem li img {
  width: 100%;
}
.resultSearch ul.resultItem.resultImages li {
  margin-bottom: 20px;
}
.resultSearch ul.resultItem .resultThumbnail {
  padding: 0;
}

/*
00 - Pricing Table plan
----------------------*/
.pricing .plan {
  background: #fff;
  border-radius: 3px;
  margin: 0 0 15px;
  padding: 0 0 20px;
  text-align: center;
  -webkit-transition: all 0.5s;
  -moz-transition: all 0.5s;
  transition: all 0.5s;
  -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, 0.05);
  box-shadow: 0 1px 1px rgba(0, 0, 0, 0.05);
}
.pricing .plan li {
  border-top: 1px solid #f5f5f5;
  color: #ccc;
  padding: 10px 15px;
  -webkit-transition: all 0.5s;
  -moz-transition: all 0.5s;
  transition: all 0.5s;
}
.pricing .plan li.plan-price {
  border-top: 0;
}
.pricing .plan li.plan-name {
  background: #0aa699;
  border-top: 0;
  border-bottom: 5px solid #07766d;
  color: #fff;
  font-size: 24px;
  padding: 30px;
  text-transform: uppercase;
  font-weight: 700;
}
.pricing .plan li.plan-price {
  color: #a1a1a1;
  font-size: 54px;
  font-weight: 300;
  padding: 5px 0;
}
.pricing .plan li.plan-price i {
  font-size: 28px;
  font-style: normal;
  position: relative;
  top: -8px;
}
.pricing .plan li.plan-price span {
  display: block;
  font-size: 14px;
  font-style: normal;
  position: relative;
  top: -10px;
}
.pricing .plan li > strong {
  color: #a1a1a1;
}
.pricing .plan li.plan-action {
  border-top: 0;
  margin-top: 10px;
}
.pricing .plan.featured li.plan-name {
  background: #1b1e24;
  border-bottom: 5px solid #313641;
}

/*
00 -  google map
------------------------------------------------------------*/
#Gmap {
  bottom: 0px;
  left: 0;
  position: absolute;
  right: 0;
  top: 55px;
}

#mapSearch {
  background-color: #FFF;
  -webkit-box-shadow: 0 2px 2px rgba(0, 0, 0, 0.125);
  box-shadow: 0 2px 2px rgba(0, 0, 0, 0.125);
  left: 40px;
  padding: 0;
  position: absolute;
  right: 30%;
  top: 62px;
}
#mapSearch .form-control, #mapSearch .btn {
  border: 1px solid transparent;
  border-radius: 0;
  margin: 0;
}

.real-boxs .form-control, .real-boxs .btn {
  border: 1px solid transparent;
  border-radius: 0;
  margin: 0;
}

#mapSetting {
  background-color: #FFF;
  -webkit-box-shadow: 0 2px 2px rgba(0, 0, 0, 0.125);
  box-shadow: 0 2px 2px rgba(0, 0, 0, 0.125);
  position: absolute;
  right: -200px;
  top: 96px;
  -moz-transition: all 0.5s;
  -webkit-transition: all 0.5s;
  transition: all 0.5s;
  width: 200px;
}
#mapSetting .dropdown-menu {
  margin: 10px 0;
}
#mapSetting.active {
  -webkit-transform: translate3d(-200px, 0, 0);
  transform: translate3d(-200px, 0, 0);
}
#mapSetting .mapTools {
  border-radius: 0;
  -webkit-box-shadow: 0 2px 2px rgba(0, 0, 0, 0.125);
  box-shadow: 0 2px 2px rgba(0, 0, 0, 0.125);
  left: -38px;
  position: absolute;
  top: 10px;
}
#mapSetting .panel-body {
  padding-bottom: 0px;
}

#mapControl {
  background-color: #FFF;
  bottom: 0px;
  -webkit-box-shadow: 0 -2px 2px rgba(0, 0, 0, 0.125);
  box-shadow: 0 -2px 2px rgba(0, 0, 0, 0.125);
  left: 0px;
  overflow: auto;
  overflow: hidden;
  position: absolute;
  right: 0px;
  -moz-transition: all 0.5s;
  -webkit-transition: all 0.5s;
  transition: all 0.5s;
}
#mapControl.active {
  -webkit-transform: translate3d(0, 120px, 0);
  transform: translate3d(0, 120px, 0);
}
#mapControl .panel {
  margin-bottom: 0px;
}

#mapSetting .panel {
  margin-bottom: 0px;
}

#mapControl .cp-slider-wrapper {
  padding: 10px 5px 5px;
}
#mapControl .cp-slider-wrapper nav a {
  height: 34px;
  line-height: 34px;
  top: 2px;
  width: 34px;
}

#mapDetail {
  padding: 15px;
}

/*
00 -  slide trash
------------------------------------------------------------*/
#slide-trash {
  background-color: #2E2E31;
  bottom: 10px;
  color: #CCC;
  position: absolute;
  right: -300px;
  text-align: center;
  -moz-transition: all 0.5s;
  -webkit-transition: all 0.5s;
  transition: all 0.5s;
  width: 300px;
  z-index: 20;
}
#slide-trash.active {
  -webkit-transform: translate3d(-310px, 0, 0);
  transform: translate3d(-310px, 0, 0);
}
#slide-trash section {
  padding: 25px 10px;
}
#slide-trash i {
  display: block;
  font-size: 36px;
}
#slide-trash span {
  display: block;
  margin: 7px;
}
#slide-trash.active-hover {
  background-color: #D9534F;
  color: #EEE;
}

/*
00 -  Account login and lock screen page
------------------------------------------------------------*/
.account-wall {
  margin-top: 60px;
  padding: 0px 0px 20px 0px;
  -webkit-transition: all 0.5s ease-in-out;
  -moz-transition: all 0.5s ease-in-out;
  transition: all 0.5s ease-in-out;
}
.account-wall .account-avatar {
  min-height: 118px;
}
.account-wall .account-avatar img {
  margin-left: 11px;
  margin-top: 11px;
  position: absolute;
  width: 96px;
}
.account-wall .login-title {
  color: #6f7b8a;
  display: block;
  font-size: 26px;
  font-weight: 300;
  margin: 20px 0 10px;
  text-transform: uppercase;
}
.account-wall .login-title span {
  font-weight: 700;
}
.account-wall .login-title small {
  display: block;
  color: #6f7b8a;
  font-size: 12px;
  font-weight: 300;
  padding-top: 10px;
  text-transform: capitalize;
}
.account-wall .form-signin {
  margin: 0 auto;
  max-width: 330px;
  padding: 15px;
}
.account-wall .form-signin .form-signin-heading, .account-wall .form-signin .checkbox, .account-wall .form-signin section {
  margin-bottom: 10px;
}
.account-wall .form-signin .form-control {
  background-color: transparent;
  border-color: transparent;
  font-size: 16px;
  height: auto;
  padding: 10px 20px;
  position: relative;
}
.account-wall .form-signin .input-group {
  background-color: #FFF;
  border-top: 1px #f5f5f5 solid;
  -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, 0.05);
  box-shadow: 0 1px 1px rgba(0, 0, 0, 0.05);
  margin-bottom: -1px;
}
.account-wall .form-signin .input-group:nth-child(2) {
  margin-bottom: 20px;
}
.account-wall .form-signin .input-group-addon {
  background-color: transparent;
  border: none;
  position: relative;
}
.account-wall .form-signin .input-group-addon i {
  color: #e1e1e1;
  margin: auto 5px;
  text-align: center;
  width: 18px;
}
.account-wall .form-signin .input-group-addon i:after {
  border-left: 1px #e1e1e1 solid;
  content: "";
  height: 50%;
  margin-left: 15px;
  position: absolute;
  top: 25%;
}
.account-wall span.or {
  color: #666666;
  display: block;
  font-size: 12px;
  margin: 20px 10px 25px;
  position: relative;
  text-align: center;
}
.account-wall span.or:after {
  background-color: #d6dde1;
  content: attr(data-text);
  display: inline-block;
  width: 50px;
  height: 50px;
  line-height: 50px;
  position: relative;
  -moz-border-radius: 50%;
  -webkit-border-radius: 50%;
  border-radius: 50%;
}
.account-wall span.or:before {
  background-color: white;
  content: "";
  height: 1px;
  left: -10px;
  right: -10px;
  position: absolute;
  top: 50%;
}
.account-wall .help {
  margin-top: 5px;
}
.account-wall .footer-link {
  display: block;
  font-size: 12px;
  margin-top: 10px;
  text-align: center;
}

/*
00 -  Color full box in top page (login , lock screen ,404)
------------------------------------------------------------*/
.real-border .col-xs-1 {
  height: 3px;
  padding: 0;
}
.real-border .col-xs-1:nth-child(1) {
  background-color: #6CC3A0;
}
.real-border .col-xs-1:nth-child(2) {
  background-color: #DC4D79;
}
.real-border .col-xs-1:nth-child(3) {
  background-color: #BD3B47;
}
.real-border .col-xs-1:nth-child(4) {
  background-color: #DD4444;
}
.real-border .col-xs-1:nth-child(5) {
  background-color: #FD9C35;
}
.real-border .col-xs-1:nth-child(6) {
  background-color: #FEC42C;
}
.real-border .col-xs-1:nth-child(7) {
  background-color: #D4DF5A;
}
.real-border .col-xs-1:nth-child(8) {
  background-color: #2ECC71;
}
.real-border .col-xs-1:nth-child(9) {
  background-color: #3DA0DB;
}
.real-border .col-xs-1:nth-child(10) {
  background-color: #08408B;
}
.real-border .col-xs-1:nth-child(11) {
  background-color: #575757;
}
.real-border .col-xs-1:nth-child(12) {
  background-color: #111;
}

/*
00 - List Rounded
------------------------------------------------------------*/
ol {
  counter-reset: li;
  list-style: none;
  margin-bottom: 1em;
  padding: 0;
}
ol ol {
  margin: 0 0 0 2em;
}
ol.rounded-list li {
  position: relative;
}
ol.rounded-list a {
  background: #FFF;
  color: #A1A1A1;
  display: block;
  margin: 10px 0 10px 20px;
  padding: .7em .4em .7em 2em;
  position: relative;
  text-decoration: none;
  -webkit-transition: all 0.3s ease-out;
  -moz-transition: all 0.3s ease-out;
  transition: all 0.3s ease-out;
}
ol.rounded-list a:hover {
  background: #f1f3f5;
}
ol.rectangle-list a:hover {
  background: #f1f3f5;
}
ol.rounded-list a:hover:before {
  -webkit-transform: rotate(360deg);
  -moz-transform: rotate(360deg);
  -ms-transform: rotate(360deg);
  -o-transform: rotate(360deg);
  transform: rotate(360deg);
}
ol.rounded-list a:before {
  background: #f35958;
  color: #FFF;
  content: counter(li);
  counter-increment: li;
  height: 30px;
  left: -1.3em;
  line-height: 30px;
  margin-top: -15px;
  position: absolute;
  text-align: center;
  top: 50%;
  -webkit-transition: all 0.3s ease-out;
  -moz-transition: all 0.3s ease-out;
  transition: all 0.3s ease-out;
  width: 30px;
}

/*
00 - List Rectangle
------------------------------------------------------------*/
ol.rectangle-list a {
  background: #FFF;
  color: #A1A1A1;
  display: block;
  margin: 0px 0 10px 30px;
  padding: .4em .4em .4em .8em;
  position: relative;
  text-decoration: none;
  -webkit-transition: all 0.3s ease-out;
  -moz-transition: all 0.3s ease-out;
  transition: all 0.3s ease-out;
}
ol.rectangle-list a small {
  color: #A1A1A1;
  font-size: 10px;
  font-style: italic;
  padding-left: 5px;
}
ol.rectangle-list a:before {
  background: #0aa699;
  color: #FFF;
  content: counter(li);
  counter-increment: li;
  height: 30px;
  left: -30px;
  line-height: 30px;
  margin-top: -15px;
  position: absolute;
  text-align: center;
  top: 50%;
  width: 30px;
  z-index: 2;
}
ol.rectangle-list a:after {
  border: .5em solid transparent;
  content: '';
  left: -15px;
  margin-top: 4px;
  position: absolute;
  -webkit-transition: all 0.3s ease-out;
  -moz-transition: all 0.3s ease-out;
  transition: all 0.3s ease-out;
}
ol.rectangle-list a:hover:after {
  border-left-color: #098e83;
  left: 0;
}

/*
00 -  Breaking line
------------------------------------------------------------*/
.breakline {
  margin-bottom: 20px;
  overflow: hidden;
  position: relative;
  width: 100%;
}
.breakline h2 {
  background-color: #666666;
  border-bottom: 3px #454545 solid;
  color: #FFF;
  display: inline-block;
  font-family: "Open Sans";
  font-size: 18px;
  font-weight: 300;
  margin: 0;
  padding: 7px 20px 5px;
  position: relative;
  text-transform: uppercase;
  text-shadow: 1px 2px 0 rgba(0, 0, 0, 0.1);
  -webkit-transition: all 0.3s linear;
  -moz-transition: all 0.3s linear;
  transition: all 0.3s linear;
  z-index: 4;
}
.breakline h2 [class^="icon-"]:before, .breakline h2 [class*=" icon-"]:before {
  color: #FFF;
  font-size: 18px;
  margin: 8px 8px 8px 0;
  text-shadow: 0 1px 0 rgba(0, 0, 0, 0.8);
}
.breakline.center {
  text-align: center;
}
.breakline.right {
  text-align: right;
}
.breakline:after {
  border-bottom: 3px #d6d6d6 solid;
  margin-top: -1px;
}
.breakline:before, .breakline:after {
  border-bottom: 3px #d6d6d6 solid;
  content: "";
  height: 1px;
  left: 0;
  position: absolute;
  top: 50%;
  width: 100%;
}

/*
00 - divider header
------------------------------------------------------------*/
div.divider {
  margin: 20px 0 15px;
  padding-bottom: 7px;
}
div.divider h2, div.divider h3, div.divider h4, div.divider h5 {
  font-family: "Ubuntu";
  font-weight: 300;
  text-transform: capitalize;
}
div.divider label.color {
  margin-bottom: 0;
}

li div.divider {
  margin: 20px 0 15px;
  padding-bottom: 0px;
}

/*
00 -  404 error page
------------------------------------------------------------*/
.wrapper-shadow {
  background-color: #000;
  -webkit-box-shadow: 0 0px 20px rgba(0, 0, 0, 0.3);
  box-shadow: 0 0px 20px rgba(0, 0, 0, 0.3);
}

.real-border {
  bottom: 0;
  left: 0;
  position: absolute;
  right: 0;
  top: 0;
}

.real-boxs {
  bottom: 0;
  left: 0;
  padding: 50px;
  position: absolute;
  right: 0;
  top: 0;
}

.real-search {
  background-color: #FFF;
  -webkit-box-shadow: 0 2px 2px rgba(0, 0, 0, 0.05);
  box-shadow: 0 2px 2px rgba(0, 0, 0, 0.05);
  padding: 0;
  position: absolute;
  left: 50%;
  margin-left: -300px;
  top: 50px;
  width: 600px;
  z-index: 2;
}

@media all and (max-width: 767px) {
  .real-search {
    margin-left: -150px;
    width: 300px;
  }
}
.error-template {
  padding: 80px 15px;
}
.error-template h1 {
  font-family: "Ubuntu";
  font-size: 3.5em;
  font-weight: 300;
  line-height: 55px;
  margin-bottom: 0.5em;
  text-transform: uppercase;
}

.error-details {
  padding: 10px 0;
}

.error-actions {
  margin-bottom: 15px;
  margin-top: 15px;
}
.error-actions .btn {
  margin-right: 10px;
}

 /*
00 - Dropdown Multi submenu
------------------------------------------------------------*/
.dropdown-submenu {
  position: relative;
}

.dropdown-submenu > .dropdown-menu {
  top: -7px;
  left: 100%;
  margin-left: 0px;
}

.dropdown-submenu:hover > .dropdown-menu {
  display: block;
}

.dropdown-submenu.pull-left {
  float: none;
}

.dropdown-submenu.pull-left > .dropdown-menu {
  left: -100%;
  margin-left: 10px;
}

/*
  mmenu CSS
*/
html.mm-opened .mm-page, html.mm-opened #mm-blocker, html.mm-opened .mm-fixed-top, html.mm-opened .mm-fixed-bottom, html.mm-opened .mm-menu.mm-horizontal > .mm-panel, body.leftMenu .mm-page, body.leftMenu #mm-blocker, body.leftMenu .mm-fixed-top, body.leftMenu .mm-fixed-bottom, body.leftMenu .mm-menu.mm-horizontal > .mm-panel {
  -webkit-transition: -webkit-transform 0.5s ease;
  transition: transform 0.5s ease;
}
html.mm-opened .mm-page, html.mm-opened #mm-blocker, body.leftMenu .mm-page, body.leftMenu #mm-blocker {
  left: 0%;
  top: 0;
  margin: 0;
  border: 0px solid transparent;
}
html.mm-opened.mm-opening .mm-page, html.mm-opened.mm-opening #mm-blocker, body.leftMenu.mm-opening .mm-page, body.leftMenu.mm-opening #mm-blocker {
  border: 0px solid rgba(100, 100, 100, 0);
}

.mm-menu .mm-hidden {
  display: none;
}

.mm-fixed-top,
.mm-fixed-bottom {
  position: fixed;
  left: 0;
}

.mm-fixed-top {
  top: 0;
}

.mm-fixed-bottom {
  bottom: 0;
}

html.mm-opened .mm-page, .mm-menu > .mm-panel {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}

html.mm-opened {
  width: 100%;
  height: 100%;
}
html.mm-opened body {
  width: 100%;
  height: 100%;
  overflow: hidden;
  position: relative;
}

html.mm-opened .mm-page {
  height: 100%;
  overflow: hidden;
  position: fixed;
  right: auto;
  left: auto;
}

html.mm-background .mm-page {
  background: inherit;
}

#mm-blocker {
  background: rgba(255, 255, 255, 0);
  opacity: 0;
  display: none;
  width: 100%;
  height: 100%;
  position: absolute;
  z-index: 9999;
}

html.mm-opened #mm-blocker,
html.mm-blocking #mm-blocker {
  display: block;
}

.mm-menu {
  background: inherit;
  overflow: hidden;
  bottom: 0;
  padding: 0;
  position: absolute;
  left: 0;
  top: 0;
  z-index: 0;
}
.mm-menu.mm-current {
  display: block;
}
.mm-menu > .mm-panel {
  background: inherit;
  -webkit-overflow-scrolling: touch;
  overflow: scroll;
  overflow-x: hidden;
  width: 100%;
  height: 100%;
  padding: 20px;
  position: absolute;
  top: 0;
  z-index: 0;
  -webkit-transform: translate3d(100%, 0, 0);
  -moz-transform: translate3d(100%, 0, 0);
  -ms-transform: translate3d(100%, 0, 0);
  -o-transform: translate3d(100%, 0, 0);
  transform: translate3d(100%, 0, 0);
}
.mm-menu > .mm-panel.mm-opened {
  -webkit-transform: translate3d(0, 0, 0);
  -moz-transform: translate3d(0, 0, 0);
  -ms-transform: translate3d(0, 0, 0);
  -o-transform: translate3d(0, 0, 0);
  transform: translate3d(0, 0, 0);
}
.mm-menu > .mm-panel.mm-subopened {
  -webkit-transform: translate3d(-40%, 0, 0);
  -moz-transform: translate3d(-40%, 0, 0);
  -ms-transform: translate3d(-40%, 0, 0);
  -o-transform: translate3d(-40%, 0, 0);
  transform: translate3d(-40%, 0, 0);
}
.mm-menu > .mm-panel.mm-highest {
  z-index: 1;
}
.mm-menu > .mm-panel.mm-hidden {
  display: block;
  visibility: hidden;
}

.mm-menu > .mm-list {
  padding: 20px 0 40px 0;
}
.mm-menu .mm-list {
  padding: 20px 0;
}

.mm-panel > .mm-list {
  margin-left: -10px;
  margin-right: -10px;
}
.mm-panel > .mm-list:first-child {
  padding-top: 0;
}

.mm-list {
  list-style: none;
  display: block;
  padding: 0;
  margin: 0;
  margin-right: 33px;
}
.mm-list > li {
  list-style: none;
  display: block;
  padding: 0;
  margin: 0;
  margin-right: 33px;
}
.mm-list * {
  -webkit-text-size-adjust: none;
  font-size: 12px;
  text-shadow: none;
}
.mm-list a, .mm-list span {
  text-decoration: none;
  font-family: "Arial", sans-serif;
}
.mm-list a:hover, .mm-list span:hover {
  text-decoration: none;
}
.mm-list a.mm-subopen, .mm-list span.mm-subopen {
  width: 40px;
  height: 100%;
  padding: 0;
  position: absolute;
  right: 0;
  top: 0;
  z-index: 2;
}
.mm-list a.mm-subopen::before, .mm-list span.mm-subopen::before {
  content: '';
  border-left-width: 1px;
  border-left-style: solid;
  display: block;
  height: 100%;
  position: absolute;
  left: 0;
  top: 0;
}
.mm-list a.mm-subopen.mm-fullsubopen, .mm-list span.mm-subopen.mm-fullsubopen {
  width: 100%;
}
.mm-list a.mm-subopen.mm-fullsubopen:before, .mm-list span.mm-subopen.mm-fullsubopen:before {
  border-left: none;
}
.mm-list a.mm-subclose, .mm-list span.mm-subclose {
  text-indent: 20px;
  margin-top: 0px;
}
.mm-list a.mm-subopen + a, .mm-list a.mm-subopen + span, .mm-list span.mm-subopen + a, .mm-list span.mm-subopen + span {
  padding-right: 45px;
}
.mm-list a.mm-subopen:after, .mm-list span.mm-subopen:after {
  content: '';
  border: 2px solid transparent;
  display: block;
  width: 7px;
  height: 7px;
  margin-bottom: -3px;
  position: absolute;
  bottom: 50%;
  -webkit-transform: rotate(-45deg);
  -moz-transform: rotate(-45deg);
  -ms-transform: rotate(-45deg);
  -o-transform: rotate(-45deg);
  transform: rotate(-45deg);
}
.mm-list a.mm-subclose:before, .mm-list span.mm-subclose:before {
  content: '';
  border: 2px solid transparent;
  display: block;
  width: 7px;
  height: 7px;
  margin-bottom: -3px;
  position: absolute;
  bottom: 50%;
  -webkit-transform: rotate(-45deg);
  -moz-transform: rotate(-45deg);
  -ms-transform: rotate(-45deg);
  -o-transform: rotate(-45deg);
  transform: rotate(-45deg);
}
.mm-list a.mm-subopen:after, .mm-list span.mm-subopen:after {
  border-top: none;
  border-left: none;
  right: 18px;
}
.mm-list a.mm-subclose:before, .mm-list span.mm-subclose:before {
  border-right: none;
  border-bottom: none;
  left: 22px;
}
.mm-list > li {
  position: relative;
}
.mm-list > li > a, .mm-list > li > span {
  overflow: hidden;
  text-overflow: ellipsis;
  white-space: nowrap;
  color: inherit;
  line-height: 20px;
  display: block;
  padding: 12px 10px 12px 20px;
  margin: 0;
}
.mm-list > li > a.mmLogo, .mm-list > li > span.mmLogo {
  padding: 0px;
}
.mm-list > li:not(.mm-subtitle):not(.mm-label):not(.mm-noresults)::after {
  content: '';
  border-bottom-width: 1px;
  border-bottom-style: solid;
  display: block;
  width: 100%;
  position: absolute;
  bottom: 0;
  left: 0;
}
.mm-list > li:not(.mm-subtitle):not(.mm-label):not(.mm-noresults):after {
  width: auto;
  margin-left: -20px;
  position: relative;
  left: auto;
}
.mm-list > li.mm-selected > a.mm-subopen {
  background: transparent;
}
.mm-list > li.mm-selected > a.mm-subopen + a, .mm-list > li.mm-selected > a.mm-subopen + span {
  padding-right: 5px;
  margin-right: 40px;
}
.mm-list > li.mm-selected > a.mm-fullsubopen + a, .mm-list > li.mm-selected > a.mm-fullsubopen + span {
  padding-right: 45px;
  margin-right: 0;
}
.mm-list > li.mm-label {
  font-size: 10px;
  font-family: "Arial", sans-serif;
  text-transform: uppercase;
  text-indent: 20px;
  line-height: 25px;
}
.mm-list > li.mm-label.label-lg {
  font-size: 12px;
  font-weight: 700;
  text-transform: uppercase;
  text-indent: 20px;
  line-height: 45px;
}
.mm-list > li i.label {
  font-size: 10px;
  font-family: "Arial", sans-serif;
  font-style: normal;
}

.isMobile .mm-list,
.isMobile .mm-list > li {
  margin-right: 0;
}

.mm-menu.mm-vertical .mm-list {
  margin-right: 0;
}
.mm-menu.mm-vertical .mm-list li.mm-opened > .mm-list {
  margin-right: -33px;
}
.mm-menu.mm-vertical .mm-list .mm-panel {
  visibility: hidden;
  padding: 10px 0 20px 20px;
  position: absolute;
  opacity: 0;
  -webkit-transform: translate3d(0, -10%, 0);
  -moz-transform: translate3d(0, -10%, 0);
  -ms-transform: translate3d(0, -10%, 0);
  -o-transform: translate3d(0, -10%, 0);
  transform: translate3d(0, -10%, 0);
  -webkit-transition: all 0.25s;
  -moz-transition: all 0.25s;
  transition: all 0.25s;
}
.mm-menu.mm-vertical .mm-list .mm-panel li:last-child:after {
  border-color: transparent;
}
.mm-menu.mm-vertical .mm-list li.mm-opened > .mm-panel {
  display: block;
  visibility: visible;
  position: relative;
  opacity: 1;
  -webkit-transform: translate3d(0, 0, 0);
  -moz-transform: translate3d(0, 0, 0);
  -ms-transform: translate3d(0, 0, 0);
  -o-transform: translate3d(0, 0, 0);
  transform: translate3d(0, 0, 0);
}
.mm-menu.mm-vertical .mm-list > li.mm-opened > a.mm-subopen {
  height: 40px;
}
.mm-menu.mm-vertical .mm-list > li.mm-opened > a.mm-subopen:after {
  -webkit-transform: rotate(-315deg);
  -moz-transform: rotate(-315deg);
  -ms-transform: rotate(-315deg);
  -o-transform: rotate(-315deg);
  transform: rotate(-315deg);
}
.mm-menu.mm-vertical .mm-list > li > a.mm-subopen:after {
  -webkit-transform: rotate(-255deg);
  -moz-transform: rotate(-255deg);
  -ms-transform: rotate(-255deg);
  -o-transform: rotate(-255deg);
  transform: rotate(-255deg);
  -webkit-transition: all 0.25s;
  -moz-transition: all 0.25s;
  transition: all 0.25s;
  top: 16px;
  right: 16px;
}

html.mm-opened .mm-page {
  /*	box-shadow: 0 0 20px rgba(0, 0, 0, 0.5); */
}

.mm-menu {
  color: rgba(255, 255, 255, 0.6);
}
.mm-menu .mm-list > li a, .mm-menu .mm-list > li span {
  -webkit-transition: all 0.25s;
  -moz-transition: all 0.25s;
  transition: all 0.25s;
}
.mm-menu .mm-list > li:after {
  border-color: rgba(0, 0, 0, 0.15);
}
.mm-menu .mm-list > li > a.mm-subclose {
  background: rgba(0, 0, 0, 0.1);
  color: rgba(255, 255, 255, 0.3);
}
.mm-menu .mm-list > li > a.mm-subopen:after, .mm-menu .mm-list > li > a.mm-subclose:before {
  border-color: rgba(255, 255, 255, 0.3);
}
.mm-menu .mm-list > li > a.mm-subopen:before {
  border-color: rgba(0, 0, 0, 0.15);
}
.mm-menu .mm-list > li:hover > a, .mm-menu .mm-list > li:hover > span {
  background: rgba(0, 0, 0, 0.1);
}
.mm-menu .mm-list > li.mm-selected > a, .mm-menu .mm-list > li.mm-selected > span {
  background: rgba(0, 0, 0, 0.1);
}
.mm-menu .mm-list li.mm-label {
  background: rgba(255, 255, 255, 0.05);
}
.mm-menu.mm-vertical .mm-list li.mm-opened > a.mm-subopen, .mm-menu.mm-vertical .mm-list li.mm-opened > ul {
  background: rgba(255, 255, 255, 0.05);
}

.mm-menu {
  width: 300px;
}

.isMobile .mm-menu {
  width: 250px;
}

html.mm-opened.mm-opening #mm-blocker {
  left: 0;
  -webkit-transform: translate3d(250px, 0, 0);
  -moz-transform: translate3d(250px, 0, 0);
  -ms-transform: translate3d(250px, 0, 0);
  -o-transform: translate3d(250px, 0, 0);
  transform: translate3d(250px, 0, 0);
}
html.mm-opened.mm-opening .mm-page {
  left: 0;
  -webkit-transform: translate3d(200px, 0, 0);
  -moz-transform: translate3d(200px, 0, 0);
  -ms-transform: translate3d(200px, 0, 0);
  -o-transform: translate3d(200px, 0, 0);
  transform: translate3d(200px, 0, 0);
}

@media all and (max-width: 550px) {
  .mm-menu {
    display: none;
  }

  html.mm-opened.mm-opening .mm-page, html.mm-opened.mm-opening #mm-blocker {
    left: 0;
    -webkit-transform: translate3d(250px, 0, 0);
    -moz-transform: translate3d(250px, 0, 0);
    -ms-transform: translate3d(250px, 0, 0);
    -o-transform: translate3d(250px, 0, 0);
    transform: translate3d(250px, 0, 0);
  }
}
html.mm-nooverflowscrolling.mm-opened {
  height: auto;
  overflow: auto;
  overflow-x: hidden;
  overflow-y: scroll;
}
html.mm-nooverflowscrolling.mm-opened body {
  overflow: auto;
}
html.mm-nooverflowscrolling.mm-opened .mm-page {
  min-height: 1000px;
  position: fixed;
}
html.mm-nooverflowscrolling.mm-opened .mm-menu {
  height: auto;
  min-height: 1000px;
  overflow: auto;
  overflow-x: hidden;
  position: relative;
  left: auto;
  top: auto;
}
html.mm-nooverflowscrolling.mm-opened > .mm-panel {
  position: relative;
  height: auto;
  display: none;
  left: 0;
}
html.mm-nooverflowscrolling.mm-opened > .mm-panel.mm-current {
  display: block;
}

em.mm-counter {
  font-style: normal;
  text-indent: 0;
  display: block;
  margin-top: -10px;
  position: absolute;
  right: 40px;
  top: 50%;
  background-color: rgba(255, 255, 255, 0.1);
  height: 20px;
  line-height: 20px;
  min-width: 20px;
  padding: 0 7px;
  border-radius: 2px;
}
em.mm-counter + a.mm-subopen {
  padding-left: 40px;
}
em.mm-counter + a.mm-subopen + a, em.mm-counter + a.mm-subopen + span {
  padding-right: 80px;
}
em.mm-counter + a.mm-fullsubopen {
  padding-left: 0;
}

.mm-vertical li.mm-selected > em.mm-counter + a.mm-subopen + a, .mm-vertical li.mm-selected > em.mm-counter + a.mm-subopen + span {
  margin-right: 75px;
}

.mm-nosubresults > em.mm-counter {
  display: none;
}

.mm-menu em.mm-counter {
  color: rgba(255, 255, 255, 0.4);
  font-size: 10px;
  font-weight: 700;
}

.mm-header {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  -webkit-text-size-adjust: none;
  font-size: 18px;
  text-shadow: none;
  background: inherit;
  border-bottom: 1px solid transparent;
  text-align: center;
  line-height: 20px;
  width: 100%;
  height: 60px;
  padding: 30px 90px 0 40px;
  position: absolute;
  z-index: 2;
  top: 0;
  left: 0;
}
.mm-header span {
  text-overflow: ellipsis;
  white-space: nowrap;
  overflow: hidden;
  display: inline-block;
  width: 100%;
  position: relative;
  z-index: 1;
}
.mm-header a {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  text-decoration: none;
  display: block;
  width: 40px;
  height: 100%;
  position: absolute;
  bottom: 0;
}
.mm-header a:before {
  content: '';
  border: 2px solid transparent;
  display: block;
  width: 7px;
  height: 7px;
  margin-bottom: -5px;
  position: absolute;
  bottom: 50%;
  -webkit-transform: rotate(-45deg);
  -moz-transform: rotate(-45deg);
  -ms-transform: rotate(-45deg);
  -o-transform: rotate(-45deg);
  transform: rotate(-45deg);
  margin-bottom: -15px;
}
.mm-header a.mm-prev {
  left: 0;
}
.mm-header a.mm-prev:before {
  border-right: none;
  border-bottom: none;
  left: 22px;
}
.mm-header a.mm-next {
  right: 0;
}
.mm-header a.mm-next:before {
  border-top: none;
  border-left: none;
  right: 18px;
}

.isMobile .mm-header {
  padding: 30px 40px 0 40px;
}

.mm-hassearch .mm-header {
  height: 50px;
  padding-top: 20px;
  top: 50px;
}

.mm-hassearch .mm-header a:before {
  margin-bottom: -10px;
}

.mm-menu.mm-hasheader li.mm-subtitle {
  display: none;
}

.mm-menu.mm-hasheader .mm-panel {
  padding-top: 80px;
}

.mm-menu.mm-hasheader.mm-hassearch .mm-panel {
  padding-top: 120px;
}

.mm-menu.mm-hasheader.mm-ismenu .mm-panel {
  padding-top: 60px;
}

.mm-menu.mm-hasheader.mm-ismenu.mm-hassearch .mm-panel {
  padding-top: 100px;
}

.mm-menu .mm-header {
  border-color: rgba(0, 0, 0, 0.15);
  color: rgba(255, 255, 255, 0.3);
}

.mm-menu .mm-header a:before {
  border-color: rgba(255, 255, 255, 0.3);
}

.mm-search {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  background: inherit;
  height: 55px;
  padding: 10px;
  padding-right: 60px;
  border-bottom: 5px rgba(0, 0, 0, 0.1) solid;
  position: relative;
  top: 0;
  z-index: 2;
}
.mm-search input {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  -webkit-text-size-adjust: none;
  font-family: Arial, Helvetica, sans-serif;
  font-size: 14px;
  text-shadow: none;
  border: none;
  border-radius: 2px;
  line-height: 30px;
  outline: none;
  display: block;
  width: 100%;
  height: 30px;
  margin: 0;
  padding: 0 10px;
  opacity: 0;
  -webkit-transform: translateX(30%);
  -moz-transform: translateX(30%);
  -ms-transform: translateX(30%);
  -o-transform: translateX(30%);
  transform: translateX(30%);
  -webkit-transition: all 0.4s;
  -moz-transition: all 0.4s;
  transition: all 0.4s;
}

.mm-opening .mm-search input,
.leftMenu .mm-search input {
  opacity: 1;
  -webkit-transform: translateX(0%);
  -moz-transform: translateX(0%);
  -ms-transform: translateX(0%);
  -o-transform: translateX(0%);
  transform: translateX(0%);
}

.mm-menu li.mm-nosubresults > a.mm-subopen {
  display: none;
}
.mm-menu li.mm-nosubresults > a.mm-subopen + a, .mm-menu li.mm-nosubresults > a.mm-subopen + span {
  padding-right: 10px;
}
.mm-menu li.mm-noresults {
  color: rgba(255, 255, 255, 0.3);
  text-align: center;
  font-size: 20px;
  display: none;
  padding-top: 80px;
}
.mm-menu li.mm-noresults:after {
  border: none;
}
.mm-menu.mm-noresults li.mm-noresults {
  display: block;
}
.mm-menu.mm-hassearch .mm-panel {
  padding-top: 55px;
}
.mm-menu .mm-search input {
  background: rgba(255, 255, 255, 0.3);
  color: rgba(255, 255, 255, 0.6);
}

.isMobile .mm-search {
  padding-right: 10px;
}

/*///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////*/
/*////////////////////////////////////////////////////////////			POSITION RIGTH			//////////////////////////////////////////////////////////// */
/*///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////*/
html.mm-right.mm-opened .mm-menu.mm-right {
  display: block;
}
html.mm-right.mm-opened .mm-page, html.mm-right.mm-opened #mm-blocker {
  left: auto;
  right: 0%;
}
html.mm-right.mm-opened.mm-opening .mm-page, html.mm-right.mm-opened.mm-opening #mm-blocker {
  left: auto;
}
html.mm-right.mm-opened.mm-opening .mm-page, html.mm-right.mm-opened.mm-opening #mm-blocker {
  -webkit-transform: translate3d(-300px, 0, 0);
  -moz-transform: translate3d(-300px, 0, 0);
  -ms-transform: translate3d(-300px, 0, 0);
  -o-transform: translate3d(-300px, 0, 0);
  transform: translate3d(-300px, 0, 0);
}

.mm-menu.mm-right {
  width: 350px;
  right: -50px;
  left: auto;
}
.mm-menu.mm-right .mm-search input {
  margin-left: 0;
  -webkit-transform: translateX(-30%);
  -moz-transform: translateX(-30%);
  -ms-transform: translateX(-30%);
  -o-transform: translateX(-30%);
  transform: translateX(-30%);
}

.mm-opening .mm-menu.mm-right .mm-search input {
  -webkit-transform: translateX(0%);
  -moz-transform: translateX(0%);
  -ms-transform: translateX(0%);
  -o-transform: translateX(0%);
  transform: translateX(0%);
}

.isMobile .mm-menu.mm-right {
  width: 300px;
  right: 0;
}

@media all and (max-width: 550px) {
  .mm-menu.mm-right {
    width: 300px;
  }

  .isMobile .mm-menu.mm-right {
    width: 250px;
    right: 0;
  }

  html.mm-right.mm-opened.mm-opening #mm-blocker {
    right: auto;
    -webkit-transform: translate3d(-250px, 0, 0);
    -moz-transform: translate3d(-250px, 0, 0);
    -ms-transform: translate3d(-250px, 0, 0);
    -o-transform: translate3d(-250px, 0, 0);
    transform: translate3d(-250px, 0, 0);
  }
  html.mm-right.mm-opened.mm-opening .mm-page {
    right: auto;
    -webkit-transform: translate3d(-250px, 0, 0);
    -moz-transform: translate3d(-250px, 0, 0);
    -ms-transform: translate3d(-250px, 0, 0);
    -o-transform: translate3d(-250px, 0, 0);
    transform: translate3d(-250px, 0, 0);
  }
}
/*////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////*/
/*////////////////////////////////////////////////////////////			POSITION NEXT			//////////////////////////////////////////////////////////// */
/*///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////*/
.mm-menu.mm-next {
  -webkit-transition: none 0.5s ease;
  -moz-transition: none 0.5s ease;
  transition: none 0.5s ease;
  -webkit-transition-property: top, right, bottom, left, -webkit-transform;
  -moz-transition-property: top, right, bottom, left, -moz-transform;
  -ms-transition-property: top, right, bottom, left, -o-transform;
  -o-transition-property: top, right, bottom, left, -ms-transform;
  transition-property: top, right, bottom, left, transform;
  left: -80%;
}
.mm-menu.mm-right.mm-front {
  right: -350px;
}
.mm-menu.mm-right.mm-next {
  right: -350px;
  left: auto;
}

html.mm-opened.mm-next .mm-page {
  box-shadow: none;
}
html.mm-opening .mm-menu.mm-next {
  left: 0%;
}
html.mm-opening .mm-menu.mm-right.mm-next {
  left: auto;
  right: 0%;
}

@media all and (min-width: 550px) {
  .mm-menu.mm-right.mm-front,
  .mm-menu.mm-right.mm-next {
    /*	right: -350px;*/
    -webkit-transform: translate3d(50px, 0, 0);
    -moz-transform: translate3d(50px, 0, 0);
    -ms-transform: translate3d(50px, 0, 0);
    -o-transform: translate3d(50px, 0, 0);
    transform: translate3d(50px, 0, 0);
  }
}
html .toggle-menu {
  background-color: transparent;
  cursor: pointer;
  height: 100%;
  left: 0px;
  position: fixed;
  top: 0;
  width: 50px;
  z-index: 100;
}
html.mm-opened .toggle-menu {
  -webkit-transform: translate3d(-100%, 0, 0);
  -moz-transform: translate3d(-100%, 0, 0);
  -ms-transform: translate3d(-100%, 0, 0);
  -o-transform: translate3d(-100%, 0, 0);
  transform: translate3d(-100%, 0, 0);
}
html .leftMenu .toggle-menu {
  display: none;
}

body.leftMenu .toggle-menu {
  display: none;
}
body.leftMenu.in .toggle-menu {
  display: block;
}
body.leftMenu .mm-menu:not(.mm-right) {
  top: 55px;
}
body.leftMenu .mm-menu:not(.mm-right) .mm-list {
  padding-top: 0;
}
body.leftMenu .mm-menu:not(.mm-right).mm-hassearch .mm-panel {
  padding-top: 55px;
}

@media (max-width: 991px) {
  body.leftMenu .toggle-menu {
    display: block;
  }
}
.mm-ismenu {
  background: <?php $colors->ADMIN_PAGE_SIDEBAR_BACKGROUND_COLOR; ?>;
}

.mm-page {
  right: 0;
  left: 0;
  -webkit-transform: translate3d(0, 0, 0);
  -moz-transform: translate3d(0, 0, 0);
  -ms-transform: translate3d(0, 0, 0);
  -o-transform: translate3d(0, 0, 0);
  transform: translate3d(0, 0, 0);
}

.mm-menu .icon {
  font-size: 14px;
  width: 17px;
  height: 17px;
  text-align: center;
  margin: 0 15px 0 -2px;
  line-height: 17px;
  color: rgba(255, 255, 255, 0.3);
}
.mm-menu.mm-right .icon {
  margin: 0 5px 0 -2px;
}
.mm-menu li.img a {
  font-size: 12px;
}
.mm-menu li.img a img {
  float: left;
  margin: -5px 10px -5px 0;
}
.mm-menu li.img a small {
  font-size: 10px;
}

/*
00 -  Chart tooltip
------------------------------------------------------------*/
.jqstooltip {
  -webkit-box-sizing: content-box;
  -moz-box-sizing: content-box;
  box-sizing: content-box;
}

/* Chart*/
.jqstooltip, #flotTip {
  -webkit-box-sizing: content-box;
  -moz-box-sizing: content-box;
  box-sizing: content-box;
}

.chart_flot, #flotTip, .flot-text {
  color: #FFF;
  font-family: Arial, Helvetica, sans-serif;
}

#tooltipPie {
  font-size: 10px;
  padding: 5px;
}

#flotTip {
  background-color: #1b1e24;
  font-size: 11px;
  padding: 4px 7px;
  text-align: center;
  text-shadow: none;
}

/*
00 - label of chart (flot ,sparkline)
------------------------------------------------------------*/
.label-flot-custom {
  padding: 20px;
}
.label-flot-custom li {
  color: #999;
  display: inline-block;
  font-size: 12px;
  padding: 7px;
}

.label-sparkline li {
  color: #999;
  display: inline-block;
  font-size: 12px;
  padding: 7px;
}

.label-flot-custom li span, .label-sparkline li span {
  border-radius: 50%;
  display: inline-block;
  height: 10px;
  margin-right: 5px;
  width: 10px;
}

.label-flot-custom-title {
  font-size: 1.5em;
  left: 0;
  position: absolute;
  right: 0;
  text-align: center;
}

.label-sparkline {
  background-color: rgba(255, 255, 255, 0.2);
  padding: 5px;
}

/*
00 - Progress
------------------------------------------------------------*/
.progress-bar {
  -webkit-box-shadow: none;
  box-shadow: none;
  position: relative;
}

.progress {
  background-color: #EEE;
  border-radius: 0;
  -webkit-box-shadow: none;
  box-shadow: none;
  margin-bottom: 5px;
  overflow: visible;
  position: relative;
}
.progress.progress-dark {
  background-color: #2d3237;
}
.progress.progress-white {
  background-color: rgba(0, 0, 0, 0.3);
}
.progress.progress-sm {
  height: 10px;
}
.progress.progress-xs {
  height: 5px;
}

.progress-label {
  font-size: 10px;
  margin-bottom: 15px;
  position: relative;
  top: -5px;
}
.progress-label.lasted {
  margin-bottom: 0px;
}
.progress-label.label-white {
  color: white !important;
}

.progress .progress-tooltip {
  filter: alpha(opacity=60);
  opacity: 0.6;
  background-color: #000;
  color: #FFF;
  display: none;
  font-size: 10px;
  padding: 3px 5px 3px 7px;
  position: absolute;
  right: -10px;
  top: -25px;
}
.progress .progress-tooltip:before {
  height: 0;
  width: 0;
  border-color: transparent;
  border-style: solid;
  border-width: 5px;
  border-top-color: black;
  bottom: -10px;
  content: "";
  position: absolute;
  right: 5px;
}

.progress-bar-theme {
  background-color: #6CC3A0;
}

.progress-bar-success {
  background-color: #5cb85c;
}

.progress-bar-white {
  background-color: #FFF;
}

.progress:hover .progress-tooltip, .progress.tooltip-in .progress-tooltip {
  display: inline-block;
}

.progress-stripes .progress-bar {
  background-image: -webkit-gradient(linear, left top, right bottom, color-stop(0.25, rgba(255, 255, 255, 0.15)), color-stop(0.25, transparent), color-stop(0.5, transparent), color-stop(0.5, rgba(255, 255, 255, 0.15)), color-stop(0.75, rgba(255, 255, 255, 0.15)), color-stop(0.75, transparent), to(transparent));
  background-image: -webkit-linear-gradient(135deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-image: -moz-linear-gradient(135deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-image: -ms-linear-gradient(135deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-image: -o-linear-gradient(135deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-image: linear, 135deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent;
  -webkit-animation: animate-stripes 3s linear infinite;
  -moz-animation: animate-stripes 3s linear infinite;
  animation: animate-stripes 3s linear infinite;
  -webkit-background-size: 30px 30px;
  -moz-background-size: 30px 30px;
  background-size: 30px 30px;
}

.progress-shine span {
  position: absolute;
}
.progress-shine .progress-bar::after {
  background: #fff;
  bottom: 0;
  content: '';
  left: 0;
  filter: alpha(opacity=0);
  opacity: 0;
  position: absolute;
  right: 0;
  top: 0;
  -webkit-animation: animate-shine 2s ease-out infinite;
  -moz-animation: animate-shine 2s ease-out infinite;
  animation: animate-shine 2s ease-out infinite;
}

@-webkit-keyframes animate-stripes {
  from {
    background-position: 0 0;
  }

  to {
    background-position: 60px 0;
  }
}
@-moz-keyframes animate-stripes {
  from {
    background-position: 0 0;
  }

  to {
    background-position: 60px 0;
  }
}
@keyframes animate-stripes {
  from {
    background-position: 0 0;
  }

  to {
    background-position: 60px 0;
  }
}
@-webkit-keyframes animate-shine {
  0% {
    opacity: 0;
    width: 0;
  }

  50% {
    opacity: .5;
  }

  100% {
    opacity: 0;
    width: 95%;
  }
}
@-moz-keyframes animate-shine {
  0% {
    opacity: 0;
    width: 0;
  }

  50% {
    opacity: .5;
  }

  100% {
    opacity: 0;
    width: 95%;
  }
}
@keyframes animate-shine {
  0% {
    opacity: 0;
    width: 0;
  }

  50% {
    opacity: .5;
  }

  100% {
    opacity: 0;
    width: 95%;
  }
}
/*
00 - colpick Color Picker
------------------------------------------------------------*/
.colpick {
  background: #FFF;
  border: 1px solid #CCC;
  display: none;
  font-family: Arial, Helvetica, sans-serif;
  height: 170px;
  margin-top: 3px;
  position: absolute;
  width: 346px;
  z-index: 10;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  -o-user-select: none;
  user-select: none;
}
.colpick:before {
  border-bottom: 9px solid;
  border-bottom-color: inherit;
  border-left: 9px solid transparent;
  border-right: 9px solid transparent;
  content: '';
  display: inline-block;
  left: 7px;
  position: absolute;
  top: -9px;
}
.colpick:after {
  border-bottom: 8px solid;
  border-bottom-color: #FFF;
  border-left: 8px solid transparent;
  border-right: 8px solid transparent;
  content: '';
  display: inline-block;
  left: 8px;
  position: absolute;
  top: -8px;
}

.colpick_flat {
  display: block;
  overflow: hidden;
  position: relative;
}

.colpick_color {
  cursor: crosshair;
  height: 156px;
  left: 7px;
  outline: 1px solid #aaa;
  overflow: hidden;
  position: absolute;
  top: 7px;
  width: 156px;
}

.colpick_color_overlay1 {
  background-image: -webkit-linear-gradient(left, white, rgba(255, 255, 255, 0));
  background-image: linear-gradient(to right, white, rgba(255, 255, 255, 0));
  height: 156px;
  left: 0;
  position: absolute;
  top: 0;
  width: 156px;
}

.colpick_color_overlay2 {
  background-image: -webkit-linear-gradient(top, transparent, black);
  background-image: linear-gradient(to bottom, transparent, black);
  height: 156px;
  left: 0;
  position: absolute;
  top: 0;
  width: 156px;
}

.colpick_selector_outer {
  background: none;
  border: 1px solid black;
  border-radius: 50%;
  height: 13px;
  margin: -7px 0 0 -7px;
  position: absolute;
  width: 13px;
}

.colpick_selector_inner {
  border: 2px solid white;
  border-radius: 50%;
  height: 11px;
  position: absolute;
  width: 11px;
}

.colpick_hue {
  border: 1px solid #aaa;
  cursor: n-resize;
  height: 156px;
  left: 175px;
  position: absolute;
  top: 6px;
  width: 19px;
}

.colpick_hue_arrs {
  height: 7px;
  left: -8px;
  margin: -7px 0 0 0;
  position: absolute;
  width: 35px;
}

.colpick_hue_larr {
  border-bottom: 6px solid transparent;
  border-left: 7px solid #858585;
  border-top: 6px solid transparent;
  height: 0;
  position: absolute;
  width: 0;
}

.colpick_hue_rarr {
  border-bottom: 6px solid transparent;
  border-right: 7px solid #858585;
  border-top: 6px solid transparent;
  height: 0;
  position: absolute;
  right: 0;
  width: 0;
}

.colpick_new_color {
  background: #f00;
  height: 25px;
  left: 207px;
  position: absolute;
  top: 6px;
  width: 60px;
}

.colpick_current_color {
  background: #f00;
  height: 25px;
  left: 277px;
  position: absolute;
  top: 6px;
  width: 60px;
}

.colpick_field, .colpick_hex_field {
  background: #f3f3f3;
  border: 1px solid #bdbdbd;
  color: #b8b8b8;
  font-size: 12px;
  height: 20px;
  overflow: hidden;
  position: absolute;
  width: 60px;
}

.colpick_rgb_r {
  left: 207px;
  top: 40px;
}

.colpick_rgb_g {
  left: 207px;
  top: 67px;
}

.colpick_rgb_b {
  left: 207px;
  top: 94px;
}

.colpick_hsb_h {
  left: 277px;
  top: 40px;
}

.colpick_hsb_s {
  left: 277px;
  top: 67px;
}

.colpick_hsb_b {
  left: 277px;
  top: 94px;
}

.colpick_hex_field {
  left: 207px;
  top: 121px;
  width: 130px;
}

.colpick_focus {
  border-color: #999;
}

.colpick_field_letter {
  background: #efefef;
  border-right: 1px solid #bdbdbd;
  color: #777;
  font-weight: bold;
  height: 20px;
  line-height: 20px;
  padding: 0 4px;
  position: absolute;
}

.colpick_field input {
  background: transparent;
  border: none;
  color: #555;
  font-family: Arial, Helvetica, sans-serif;
  font-size: 12px;
  height: 20px;
  line-height: 20px;
  margin: 0;
  outline: none;
  padding: 0;
  position: absolute;
  right: 15px;
  text-align: right;
}

.colpick_hex_field input {
  background: transparent;
  border: none;
  color: #555;
  font-family: Arial, Helvetica, sans-serif;
  font-size: 12px;
  height: 20px;
  line-height: 20px;
  margin: 0;
  outline: none;
  padding: 0;
  position: absolute;
  right: 15px;
  right: 4px;
  text-align: right;
}

.colpick_field_arrs {
  cursor: n-resize;
  height: 21px;
  position: absolute;
  right: 2px;
  top: -1px;
  width: 9px;
}

.colpick_field_uarr {
  border-bottom: 4px solid #959595;
  border-left: 4px solid transparent;
  border-right: 4px solid transparent;
  height: 0;
  position: absolute;
  top: 5px;
  width: 0;
}

.colpick_field_darr {
  border-left: 4px solid transparent;
  border-right: 4px solid transparent;
  border-top: 4px solid #959595;
  bottom: 5px;
  height: 0;
  position: absolute;
  width: 0;
}

.colpick_submit {
  background: #efefef;
  color: #555;
  font-size: 12px;
  font-weight: bold;
  height: 22px;
  left: 207px;
  line-height: 22px;
  position: absolute;
  text-align: center;
  top: 140px;
  width: 130px;
}
.colpick_submit:hover {
  background: #f3f3f3;
  border-color: #999;
  cursor: pointer;
}

.colpick_full_ns .colpick_submit, .colpick_full_ns .colpick_current_color {
  display: none;
}
.colpick_full_ns .colpick_new_color {
  height: 25px;
  width: 130px;
}
.colpick_full_ns .colpick_rgb_r, .colpick_full_ns .colpick_hsb_h {
  top: 42px;
}
.colpick_full_ns .colpick_rgb_g, .colpick_full_ns .colpick_hsb_s {
  top: 73px;
}
.colpick_full_ns .colpick_rgb_b, .colpick_full_ns .colpick_hsb_b {
  top: 104px;
}
.colpick_full_ns .colpick_hex_field {
  top: 135px;
}

.colpick_rgbhex {
  width: 282px;
}
.colpick_rgbhex .colpick_hsb_h, .colpick_rgbhex .colpick_hsb_s, .colpick_rgbhex .colpick_hsb_b {
  display: none;
}
.colpick_rgbhex .colpick_field, .colpick_rgbhex .colpick_submit {
  width: 68px;
}
.colpick_rgbhex .colpick_new_color {
  border-right: none;
  width: 34px;
}
.colpick_rgbhex .colpick_current_color {
  border-left: none;
  left: 240px;
  width: 34px;
}
.colpick_rgbhex .colpick_hex_field {
  width: 68px;
}

.colpick_rgbhex_ns .colpick_submit, .colpick_rgbhex_ns .colpick_current_color {
  display: none;
}
.colpick_rgbhex_ns .colpick_new_color {
  border: 1px solid #8f8f8f;
  width: 68px;
}
.colpick_rgbhex_ns .colpick_rgb_r {
  top: 42px;
}
.colpick_rgbhex_ns .colpick_rgb_g {
  top: 73px;
}
.colpick_rgbhex_ns .colpick_rgb_b {
  top: 104px;
}
.colpick_rgbhex_ns .colpick_hex_field {
  top: 135px;
  width: 68px;
}

.colpick_hex {
  height: 201px;
  width: 206px;
}
.colpick_hex .colpick_hsb_h, .colpick_hex .colpick_hsb_s, .colpick_hex .colpick_hsb_b, .colpick_hex .colpick_rgb_r, .colpick_hex .colpick_rgb_g, .colpick_hex .colpick_rgb_b {
  display: none;
}
.colpick_hex .colpick_hex_field {
  height: 25px;
  left: 80px;
  top: 168px;
  width: 72px;
}
.colpick_hex .colpick_hex_field div, .colpick_hex .colpick_hex_field input {
  height: 25px;
  line-height: 25px;
}
.colpick_hex .colpick_new_color {
  border-right: none;
  left: 7px;
  top: 168px;
  width: 30px;
}
.colpick_hex .colpick_current_color {
  border-left: none;
  left: 40px;
  top: 168px;
  width: 30px;
}
.colpick_hex .colpick_submit {
  height: 25px;
  left: 164px;
  line-height: 25px;
  top: 168px;
  width: 30px;
}

.colpick_hex_ns .colpick_submit, .colpick_hex_ns .colpick_current_color {
  display: none;
}
.colpick_hex_ns .colpick_hex_field {
  width: 114px;
}
.colpick_hex_ns .colpick_new_color {
  left: 8px;
  width: 60px;
}

.colpick_dark {
  background: #161616;
  border-color: #2a2a2a;
}
.colpick_dark:after {
  border-bottom-color: #161616;
}
.colpick_dark .colpick_color {
  outline-color: #333;
}
.colpick_dark .colpick_hue {
  border-color: #555;
}
.colpick_dark .colpick_field, .colpick_dark .colpick_hex_field {
  background: #101010;
  border-color: #2d2d2d;
}
.colpick_dark .colpick_field_letter {
  background: #131313;
  border-color: #2d2d2d;
  color: #696969;
}
.colpick_dark .colpick_field input, .colpick_dark .colpick_hex_field input {
  color: #7a7a7a;
}
.colpick_dark .colpick_field_uarr {
  border-bottom-color: #696969;
}
.colpick_dark .colpick_field_darr {
  border-top-color: #696969;
}
.colpick_dark .colpick_focus {
  border-color: #444;
}
.colpick_dark .colpick_submit {
  background: #131313;
  border-color: #2d2d2d;
  color: #7a7a7a;
}
.colpick_dark .colpick_submit:hover {
  background-color: #101010;
  border-color: #444;
}

.colpick_gray {
  background: #3C4A4D;
  border-color: #3C4A4D;
}
.colpick_gray:after {
  border-bottom-color: #3C4A4D;
}
.colpick_gray .colpick_color {
  outline: 0;
}
.colpick_gray .colpick_hue {
  border: 0;
}
.colpick_gray .colpick_field, .colpick_gray .colpick_hex_field {
  background: #30393B;
  border-color: #30393B;
  color: #DDD;
}
.colpick_gray .colpick_field_letter {
  background: #2F393B;
  border-color: #2F393B;
  color: #DDD;
}
.colpick_gray .colpick_field input, .colpick_gray .colpick_hex_field input {
  color: #AAA;
}
.colpick_gray .colpick_field_uarr {
  border-bottom-color: #696969;
}
.colpick_gray .colpick_field_darr {
  border-top-color: #696969;
}
.colpick_gray .colpick_focus {
  border-color: #444;
}
.colpick_gray .colpick_submit {
  background: #212530;
  color: #7a7a7a;
}
.colpick_gray .colpick_submit:hover {
  background-color: #101010;
  border-color: #444;
}

/*
00 - Color palette
------------------------------------------------------------*/
.bootstrap-colorpalette {
  border: 1px #ededed solid;
  line-height: 1;
  padding: 3px 3px;
  white-space: normal;
}
.bootstrap-colorpalette div {
  line-height: 0;
  width: 160px;
}
.bootstrap-colorpalette a.btn-color {
  border: 0;
  display: inline-block;
  height: 20px;
  margin: 0;
  padding: 0;
  -webkit-transition: all .2s ease-in-out;
  width: 20px;
}
.bootstrap-colorpalette .btn-color:hover {
  -webkit-transform: scale(1.2);
}

/*
00 - select picker
------------------------------------------------------------*/
.bootstrap-select.btn-group, .bootstrap-select.btn-group[class*="span"] {
  display: inline-block;
  float: none;
  margin-bottom: 1px;
  margin-left: 0;
}

.form-search .bootstrap-select.btn-group, .form-inline .bootstrap-select.btn-group, .form-horizontal .bootstrap-select.btn-group {
  margin-bottom: 0;
}

.bootstrap-select.form-control {
  border: none;
  padding: 0;
}

.bootstrap-select.btn-group.pull-right, .bootstrap-select.btn-group[class*="span"].pull-right, .row-fluid .bootstrap-select.btn-group[class*="span"].pull-right {
  float: right;
}

.input-append .bootstrap-select.btn-group {
  margin-left: -1px;
}

.input-prepend .bootstrap-select.btn-group {
  margin-right: -1px;
}

.bootstrap-select:not([class*="span"]):not([class*="col-"]):not([class*="form-control"]) {
  width: 220px;
}

.bootstrap-select {
  width: 220px\0;
}

.bootstrap-select.form-control:not([class*="span"]) {
  width: 100%;
}

.bootstrap-select > .btn {
  width: 100%;
}

.error .bootstrap-select .btn {
  border: 1px solid #b94a48;
}

.dropdown-menu {
  z-index: 2000;
}

.bootstrap-select.show-menu-arrow.open > .btn {
  z-index: 2051;
}

.bootstrap-select.btn-group .btn .filter-option {
  left: 12px;
  overflow: hidden;
  position: absolute;
  right: 25px;
  text-align: left;
}

.bootstrap-select.btn-group .btn .caret {
  margin-top: -2px;
  position: absolute;
  right: 12px;
  top: 50%;
  vertical-align: middle;
}

.bootstrap-select.btn-group > .disabled, .bootstrap-select.btn-group .dropdown-menu li.disabled > a {
  cursor: not-allowed;
}

.bootstrap-select.btn-group > .disabled:focus {
  outline: none !important;
}

.bootstrap-select.btn-group[class*="span"] .btn {
  width: 100%;
}

.bootstrap-select.btn-group .dropdown-menu {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  min-width: 100%;
}

.bootstrap-select.btn-group .dropdown-menu.inner {
  border: 0;
  -moz-border-radius: 0;
  -webkit-border-radius: 0;
  border-radius: 0;
  -webkit-box-shadow: none;
  -moz-box-shadow: none;
  box-shadow: none;
  margin: 0;
  padding: 0;
  position: static;
}

.bootstrap-select.btn-group .dropdown-menu dt {
  cursor: default;
  display: block;
  padding: 3px 20px;
}

.bootstrap-select.btn-group .div-contain {
  overflow: hidden;
}

.bootstrap-select.btn-group .dropdown-menu li {
  position: relative;
}

.bootstrap-select.btn-group .dropdown-menu li > a.opt {
  padding-left: 35px;
  position: relative;
}

.bootstrap-select.btn-group .dropdown-menu li > a {
  cursor: pointer;
}

.bootstrap-select.btn-group .dropdown-menu li > a i {
  color: #BBB;
  height: 16px;
  margin-left: -12px;
  margin-right: 3px;
  position: relative;
  text-align: center;
  width: 16px;
}

.bootstrap-select.btn-group .dropdown-menu li:hover > a i {
  color: #FFF;
}

.bootstrap-select.btn-group .dropdown-menu li > dt small {
  font-weight: normal;
}

.bootstrap-select.btn-group.show-tick .dropdown-menu li.selected a i.check-mark {
  display: inline-block;
  margin-right: 0;
  margin-top: 2.5px;
  position: absolute;
  right: 15px;
}

.bootstrap-select.btn-group .dropdown-menu li a i.check-mark {
  display: none;
}

.bootstrap-select.btn-group.show-tick .dropdown-menu li a span.text {
  margin-right: 34px;
}

.bootstrap-select.btn-group .dropdown-menu li small {
  padding-left: 0.5em;
}

.bootstrap-select.btn-group .dropdown-menu li:not(.disabled) > a:hover small, .bootstrap-select.btn-group .dropdown-menu li:not(.disabled) > a:focus small {
  color: #64b1d8;
  color: rgba(255, 255, 255, 0.4);
}

.bootstrap-select.btn-group .dropdown-menu li > dt small {
  font-weight: normal;
}

.bootstrap-select.show-menu-arrow .dropdown-toggle:before {
  border-bottom: 7px solid #CCC;
  border-bottom-color: rgba(0, 0, 0, 0.2);
  border-left: 7px solid transparent;
  border-right: 7px solid transparent;
  bottom: -4px;
  content: '';
  display: inline-block;
  display: none;
  left: 9px;
  position: absolute;
}

.bootstrap-select.show-menu-arrow .dropdown-toggle:after {
  border-bottom: 6px solid white;
  border-left: 6px solid transparent;
  border-right: 6px solid transparent;
  bottom: -4px;
  content: '';
  display: inline-block;
  display: none;
  left: 10px;
  position: absolute;
}

.bootstrap-select.show-menu-arrow.dropup .dropdown-toggle:before {
  border-bottom: 0;
  border-top: 7px solid #ccc;
  border-top-color: rgba(0, 0, 0, 0.2);
  bottom: auto;
  top: -3px;
}

.bootstrap-select.show-menu-arrow.dropup .dropdown-toggle:after {
  border-bottom: 0;
  border-top: 6px solid #ffffff;
  bottom: auto;
  top: -3px;
}

.bootstrap-select.show-menu-arrow.pull-right .dropdown-toggle:before {
  left: auto;
  right: 12px;
}

.bootstrap-select.show-menu-arrow.pull-right .dropdown-toggle:after {
  left: auto;
  right: 13px;
}

.bootstrap-select.show-menu-arrow.open > .dropdown-toggle:before, .bootstrap-select.show-menu-arrow.open > .dropdown-toggle:after {
  display: block;
}

.mobile-device {
  display: block !important;
  height: 100% !important;
  left: 0;
  opacity: 0;
  position: absolute;
  top: 0;
  width: 100%;
}

.bootstrap-select.fit-width {
  width: auto !important;
}

.bootstrap-select.btn-group.fit-width .btn .filter-option {
  position: static;
}

.bootstrap-select.btn-group.fit-width .btn .caret {
  margin-top: -1px;
  position: static;
  top: auto;
}

.control-group.error .bootstrap-select .dropdown-toggle {
  border-color: #b94a48;
}

.bootstrap-select-searchbox {
  padding: 4px 8px;
}

#caplet-overlay {
  background-color: #111;
  bottom: 0;
  left: 0;
  position: fixed;
  top: 0;
  right: 0;
  opacity: 0;
  z-index: 999;
}

#loading-top {
  left: 0;
  padding: 10px;
  position: absolute;
  right: 0;
  text-align: center;
  top: 0;
}

#canvas_loading {
  padding: 10px;
  text-align: center;
}
#canvas_loading canvas {
  display: inline-block !important;
}
#canvas_loading span {
  display: block !important;
}

/*
00 - loading-spinner
------------------------------------------------------------*/
.loading-spinner {
  left: 50%;
  margin: -12px 0 0 -12px;
  position: absolute;
  top: 50%;
}

.loading-spinner .progress {
  -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, 0.25);
  box-shadow: 0 1px 1px rgba(0, 0, 0, 0.25);
  margin: 0;
}

.loading-spinner .txtLoad {
  color: #FFF;
  font-size: 11px;
  padding: 3px;
  text-align: center;
}

.animated {
  -moz-animation-duration: 1s;
  -o-animation-duration: 1s;
  -webkit-animation-duration: 1s;
  animation-duration: 1s;
  -webkit-animation-fill-mode: both;
  -moz-animation-fill-mode: both;
  -o-animation-fill-mode: both;
  animation-fill-mode: both;
}

.shake {
  -moz-animation-name: shake;
  -o-animation-name: shake;
  -webkit-animation-name: shake;
  animation-name: shake;
}

@-webkit-keyframes shake {
  0%, 100% {
    -webkit-transform: translateX(0);
  }

  10%, 30%, 50%, 70%, 90% {
    -webkit-transform: translateX(-10px);
  }

  20%, 40%, 60%, 80% {
    -webkit-transform: translateX(10px);
  }
}
@-moz-keyframes shake {
  0%, 100% {
    -moz-transform: translateX(0);
  }

  10%, 30%, 50%, 70%, 90% {
    -moz-transform: translateX(-10px);
  }

  20%, 40%, 60%, 80% {
    -moz-transform: translateX(10px);
  }
}
@-o-keyframes shake {
  0%, 100% {
    -o-transform: translateX(0);
  }

  10%, 30%, 50%, 70%, 90% {
    -o-transform: translateX(-10px);
  }

  20%, 40%, 60%, 80% {
    -o-transform: translateX(10px);
  }
}
@keyframes shake {
  0%, 100% {
    transform: translateX(0);
  }

  10%, 30%, 50%, 70%, 90% {
    transform: translateX(-10px);
  }

  20%, 40%, 60%, 80% {
    transform: translateX(10px);
  }
}
/*
00 - Load bubble
------------------------------------------------------------*/
.load-bubble {
  background: #FFF;
  border-radius: 25px;
  height: 25px;
  line-height: 22px;
  margin: 5% auto auto;
  padding: 0 10px;
  position: relative;
  text-align: center;
  width: 82px;
}
.load-bubble:after {
  background: inherit;
  border-radius: 10px;
  content: " ";
  height: 10px;
  left: -15px;
  position: absolute;
  top: 20px;
  width: 10px;
}
.load-bubble li {
  border-radius: 50%;
  display: inline-block;
  height: 8px;
  margin: 0 2px;
  width: 8px;
}
.load-bubble li:first-of-type {
  background: #a4a3ac;
  -webkit-animation: first 1s linear alternate infinite;
}
.load-bubble li:nth-of-type(2) {
  background: #97969c;
  -webkit-animation: second 1s linear alternate infinite;
}
.load-bubble li:last-of-type {
  background: #6c6b73;
  -webkit-animation: third 1s linear alternate infinite;
}

@-webkit-keyframes third {
  0% {
    background: #a4a3ac;
  }

  50% {
    background: #97969c;
  }

  100% {
    background: #6c6b73;
  }
}
@-webkit-keyframes second {
  0% {
    background: #97969c;
  }

  50% {
    background: #6c6b73;
  }

  100% {
    background: #a4a3ac;
  }
}
@-webkit-keyframes first {
  0% {
    background: #6c6b73;
  }

  50% {
    background: #a4a3ac;
  }

  100% {
    background: #97969c;
  }
}
/*
00 - modal
------------------------------------------------------------*/
body.modal-open, .modal-open .navbar-fixed-top, .modal-open .navbar-fixed-bottom {
  margin-right: 0;
}

.modal {
  background-color: #ffffff;
  background-clip: padding-box;
  border-radius: 0;
  bottom: auto;
  -webkit-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.3);
  box-shadow: 0 1px 3px rgba(0, 0, 0, 0.3);
  left: 50%;
  margin-left: -250px;
  padding: 0;
  right: auto;
  width: 500px;
}
.modal.container {
  max-width: none;
}

.modal-open {
  overflow: hidden;
}
.modal-open.page-overflow .page-container {
  overflow-y: scroll;
}
.modal-open.page-overflow .page-container .navbar-fixed-top, .modal-open.page-overflow .page-container .navbar-fixed-bottom {
  overflow-y: scroll;
}
.modal-open.page-overflow .modal-scrollable {
  overflow-y: scroll;
}

.modal-scrollable {
  bottom: 0;
  left: 0;
  overflow: auto;
  position: fixed;
  right: 0;
  top: 0;
}

.modal {
  outline: none;
  overflow: visible;
  position: absolute;
  top: 50%;
}

/* Effect : scale up */
.md-scale {
  opacity: 0;
  -moz-transform: scale(0.7);
  -ms-transform: scale(0.7);
  -webkit-transform: scale(0.7);
  transform: scale(0.7);
  -moz-transition: opacity 0.25s linear, -moz-transform 0.25s;
  -webkit-transition: opacity 0.25s linear, -webkit-transform 0.25s;
  transition: opacity 0.25s linear, transform 0.25s;
}
.md-scale.in {
  opacity: 1;
  -moz-transform: scale(1);
  -ms-transform: scale(1);
  -webkit-transform: scale(1);
  transform: scale(1);
}

/* Effect : Slide from the right */
.md-slideRight {
  opacity: 0;
  -moz-transform: translateX(20%);
  -ms-transform: translateX(20%);
  -webkit-transform: translateX(20%);
  transform: translateX(20%);
  -moz-transition: opacity 0.25s linear, -moz-transform 0.25s cubic-bezier(0.25, 0.5, 0.5, 0.9);
  -webkit-transition: opacity 0.25s linear, -webkit-transform 0.25s cubic-bezier(0.25, 0.5, 0.5, 0.9);
  transition: opacity 0.25s linear, transform 0.25s cubic-bezier(0.25, 0.5, 0.5, 0.9);
}
.md-slideRight.in {
  opacity: 1;
  -moz-transform: translateX(0);
  -ms-transform: translateX(0);
  -webkit-transform: translateX(0);
  transform: translateX(0);
}

/* Effect : Slide from the bottom */
.md-slideUp {
  opacity: 0;
  -moz-transform: translateY(20%);
  -ms-transform: translateY(20%);
  -webkit-transform: translateY(20%);
  transform: translateY(20%);
  -moz-transition: opacity 0.25s linear, -moz-transform 0.25s cubic-bezier(0.25, 0.5, 0.5, 0.9);
  -webkit-transition: opacity 0.25s linear, -webkit-transform 0.25s cubic-bezier(0.25, 0.5, 0.5, 0.9);
  transition: opacity 0.25s linear, transform 0.25s cubic-bezier(0.25, 0.5, 0.5, 0.9);
}
.md-slideUp.in {
  opacity: 1;
  -moz-transform: translateY(0);
  -ms-transform: translateY(0);
  -webkit-transform: translateY(0);
  transform: translateY(0);
}

/* Effect : Slide from the top */
.md-slideDown {
  opacity: 0;
  -moz-transform: translateY(-40%);
  -ms-transform: translateY(-40%);
  -webkit-transform: translateY(-40%);
  transform: translateY(-40%);
  -moz-transition: opacity 0.25s linear, -moz-transform 0.25s cubic-bezier(0.25, 0.5, 0.5, 0.9);
  -webkit-transition: opacity 0.25s linear, -webkit-transform 0.25s cubic-bezier(0.25, 0.5, 0.5, 0.9);
  transition: opacity 0.25s linear, transform 0.25s cubic-bezier(0.25, 0.5, 0.5, 0.9);
}
.md-slideDown.in {
  opacity: 1;
  -moz-transform: translateY(0);
  -ms-transform: translateY(0);
  -webkit-transform: translateY(0);
  transform: translateY(0);
}

/* Effect:  slide and stick to top */
.modal.md-stickTop {
  top: 0;
}

.md-stickTop {
  opacity: 0;
  -moz-transform: translateY(-100%);
  -ms-transform: translateY(-100%);
  -webkit-transform: translateY(-100%);
  transform: translateY(-100%);
  -moz-transition: opacity 0.25s linear, -moz-transform 0.25s;
  -webkit-transition: opacity 0.25s linear, -webkit-transform 0.25s;
  transition: opacity 0.25s linear, transform 0.25s;
}
.md-stickTop.in {
  border-radius: 0 0 3px 3px;
  margin-top: 0 !important;
  opacity: 1;
  -moz-transform: translateY(0%);
  -ms-transform: translateY(0%);
  -webkit-transform: translateY(0%);
  transform: translateY(0%);
}

/* Effect : 3D flip horizontal */
.modal.md-flipHor {
  -webkit-perspective: 1300px;
  -moz-perspective: 1300px;
  perspective: 1300px;
}

.md-flipHor {
  opacity: 0;
  -moz-transform: rotateY(-70deg);
  -ms-transform: rotateY(-70deg);
  -webkit-transform: rotateY(-70deg);
  transform: rotateY(-70deg);
  -moz-transition: opacity 0.25s linear, -moz-transform 0.25s;
  -webkit-transition: opacity 0.25s linear, -webkit-transform 0.25s;
  transition: opacity 0.25s linear, transform 0.25s;
  -webkit-transform-style: preserve-3d;
  -moz-transform-style: preserve-3d;
  transform-style: preserve-3d;
}
.md-flipHor.in {
  opacity: 1;
  -moz-transform: rotateY(0deg);
  -ms-transform: rotateY(0deg);
  -webkit-transform: rotateY(0deg);
  transform: rotateY(0deg);
}

/* Effect : 3D flip vertical */
.modal.md-flipVer {
  -webkit-perspective: 1300px;
  -moz-perspective: 1300px;
  perspective: 1300px;
}

.md-flipVer {
  opacity: 0;
  -moz-transform: rotateX(-70deg);
  -ms-transform: rotateX(-70deg);
  -webkit-transform: rotateX(-70deg);
  transform: rotateX(-70deg);
  -moz-transition: opacity 0.25s linear, -moz-transform 0.25s;
  -webkit-transition: opacity 0.25s linear, -webkit-transform 0.25s;
  transition: opacity 0.25s linear, transform 0.25s;
  -webkit-transform-style: preserve-3d;
  -moz-transform-style: preserve-3d;
  transform-style: preserve-3d;
}
.md-flipVer.in {
  opacity: 1;
  -moz-transform: rotateX(0deg);
  -ms-transform: rotateX(0deg);
  -webkit-transform: rotateX(0deg);
  transform: rotateX(0deg);
}

.modal-header {
  border-bottom: 1px solid;
  border-color: #e5e5e5;
}

.modal-header[class^="bd-"], .modal-header[class*="bd-"] {
  border-width: 5px !important;
}

.modal-body {
  max-height: none;
  overflow: visible;
}

.modal-footer {
  margin: 0;
}
.modal-footer .btn {
  margin-bottom: 0;
}

.modal.modal-absolute {
  position: absolute;
  z-index: 950;
}
.modal .loading-mask {
  background: #fff;
  border-radius: 6px;
  bottom: 0;
  left: 0;
  position: absolute;
  right: 0;
  top: 0;
}

.modal-backdrop {
  background: #111;
  filter: alpha(opacity=30);
  opacity: 0.3;
}
.modal-backdrop.modal-absolute {
  position: absolute;
  z-index: 940;
}
.modal-backdrop.fade.in {
  background: #111;
  filter: alpha(opacity=30);
  opacity: 0.3;
}

.modal.container {
  margin-left: -470px;
  width: 940px;
}

/* Modal Overflow */
.modal-overflow.modal {
  top: 1%;
}
.modal-overflow.modal.fade {
  top: -100%;
}
.modal-overflow.modal.fade.in {
  top: 1%;
}
.modal-overflow .modal-body {
  overflow: auto;
  -webkit-overflow-scrolling: touch;
}

/*
00 - Modal crop
----------------------*/
.modal-crop {
  padding: 0;
}
.modal-crop .row {
  margin: 0;
}
.modal-crop .col-md-8, .modal-crop .col-md-4 {
  padding: 0;
}
.modal-crop .modal-crop-body {
  padding: 15px;
  position: relative;
}
.modal-crop .modal-crop-body textarea {
  height: 75px;
  max-height: 75px;
}
.modal-crop .modal-crop-body .close {
  position: absolute;
  right: 15px;
  top: 10px;
}

/*
00 - File input
------------------------------------------------------------*/
.btn-file {
  overflow: hidden;
  position: relative;
  vertical-align: middle;
}
.btn-file > input {
  cursor: pointer;
  direction: ltr;
  filter: alpha(opacity=0);
  font-size: 23px;
  margin: 0;
  opacity: 0;
  position: absolute;
  right: 0;
  top: 0;
  transform: translate(-300px, 0) scale(4);
}

.fileinput {
  display: inline-block;
  margin-bottom: 9px;
}
.fileinput .uneditable-input {
  cursor: text;
  display: inline-block;
  margin-bottom: 0px;
  vertical-align: middle;
}
.fileinput .thumbnail {
  display: inline-block;
  margin-bottom: 5px;
  overflow: hidden;
  text-align: center;
  vertical-align: middle;
}
.fileinput .thumbnail > img {
  max-height: 100%;
}
.fileinput .btn {
  vertical-align: middle;
}

.fileinput-exists .fileinput-new, .fileinput-new .fileinput-exists {
  display: none;
}

.fileinput-inline .fileinput-controls {
  display: inline;
}

.fileinput .uneditable-input {
  white-space: normal;
}

.form-group.has-warning .fileinput .uneditable-input {
  border-color: #faebcc;
  color: #c09853;
}
.form-group.has-warning .fileinput .fileinput-preview {
  color: #c09853;
}
.form-group.has-warning .fileinput .thumbnail {
  border-color: #faebcc;
}
.form-group.has-error .fileinput .uneditable-input {
  border-color: #ebccd1;
  color: #b94a48;
}
.form-group.has-error .fileinput .fileinput-preview {
  color: #b94a48;
}
.form-group.has-error .fileinput .thumbnail {
  border-color: #ebccd1;
}
.form-group.has-success .fileinput .uneditable-input {
  border-color: #d6e9c6;
  color: #468847;
}
.form-group.has-success .fileinput .fileinput-preview {
  color: #468847;
}
.form-group.has-success .fileinput .thumbnail {
  border-color: #d6e9c6;
}

/*
00 - code pretty print
------------------------------------------------------------*/
code .str, pre .str {
  color: #e6db5a;
}

code .kwd, pre .kwd {
  color: #66d9ef;
}

code .com, pre .com {
  color: #75715e;
  font-style: italic;
}

code .typ, pre .typ {
  color: #66d9ef;
}

code .lit, pre .lit {
  color: #ae81ff;
}

code .pln, code .pun {
  color: #fff;
}

pre .pln, pre .pun {
  color: #fff;
}

code .tag, pre .tag {
  color: #f92672;
}

code .atn, pre .atn {
  color: #a6e22a;
}

code .atv, pre .atv {
  color: #e6db74;
}

code .dec, pre .dec {
  color: #ae81ff;
}

code.prettyprint {
  background-color: #2E2E31;
  border: 1px #272822 solid;
}

pre.prettyprint {
  background-color: #2E2E31;
  border: 1px #272822 solid;
  margin: 1em auto;
  padding: 1em;
  white-space: pre-wrap;
  width: 100%;
}
pre.prettyprinted {
  border: 1px solid #0b0c0a;
  box-shadow: inset 0 0 1px 2px #3c3d39, 0 0 15px rgba(0, 0, 0, 0.5);
}

ol.linenums {
  color: #75715e;
  list-style: decimal inside !important;
  margin-bottom: 0;
  margin-top: 0;
}

@media print {
  code.prettyprint {
    background-color: #fff;
    -moz-border-radius: 0;
    -webkit-border-radius: 0;
    border-radius: 0;
    color: #000;
    -o-border-radius: 0;
    -ms-border-radius: 0;
    -khtml-border-radius: 0;
  }

  pre.prettyprint, pre.prettyprinted {
    background-color: #fff;
    -moz-border-radius: 0;
    -webkit-border-radius: 0;
    border-radius: 0;
    color: #000;
    -o-border-radius: 0;
    -ms-border-radius: 0;
    -khtml-border-radius: 0;
  }

  code .str, pre .str {
    color: #060;
  }

  code .kwd, pre .kwd {
    color: #006;
    font-weight: 700;
  }

  code .com, pre .com {
    color: #600;
    font-style: italic;
  }

  code .typ, pre .typ {
    color: #404;
    font-weight: 700;
  }

  code .lit, pre .lit {
    color: #044;
  }

  code .pun, pre .pun {
    color: #440;
  }

  code .pln, pre .pln {
    color: #000;
  }

  code .tag, pre .tag {
    color: #006;
    font-weight: 700;
  }

  code .atn, pre .atn {
    color: #404;
  }

  code .atv, pre .atv {
    color: #060;
  }
}
/*
00 - alert notific8 
------------------------------------------------------------*/
.jquery-notific8-container {
  display: block;
  margin: 0;
  padding: 0;
  position: fixed;
}
.jquery-notific8-container.top {
  top: 55px;
}
.jquery-notific8-container.top.right {
  right: 15px;
}
.jquery-notific8-container.bottom.right {
  right: 15px;
}
.jquery-notific8-container.top.left {
  left: 15px;
}
.jquery-notific8-container.bottom {
  bottom: 0;
}
.jquery-notific8-container.bottom.left {
  left: 15px;
}

.jquery-notific8-notification {
  border-radius: 1px;
  display: block;
  opacity: 0;
  padding: 10px 15px;
  position: relative;
  -webkit-transform: translate3d(50%, 0, 0);
  transform: translate3d(50%, 0, 0);
  -moz-transition: all 0.5s;
  -webkit-transition: all 0.5s;
  transition: all 0.5s;
  width: 290px;
}
.jquery-notific8-notification.in {
  opacity: 1;
  -webkit-transform: translate3d(0, 0, 0);
  transform: translate3d(0, 0, 0);
}
.jquery-notific8-notification:hover .jquery-notific8-close {
  display: block;
}

.jquery-notific8-heading {
  font-weight: bold;
  margin-bottom: 0.3125em;
}

.jquery-notific8-close {
  cursor: pointer;
  display: none;
  padding: 0 0.25em;
  position: absolute;
  top: 5px;
}

.jquery-notific8-close-sticky {
  cursor: pointer;
  position: absolute;
  text-align: center;
  text-transform: uppercase;
  width: 5.5625em;
}
.jquery-notific8-close-sticky span {
  display: inline-block;
  font-size: 0.625em;
  padding: 5px 0;
}

.right .jquery-notific8-notification {
  clear: right;
  float: right;
  padding-right: 2.0625em;
}
.right .jquery-notific8-close {
  right: 7px;
}

.left .jquery-notific8-close {
  right: 7px;
}

.right .jquery-notific8-close-sticky {
  right: -5px;
  top: -5px;
}

.left .jquery-notific8-notification {
  clear: left;
  float: left;
  opacity: 0;
  -webkit-transform: translate3d(-50%, 0, 0);
  transform: translate3d(-50%, 0, 0);
}
.left .jquery-notific8-notification.in {
  opacity: 1;
  -webkit-transform: translate3d(0%, 0, 0);
  transform: translate3d(0%, 0, 0);
}
.left .jquery-notific8-close-sticky {
  right: -5px;
  top: -5px;
}

.top .jquery-notific8-notification {
  margin-top: 0.625em;
}

.bottom .jquery-notific8-notification {
  margin-bottom: 0.625em;
}

.jquery-notific8-notification {
  background-color: #F7F4D0;
}
.jquery-notific8-notification.default {
  color: #FFF;
}

/*
00 -  jslider
------------------------------------------------------------*/
.jslider {
  display: block;
  font-family: Arial, sans-serif;
  height: 1em;
  margin-top: 30px;
  position: relative;
  top: 0.6em;
}
.jslider table {
  border: 0;
  border-collapse: collapse;
  width: 100%;
}
.jslider td, .jslider th {
  border: 0;
  padding: 0;
  text-align: left;
  vertical-align: top;
}
.jslider table {
  vertical-align: top;
  width: 100%;
}
.jslider table tr {
  vertical-align: top;
  width: 100%;
}
.jslider table tr td {
  vertical-align: top;
  width: 100%;
}
.jslider .jslider-bg {
  position: relative;
}
.jslider .jslider-bg i {
  background-color: #EEE;
  font-size: 0;
  height: 5px;
  position: absolute;
  top: 0;
}
.jslider .jslider-bg .l {
  background-position: 0 0;
  left: 0;
  width: 50%;
}
.jslider .jslider-bg .r {
  background-position: right 0;
  left: 50%;
  width: 50%;
}
.jslider .jslider-bg .v {
  background: #CCC;
  height: 5px;
  left: 20%;
  position: absolute;
  top: 0;
  width: 60%;
}
.jslider .jslider-pointer {
  background-color: #FFF;
  border: 1px #DDD solid;
  border-radius: 4px;
  box-shadow: 1px 1px 0px rgba(0, 0, 0, 0.125);
  cursor: pointer;
  height: 15px;
  left: 20%;
  margin-left: -6px;
  position: absolute;
  top: -5px;
  width: 15px;
}
.jslider .jslider-pointer-to {
  left: 80%;
}
.jslider .jslider-label {
  color: black;
  font-size: 10px;
  left: 0px;
  line-height: 12px;
  opacity: 0.4;
  padding: 0px 2px;
  position: absolute;
  top: -24px;
  white-space: nowrap;
}
.jslider .jslider-label-to {
  left: auto;
  right: 0;
}
.jslider .jslider-value {
  background: #f5f5f5;
  font-size: 9px;
  left: 20%;
  line-height: 12px;
  padding: 3px 8px 1px;
  position: absolute;
  top: -28px;
  white-space: nowrap;
}
.jslider .jslider-value-to {
  left: 80%;
}
.jslider .jslider-label small, .jslider .jslider-value small {
  position: relative;
  top: -0.4em;
}
.jslider .jslider-scale {
  position: relative;
  top: 12px;
}
.jslider .jslider-scale span {
  border-left: 1px solid #DDD;
  font-size: 0;
  height: 5px;
  position: absolute;
}
.jslider .jslider-scale ins {
  color: #DDD;
  font-size: 9px;
  left: 0px;
  position: absolute;
  text-decoration: none;
  top: 7px;
}

.jslider-single .jslider-pointer-to, .jslider-single .jslider-value-to, .jslider-single .jslider-bg .v {
  display: none;
}

.jslider-limitless .jslider-label {
  display: none;
}

/*
00 - modern  slider
------------------------------------------------------------*/
.slider-wrapper {
  margin-bottom: 45px;
}
.slider-wrapper .inline {
  display: inline-block;
  padding: 0 15px;
  width: 80%;
}
.slider-wrapper + .slider-wrapper {
  margin-bottom: 55px;
}

.cp-slider-wrapper {
  margin: 0 auto;
  padding: 20px 5px 20px;
  position: relative;
  -webkit-transition: width 150ms ease-out;
  transition: width 150ms ease-out;
  width: 0px;
}
.cp-slider-wrapper nav a {
  color: #DDD;
  cursor: pointer;
  font-size: 20px;
  height: 38px;
  line-height: 38px;
  position: absolute;
  text-align: center;
  top: 10px;
  width: 38px;
}
.cp-slider-wrapper nav a:hover {
  color: #CCC;
}
.cp-slider-wrapper nav a.cp-prev {
  left: -65px;
}
.cp-slider-wrapper nav a.cp-next {
  right: -68px;
}

.cp-slider {
  background: #EEE;
  border-radius: 8px;
  height: 17px;
  position: relative;
}
.cp-slider .ui-slider-range-min, .cp-slider .ui-slider-range-max {
  border-radius: 8px;
}
.cp-slider .ui-slider-handle {
  background-color: #F37864;
  background-image: none;
  border: none;
  border-radius: 50%;
  -webkit-box-shadow: 1px 2px 0 rgba(0, 0, 0, 0.1);
  -moz-box-shadow: 1px 2px 0 rgba(0, 0, 0, 0.1);
  box-shadow: 1px 2px 0 rgba(0, 0, 0, 0.1);
  cursor: pointer;
  height: 40px;
  left: 0;
  margin-left: -20px;
  outline: none;
  position: absolute;
  top: -12px;
  width: 40px;
}
.cp-slider .ui-slider-handle.ui-state-default {
  border: 1px transparent solid;
}
.cp-slider .ui-slider-handle span {
  background: transparent;
  color: #FFF;
  font-size: 14px;
  font-weight: 700;
  height: 100%;
  line-height: 40px;
  position: absolute;
  text-align: center;
  width: 100%;
  z-index: 2;
}

.cp-slider-open .ui-slider-handle span {
  color: #FFF;
}

/*
00 -  tabdrop
------------------------------------------------------------*/
.tabdrop {
  position: relative;
}
.tabdrop .badge {
  background-color: #F37864;
  font-weight: 300;
  height: 19px;
  line-height: 19px;
  min-width: 19px;
  padding: 0 6px;
  position: absolute;
  right: -8px;
  right: -10px;
  text-align: center;
  top: 4px;
  top: -8px;
  z-index: 2;
}

/*
00 - Tag input
------------------------------------------------------------*/
.bootstrap-tagsinput {
  background-color: #fff;
  border: 1px solid #ccc;
  border-radius: 2px;
  color: #555;
  line-height: 20px;
  margin-bottom: 10px;
  min-height: 35px;
  padding: 5px 6px 0px;
  vertical-align: middle;
}
.bootstrap-tagsinput input {
  background-color: transparent;
  border: none;
  border-radius: 0;
  box-shadow: none;
  font-size: 12px;
  margin: 0;
  max-width: inherit;
  outline: none;
  width: auto !important;
}
.bootstrap-tagsinput input:focus {
  border: none;
  box-shadow: none;
}
.bootstrap-tagsinput .tag {
  border-radius: 0;
  color: white;
  display: inline-block;
  margin: 0 2px 6px 0;
  padding: 5px 27px 5px 7px;
  position: relative;
}
.bootstrap-tagsinput .tag [data-role="remove"] {
  background-color: rgba(0, 0, 0, 0.05);
  cursor: pointer;
  font-family: Arial, Helvetica, sans-serif;
  padding: 5px;
  position: absolute;
  right: 0;
  top: 0;
}
.bootstrap-tagsinput .tag [data-role="remove"]:after {
  content: "x";
  padding: 0px 2px;
}
.bootstrap-tagsinput .tag [data-role="remove"]:hover {
  box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05);
}
.bootstrap-tagsinput .tag [data-role="remove"]:hover:active {
  box-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
}

/*
00 -  parsley validate
------------------------------------------------------------*/
input.parsley-success:focus, textarea.parsley-success:focus, input.parsley-success[type="text"]:focus, input.parsley-success[type="password"]:focus, input.parsley-success[type="datetime"]:focus, input.parsley-success[type="datetime-local"]:focus, input.parsley-success[type="date"]:focus, input.parsley-success[type="month"]:focus, input.parsley-success[type="time"]:focus, input.parsley-success[type="week"]:focus, input.parsley-success[type="number"]:focus, input.parsley-success[type="email"]:focus, input.parsley-success[type="url"]:focus, input.parsley-success[type="search"]:focus, input.parsley-success[type="tel"]:focus, input.parsley-success[type="color"]:focus, .parsley-success.uneditable-input:focus {
  border: 1px solid #D6E9C6 !important;
  color: #468847 !important;
}

input.parsley-error, textarea.parsley-error {
  border: 1px solid #F36523 !important;
  color: #B94A48 !important;
}

ul.parsley-error-list {
  color: #E15258;
  font-size: 12px;
  list-style-type: none;
  margin: 3px 0;
}

/*
00 - Text Limit
------------------------------------------------------------*/
.cl-textlimit textarea, .cl-textlimit-result {
  -moz-transition: border 0.5s, color 0.5s;
  -webkit-transition: border 0.5s, color 0.5s;
  transition: border 0.5s, color 0.5s;
}

.cl-textlimit textarea.limited {
  border: 1px #F30 solid;
}

.cl-textlimit-result {
  color: #269881;
  font-size: 12px;
}
.cl-textlimit-result.limited {
  color: #F30;
}

/*
00 -  wizard step
------------------------------------------------------------*/
.wizard-step {
  background-color: #FFF;
}
.wizard-step ul.nav-wizard {
  padding: 15px;
}
.wizard-step ul.nav-wizard li {
  display: inline-block;
  margin: 5px;
}
.wizard-step ul.nav-wizard li a {
  background-color: #f7f6f1;
  border-radius: 50%;
  color: #a1a1a1;
  display: inline-block;
  height: 40px;
  line-height: 40px;
  position: relative;
  text-align: center;
  -moz-transition: background 0.5s ease-in-out;
  -webkit-transition: background 0.5s ease-in-out;
  transition: background 0.5s ease-in-out;
  width: 40px;
}
.wizard-step ul.nav-wizard li.active a, .wizard-step ul.nav-wizard li.completed a {
  background-color: #6cc3a0;
  color: #FFF;
}
.wizard-step ul.nav-wizard li.active a {
  background-color: #5db491;
}
.wizard-step .pager {
  margin-top: 0;
}
.wizard-step .wizard-status {
  color: #CCC;
  font-family: Arial, Helvetica, sans-serif;
  font-size: 11px;
  font-weight: 700;
}
.wizard-step .final {
  display: none;
}

/*
00 -  contact status
------------------------------------------------------------*/
#menu-right li {
  position: relative;
}
#menu-right li.img a {
  opacity: 0.5;
}
#menu-right li.img a.online, #menu-right li.img a.busy, #menu-right li.img a.block {
  opacity: 1;
}
#menu-right li.img a small {
  display: block;
}
#menu-right li.img a:before {
  background-color: #262729;
  border-radius: 50%;
  content: "";
  height: 10px;
  margin-top: -5px;
  position: absolute;
  right: 15px;
  top: 50%;
  width: 10px;
}
#menu-right li.img a.online:before {
  background-color: #00cc00;
}
#menu-right li.img a.busy:before {
  background-color: #ff9900;
}
#menu-right li.img a.block:before {
  background-color: #e15258;
}
#menu-right li .widget-collapse {
  margin: -15px -10px -15px -20px;
}
#menu-right li .widget-collapse header {
  padding: 0 15px;
  background: rgba(255, 255, 255, 0.05);
  text-transform: uppercase;
}
#menu-right li .widget-collapse header a {
  font-weight: 700;
  line-height: 30px;
}
#menu-right li .widget-collapse header a i.collapse-caret {
  margin-top: 7px;
  color: rgba(255, 255, 255, 0.5);
}
#menu-right li .widget-collapse section .collapse-boby {
  padding: 15px 20px;
}

/*
00 - Multi Select 
----------------------*/
.ms-container {
  background: transparent url("../img/switch.png") no-repeat 50% 50%;
  width: 370px;
}
.ms-container:after {
  content: ".";
  display: block;
  height: 0;
  line-height: 0;
  font-size: 0;
  clear: both;
  min-height: 0;
  visibility: hidden;
}
.ms-container .ms-selectable {
  background: #fff;
  color: #555555;
  float: left;
  width: 45%;
}
.ms-container .ms-selection {
  background: #fff;
  color: #555555;
  float: left;
  width: 45%;
  float: right;
}
.ms-container .ms-list {
  -webkit-transition: All linear 0.2s;
  -moz-transition: All linear 0.2s;
  -ms-transition: All linear 0.2s;
  -o-transition: All linear 0.2s;
  transition: All linear 0.2s;
  border: 1px solid #ededed;
  position: relative;
  height: 200px;
  padding: 0;
  overflow-y: auto;
}
.ms-container .ms-list.ms-focus {
  border-color: #CCC;
  outline: 0;
  outline: thin dotted \9;
}
.ms-container ul {
  margin: 0;
  list-style-type: none;
  padding: 0;
}
.ms-container .ms-optgroup-container {
  width: 100%;
}
.ms-container .ms-optgroup-label {
  margin: 0;
  padding: 5px 0px 0px 5px;
  cursor: pointer;
  color: #999;
}
.ms-container .ms-selectable li.ms-elem-selectable, .ms-container .ms-selection li.ms-elem-selection {
  border-bottom: 1px #eee solid;
  padding: 5px 10px;
  color: #555;
  font-size: 14px;
}
.ms-container .ms-selectable li.ms-hover, .ms-container .ms-selection li.ms-hover {
  cursor: pointer;
  color: #fff;
  text-decoration: none;
  background-color: #0aa699;
}
.ms-container .ms-selectable li.disabled, .ms-container .ms-selection li.disabled {
  background-color: #eee;
  color: #aaa;
  cursor: text;
}

/*
00 -iOS color switch
------------------------------------------------------------*/
.dark .ios-switch .has-switch:before, .dark .ios-switch .has-switch:after {
  background-color: #3c4250;
}

.ios-switch.primary .has-switch.checked:before {
  background-color: #0090d9;
}

.ios-switch.success .has-switch.checked:before {
  background-color: #2ecc71;
}

.ios-switch.warning .has-switch.checked:before {
  background-color: #ffcc33;
}

.ios-switch.danger .has-switch.checked:before {
  background-color: #d9534f;
}

.ios-switch.info .has-switch.checked:before {
  background-color: #b5d1d8;
}

.ios-switch.white .has-switch.checked:before {
  background-color: white;
}

.ios-switch.inverse .has-switch.checked:before {
  background-color: #62707d;
}

.ios-switch.theme .has-switch.checked:before {
  background-color: #f35958;
}

.ios-switch.theme-inverse .has-switch.checked:before {
  background-color: #0aa699;
}

.ios-switch.palevioletred .has-switch.checked:before {
  background-color: #372b32;
}

.ios-switch.green .has-switch.checked:before {
  background-color: #99cc00;
}

.ios-switch.lightseagreen .has-switch.checked:before {
  background-color: #3db9af;
}

.ios-switch.purple .has-switch.checked:before {
  background-color: #736086;
}

.ios-switch.darkorange .has-switch.checked:before {
  background-color: #f9ba46;
}

.ios-switch.pink .has-switch.checked:before {
  background-color: #d13a7a;
}

/*
00 - Nestable
----------------------*/
.dd {
  position: relative;
  display: block;
  margin: 0;
  padding: 0;
  width: 100%;
  list-style: none;
  font-size: 13px;
  line-height: 20px;
}

.dd-list {
  display: block;
  position: relative;
  margin: 0;
  padding: 0;
  list-style: none;
}
.dd-list .dd-list {
  padding-left: 30px;
}

.dd-collapsed .dd-list {
  display: none;
}

.dd-item, .dd-empty, .dd-placeholder {
  display: block;
  position: relative;
  margin: 0;
  padding: 0;
  min-height: 20px;
  font-size: 13px;
  line-height: 20px;
}

.dd-handle {
  display: block;
  height: 30px;
  margin: 5px 0;
  padding: 5px 10px;
  color: #333;
  text-decoration: none;
  border: 1px solid #ededed;
  background: #fafafa;
  box-sizing: border-box;
  -moz-box-sizing: border-box;
  -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, 0.05);
  box-shadow: 0 1px 1px rgba(0, 0, 0, 0.05);
}
.dd-handle:hover {
  color: #2ea8e5;
  background: #fff;
}

.dd-item > button {
  display: block;
  position: relative;
  cursor: pointer;
  float: left;
  width: 25px;
  height: 20px;
  margin: 5px 0;
  padding: 0;
  text-indent: 100%;
  white-space: nowrap;
  overflow: hidden;
  border: 0;
  background: transparent;
  font-size: 12px;
  line-height: 1;
  text-align: center;
  font-weight: bold;
}
.dd-item > button:before {
  content: '+';
  display: block;
  position: absolute;
  width: 100%;
  text-align: center;
  text-indent: 0;
}
.dd-item > button[data-action="collapse"]:before {
  content: '-';
}

.dd-placeholder {
  margin: 5px 0;
  padding: 0;
  min-height: 30px;
  background: #f2fbff;
  border: 1px dashed #b6bcbf;
  box-sizing: border-box;
  -moz-box-sizing: border-box;
}

.dd-empty {
  margin: 5px 0;
  padding: 0;
  min-height: 30px;
  background: #f2fbff;
  border: 1px dashed #b6bcbf;
  box-sizing: border-box;
  -moz-box-sizing: border-box;
  border: 1px dashed #bbb;
  min-height: 100px;
  background-color: #e5e5e5;
}

.dd-dragel {
  position: absolute;
  pointer-events: none;
  z-index: 9999;
}
.dd-dragel > .dd-item .dd-handle {
  margin-top: 0;
}
.dd-dragel .dd-handle {
  -webkit-box-shadow: 2px 4px 6px 0 rgba(0, 0, 0, 0.1);
  box-shadow: 2px 4px 6px 0 rgba(0, 0, 0, 0.1);
}

.nestable-lists {
  display: block;
  clear: both;
  padding: 30px 0;
  width: 100%;
  border: 0;
  border-top: 2px solid #ddd;
  border-bottom: 2px solid #ddd;
}

#nestable-menu {
  padding: 0;
  margin: 20px 0;
}

#nestable-output, #nestable2-output {
  width: 100%;
  height: 7em;
  font-size: 0.75em;
  line-height: 1.333333em;
  font-family: Consolas, monospace;
  padding: 5px;
  box-sizing: border-box;
  -moz-box-sizing: border-box;
}

#nestable2 .dd-handle {
  color: #fff;
  border: 1px solid #999;
  background: #bbb;
}
#nestable2 .dd-handle:hover {
  background: #bbb;
}
#nestable2 .dd-item > button:before {
  color: #fff;
}

.dd-hover > .dd-handle {
  background: #2ea8e5 !important;
}

/*
00 - Tree view
----------------------*/
.treeview {
  list-style: none;
  margin: 0;
  padding: 0;
}
.treeview ul {
  background-color: white;
  list-style: none;
  margin: 0;
  margin-top: 4px;
  padding: 0;
}
.treeview .hitarea {
  background: url(../img/treeview/treeview-default.gif) -64px -25px no-repeat;
  cursor: pointer;
  float: left;
  height: 16px;
  margin-left: -16px;
  width: 16px;
}

* html .hitarea {
  display: inline;
  float: none;
}

.treeview li {
  margin: 0;
  padding: 0px 0pt 3px 16px;
}
.treeview li span {
  display: block;
  position: relative;
  top: -3px;
}
.treeview a, .treeview li span {
  color: #717171;
  -moz-transition: all 0.2s;
  -webkit-transition: all 0.2s;
  transition: all 0.2s;
}
.treeview a:hover, .treeview li span.hover {
  color: #a1a1a1;
}
.treeview a.selected {
  background-color: #eee;
}

#treecontrol {
  display: none;
  margin: 1em 0;
}

.treeview .hover {
  color: red;
  cursor: pointer;
}
.treeview li {
  background: url(../img/treeview/treeview-default-line.gif) 0 0 no-repeat;
}
.treeview li.collapsable, .treeview li.expandable {
  background-position: 0 -176px;
}
.treeview .expandable-hitarea {
  background-position: -80px -3px;
}
.treeview li.last {
  background-position: 0 -1766px;
}
.treeview li.lastCollapsable, .treeview li.lastExpandable {
  background-image: url(../img/treeview/treeview-default.gif);
}
.treeview li.lastCollapsable {
  background-position: 0 -111px;
}
.treeview li.lastExpandable {
  background-position: -32px -67px;
}
.treeview div.lastCollapsable-hitarea, .treeview div.lastExpandable-hitarea {
  background-position: 0;
}

.treeview-red li {
  background-image: url(../img/treeview/treeview-red-line.gif);
}
.treeview-red .hitarea {
  background-image: url(../img/treeview/treeview-red.gif);
}
.treeview-red li.lastCollapsable, .treeview-red li.lastExpandable {
  background-image: url(../img/treeview/treeview-red.gif);
}

.treeview-black li {
  background-image: url(../img/treeview/treeview-black-line.gif);
}
.treeview-black .hitarea {
  background-image: url(../img/treeview/treeview-black.gif);
}
.treeview-black li.lastCollapsable, .treeview-black li.lastExpandable {
  background-image: url(../img/treeview/treeview-black.gif);
}

.treeview-gray li {
  background-image: url(../img/treeview/treeview-gray-line.gif);
}
.treeview-gray .hitarea {
  background-image: url(../img/treeview/treeview-gray.gif);
}
.treeview-gray li.lastCollapsable, .treeview-gray li.lastExpandable {
  background-image: url(../img/treeview/treeview-gray.gif);
}

.treeview-famfamfam li {
  background-image: url(../img/treeview/treeview-famfamfam-line.gif);
}
.treeview-famfamfam .hitarea {
  background-image: url(../img/treeview/treeview-famfamfam.gif);
}
.treeview-famfamfam li.lastCollapsable, .treeview-famfamfam li.lastExpandable {
  background-image: url(../img/treeview/treeview-famfamfam.gif);
}

.treeview .placeholder {
  background: url(../img/treeview/ajax-loader.gif) 0 0 no-repeat;
  display: block;
  height: 16px;
  width: 16px;
}

.filetree li {
  padding: 3px 0 2px 16px;
}
.filetree span.folder, .filetree span.file {
  display: block;
  padding: 0px 0 1px 20px;
}
.filetree span.folder {
  background: url(../img/treeview/folder.gif) 2px 2px no-repeat;
}
.filetree li.expandable span.folder {
  background: url(../img/treeview/folder-closed.gif) 2px 2px no-repeat;
}
.filetree span.file {
  background: url(../img/treeview/file.gif) 2px 2px no-repeat;
}

/*
00 - Jcrop
----------------------*/
.jcrop-holder {
  direction: ltr;
  text-align: left;
}

.jcrop-vline, .jcrop-hline {
  background: white url("../img/crop.gif");
  font-size: 0;
  position: absolute;
}

.jcrop-vline {
  height: 100%;
  width: 1px !important;
}
.jcrop-vline.right {
  right: 0;
}

.jcrop-hline {
  height: 1px !important;
  width: 100%;
}
.jcrop-hline.bottom {
  bottom: 0;
}

.jcrop-tracker {
  height: 100%;
  width: 100%;
  -webkit-tap-highlight-color: transparent;
  -webkit-touch-callout: none;
  -webkit-user-select: none;
}

.jcrop-handle {
  background-color: #FFF;
  border: 1px #FFF solid;
  border-radius: 50%;
  -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, 0.5);
  box-shadow: 0 1px 1px rgba(0, 0, 0, 0.5);
  font-size: 1px;
  height: 14px;
  opacity: 1 !important;
  width: 14px;
}
.jcrop-handle.ord-n {
  left: 50%;
  margin-left: -4px;
  margin-top: -4px;
  opacity: 0 !important;
  top: 0;
}
.jcrop-handle.ord-s {
  bottom: 0;
  left: 50%;
  margin-bottom: -4px;
  margin-left: -4px;
  opacity: 0 !important;
}
.jcrop-handle.ord-e {
  margin-right: -4px;
  margin-top: -4px;
  opacity: 0 !important;
  right: 0;
  top: 50%;
}
.jcrop-handle.ord-w {
  left: 0;
  margin-left: -4px;
  margin-top: -4px;
  opacity: 0 !important;
  top: 50%;
}
.jcrop-handle.ord-nw {
  left: 0;
  margin-left: -6px;
  margin-top: -6px;
  top: 0;
}
.jcrop-handle.ord-ne {
  margin-right: -6px;
  margin-top: -6px;
  right: 0;
  top: 0;
}
.jcrop-handle.ord-se {
  bottom: 0;
  margin-bottom: -6px;
  margin-right: -6px;
  right: 0;
}
.jcrop-handle.ord-sw {
  bottom: 0;
  left: 0;
  margin-bottom: -6px;
  margin-left: -6px;
}

.jcrop-dragbar.ord-n, .jcrop-dragbar.ord-s {
  height: 7px;
  width: 100%;
}
.jcrop-dragbar.ord-e, .jcrop-dragbar.ord-w {
  height: 100%;
  width: 7px;
}
.jcrop-dragbar.ord-n {
  margin-top: -4px;
}
.jcrop-dragbar.ord-s {
  bottom: 0;
  margin-bottom: -4px;
}
.jcrop-dragbar.ord-e {
  margin-right: -4px;
  right: 0;
}
.jcrop-dragbar.ord-w {
  margin-left: -4px;
}

.jcrop-keymgr {
  visibility: hidden;
}

.jcrop-light .jcrop-vline, .jcrop-light .jcrop-hline {
  background: #ffffff;
  filter: alpha(opacity=70) !important;
  opacity: 0.7 !important;
}
.jcrop-light .jcrop-handle {
  background-color: #000000;
  border-color: #ffffff;
  -moz-border-radius: 3px;
  -webkit-border-radius: 3px;
  border-radius: 3px;
}

.jcrop-dark .jcrop-vline, .jcrop-dark .jcrop-hline {
  background: #000000;
  filter: alpha(opacity=70) !important;
  opacity: 0.7 !important;
}
.jcrop-dark .jcrop-handle {
  background-color: #ffffff;
  border-color: #000000;
  -moz-border-radius: 3px;
  -webkit-border-radius: 3px;
  border-radius: 3px;
}

.solid-line .jcrop-vline, .solid-line .jcrop-hline {
  background: #ffffff;
}

.jcrop-holder img, img.jcrop-preview {
  max-width: none;
}

div.dataTables_length {
  margin-bottom: 5px !important;
}
div.dataTables_length label {
  vertical-align: middle;
}
div.dataTables_length select {
  min-width: 75px;
}
div.dataTables_filter {
  margin-bottom: 5px !important;
}
div.dataTables_filter label {
  vertical-align: middle;
}
div.dataTables_info {
  padding: 18px 0 8px;
  font-size: 12px;
}
div.dataTables_paginate {
  margin: 10px 0;
  font-size: 12px;
}
div.dataTables_paginate ul.pagination {
  margin: 2px;
}

table.table {
  clear: both;
  margin-bottom: 6px !important;
  max-width: none !important;
}
table.table thead .sorting, table.table thead .sorting_asc, table.table thead .sorting_desc, table.table thead .sorting_asc_disabled, table.table thead .sorting_desc_disabled {
  cursor: pointer;
}
table.table thead .sorting {
  background: url("img/sort_both.png") no-repeat center right;
}
table.table thead .sorting_asc {
  background: url("img/sort_asc.png") no-repeat center right;
}
table.table thead .sorting_desc {
  background: url("img/sort_desc.png") no-repeat center right;
}
table.table thead .sorting_asc_disabled {
  background: url("img/sort_asc_disabled.png") no-repeat center right;
}
table.table thead .sorting_desc_disabled {
  background: url("img/sort_desc_disabled.png") no-repeat center right;
}
table.table thead .sorting, table.table thead .sorting_asc, table.table thead .sorting_desc, table.table thead .sorting_asc_disabled, table.table thead .sorting_desc_disabled {
  padding-right: 20px;
}
table.dataTable th:active {
  outline: none;
}

/* Scrolling */
div.dataTables_scrollHead table {
  margin-bottom: 0 !important;
  border-bottom-left-radius: 0;
  border-bottom-right-radius: 0;
}
div.dataTables_scrollHead table thead tr:last-child th:first-child, div.dataTables_scrollHead table thead tr:last-child td:first-child {
  border-bottom-left-radius: 0 !important;
  border-bottom-right-radius: 0 !important;
}
div.dataTables_scrollBody table {
  border-top: none;
  margin-bottom: 0 !important;
}
div.dataTables_scrollBody tbody tr:first-child th, div.dataTables_scrollBody tbody tr:first-child td {
  border-top: none;
}
div.dataTables_scrollFoot table {
  border-top: none;
}

/*
 * TableTools styles
 */
.table tbody tr.active td, .table tbody tr.active th {
  background-color: #08C;
  color: white;
}
.table tbody tr.active:hover td, .table tbody tr.active:hover th {
  background-color: #0075b0 !important;
}

.table-striped tbody tr.active:nth-child(odd) td, .table-striped tbody tr.active:nth-child(odd) th {
  background-color: #017ebc;
}

table.DTTT_selectable tbody tr {
  cursor: pointer;
}

div.DTTT .btn {
  color: #333 !important;
  font-size: 12px;
}
div.DTTT .btn:hover {
  text-decoration: none !important;
}

ul.DTTT_dropdown.dropdown-menu {
  z-index: 2003;
}
ul.DTTT_dropdown.dropdown-menu a {
  color: #333 !important;
}
ul.DTTT_dropdown.dropdown-menu li {
  position: relative;
}
ul.DTTT_dropdown.dropdown-menu li:hover a {
  background-color: #0088cc;
  color: white !important;
}

/* TableTools information display */
div.DTTT_print_info.modal {
  height: 150px;
  margin-top: -75px;
  text-align: center;
}
div.DTTT_print_info h6 {
  font-weight: normal;
  font-size: 28px;
  line-height: 28px;
  margin: 1em;
}
div.DTTT_print_info p {
  font-size: 14px;
  line-height: 20px;
}

/*
 * FixedColumns styles
 */
div.DTFC_LeftHeadWrapper table, div.DTFC_LeftFootWrapper table, div.DTFC_RightHeadWrapper table, div.DTFC_RightFootWrapper table, div table.DTFC_Cloned tr.even {
  background-color: white;
}
div.DTFC_RightHeadWrapper table, div.DTFC_LeftHeadWrapper table {
  margin-bottom: 0 !important;
  border-top-right-radius: 0 !important;
  border-bottom-left-radius: 0 !important;
  border-bottom-right-radius: 0 !important;
}
div.DTFC_RightHeadWrapper table thead tr:last-child th:first-child, div.DTFC_RightHeadWrapper table thead tr:last-child td:first-child {
  border-bottom-left-radius: 0 !important;
  border-bottom-right-radius: 0 !important;
}
div.DTFC_LeftHeadWrapper table thead tr:last-child th:first-child, div.DTFC_LeftHeadWrapper table thead tr:last-child td:first-child {
  border-bottom-left-radius: 0 !important;
  border-bottom-right-radius: 0 !important;
}
div.DTFC_RightBodyWrapper table, div.DTFC_LeftBodyWrapper table {
  border-top: none;
  margin-bottom: 0 !important;
}
div.DTFC_RightBodyWrapper tbody tr:first-child th, div.DTFC_RightBodyWrapper tbody tr:first-child td {
  border-top: none;
}
div.DTFC_LeftBodyWrapper tbody tr:first-child th, div.DTFC_LeftBodyWrapper tbody tr:first-child td {
  border-top: none;
}
div.DTFC_RightFootWrapper table, div.DTFC_LeftFootWrapper table {
  border-top: none;
}

/*!
 * jQVMap Version 1.0 
 *
 * http://jqvmap.com
 *
 * Copyright 2012, Peter Schmalfeldt <manifestinteractive@gmail.com>
 * Licensed under the MIT license.
 *
 * Fork Me @ https://github.com/manifestinteractive/jqvmap
 */
#vmap {
  height: 350px;
  padding: 20px;
}

.jqvmap-label {
  position: absolute;
  display: none;
  background: #292929;
  color: white;
  font-family: sans-serif, Verdana;
  font-size: smaller;
  padding: 3px;
}

.jqvmap-zoomin, .jqvmap-zoomout {
  position: absolute;
  left: 15px;
  background: #000;
  padding: 2px 8px 3px;
  color: white;
  cursor: pointer;
  text-align: center;
}

.jqvmap-zoomin {
  top: 10px;
}

.jqvmap-zoomout {
  top: 40px;
}

.jqvmap-region {
  cursor: pointer;
}

.jqvmap-ajax_response {
  width: 100%;
  height: 500px;
}

.grid-box {
  height: 50px;
  background-color: #fff;
  line-height: 50px;
  font-size: 12px;
  color: #DDD;
  text-transform: uppercase;
  text-align: center;
}

footer#site-footer {
  background-color: #f1f3f5;
  padding: 10px 0 10px 0;
  font-size: 12px;
  /***** 2.4. Hover effects *****/
  /***** 2.2. Clearfixes, paddings amd margins *****/
  /***** 2.3. Tooltips *****/
  /***** 2.5. Links and buttons *****/
  /***** 2.6. Speach bubbles and quotes *****/
  /***********************
      3. Dropdown menu
  ************************/
  /***** 3.1. Main styles *****/
  /***** 3.2. Menu dropdown bottom title *****/
  /***** 3.3. Inner blocks of menu *****/
  /***** 3.4. Tabs *****/
  /* Selectors for narrow tabs, which are presented in extended menu */
  /***** 3.6. Demo video styles *****/
  /***********************
      4. Contact form
  ************************/
  /**** Show arrow in webkit browsers and IE9/10 (pointer events don't work in those IE, so we have to hide it with this hack) ****/
  /**** Hack for Opera ****/
  /************************
      5. Expanded content
  *************************/
}
footer#site-footer.fixed {
  position: fixed;
  bottom: 0;
  z-index: 10;
  left: 0;
  right: 0;
}
footer#site-footer section {
  font-size: 11px;
  padding: 0 30px 0 10px;
}
footer#site-footer #copyright {
  display: block;
  float: right;
  color: #999;
  margin-right: 0px;
  line-height: 35px;
}
footer#site-footer #copyright > p {
  display: inline;
  font-size: 11px;
}
footer#site-footer #copyright a {
  color: #0aa699;
}
footer#site-footer .social-bar {
  display: inline-block;
  margin: -3px 0 0 20px;
}
footer#site-footer .social-bar a {
  background: #62707d;
  color: white !important;
  display: inline-block;
  width: 20px;
  height: 20px;
  text-align: center;
  line-height: 20px;
  text-decoration: none;
  margin: 0 0 0 2px;
  position: relative;
  font-size: 12px;
  vertical-align: middle;
}
footer#site-footer .social-bar a:hover {
  background: #6d7d8b;
}
footer#site-footer .fade-in,
footer#site-footer #footer-inner :hover,
footer#site-footer #footer-inner :focus,
footer#site-footer a.tip span,
footer#site-footer #tabs .tab-wrapper > div,
footer#site-footer #tabs input:hover + label,
footer#site-footer #inner-block-1 .overlay-icon,
footer#site-footer #tabs .overlay-text,
footer#site-footer #expanded-menu label {
  -webkit-transition: all .2s ease-in-out;
  -moz-transition: all .2s ease-in-out;
  -ms-transition: all .2s ease-in-out;
  -o-transition: all .2s ease-in-out;
  transition: all .2s ease-in-out;
}
footer#site-footer .clrfx-1 {
  display: block;
  height: 10px;
  content: "";
}
footer#site-footer .clrfx-2 {
  display: inline;
  margin: 10px 6px 0 0;
}
footer#site-footer .clrfx-3 {
  display: inline-block;
  padding: 0 4px;
}
footer#site-footer .clrfx-4 {
  display: block;
  height: 20px;
  content: "";
}
footer#site-footer .no-margin-padding {
  /* Resets previous margins to 0 if we need a block column as wrapper */
  margin: 0 !important;
  padding: 0 !important;
}
footer#site-footer .no-padding {
  /* Resets paddings back to 0 if we're using a column inside block */
  padding: 0 !important;
}
footer#site-footer .narrow-margin {
  /* This is a additional value for icons showcase, don't have to use it if you don't need it */
  margin-bottom: 14px !important;
  padding-left: 0 !important;
}
footer#site-footer a.tip span {
  width: auto;
  min-width: 120px;
  white-space: normal;
  height: auto;
  pointer-events: none;
  line-height: normal;
  padding: 12px 10px;
  left: -48px;
  right: 0;
  bottom: 60px;
  top: auto;
  margin: 0 auto;
  font-size: 10px;
  color: #6f7b8a;
  background: #fff;
  text-indent: 0;
  position: absolute;
  text-align: center;
  text-transform: uppercase;
  opacity: 0;
  box-shadow: 0 0 2px 0 rgba(0, 0, 0, 0.1);
  font-family: 'Source Sans Pro', sans-serif;
  z-index: -1;
  visibility: hidden;
}
footer#site-footer a.tip:hover span {
  opacity: 1;
  bottom: 40px;
  z-index: 999;
  visibility: visible;
}
footer#site-footer a.tip span:before, footer#site-footer a.tip span:after {
  content: '';
  position: absolute;
  bottom: -10px;
  left: 50%;
  margin-left: -10px;
  width: 0;
  height: 0;
  border-left: 10px solid transparent;
  border-right: 10px solid transparent;
  border-top: 8px solid rgba(34, 34, 34, 0.1);
}
footer#site-footer a.tip span:after {
  bottom: -8px;
  margin-left: -10px;
  border-top: 8px solid #fff;
}
footer#site-footer ul.dropdown a.menu {
  color: inherit;
  text-decoration: none;
  padding: 10px 30px 10px 18px;
  display: block;
  text-transform: uppercase;
  white-space: nowrap;
  width: auto;
}
footer#site-footer ul.dropdown a.menu:visited {
  color: inherit;
  text-decoration: none;
  padding: 10px 30px 10px 18px;
  display: block;
  text-transform: uppercase;
  white-space: nowrap;
  width: auto;
}
footer#site-footer ul.dropdown a.menu.right {
  padding: 10px 18px 10px 30px;
}
footer#site-footer ul.dropdown a.menu i {
  width: 20px;
  font-size: 14px;
  text-align: center;
  margin-right: 5px;
}
footer#site-footer ul.dropdown a.menu:hover {
  color: #fff;
  background: #0aa699;
}
footer#site-footer ul.dropdown a.menu span {
  display: inline-block;
  width: 34px;
}
footer#site-footer a.button-1 {
  color: #fff;
  background: #e4e4e4;
  text-decoration: none;
  display: inline-block;
  font-size: 10px;
  position: relative;
  padding: 0;
  width: 24px;
  height: 24px;
  text-align: center;
  line-height: 24px;
}
footer#site-footer a.button-1:hover {
  background: #999;
}
footer#site-footer a.button-2 {
  color: #222;
  display: inline-block;
  padding: 14px 0 0 0;
  text-decoration: none;
  float: right;
  font-size: 11px;
}
footer#site-footer a.button-2:hover {
  color: #999;
  text-decoration: none;
}
footer#site-footer a.button-2 span {
  padding-left: 6px;
  font-size: 11px;
  vertical-align: middle;
}
footer#site-footer a.link-1 {
  color: #222;
  text-decoration: none;
}
footer#site-footer a.link-1:hover {
  color: #999;
}
footer#site-footer a.link-1 span {
  font-size: 14px;
  width: 20px;
  display: inline-block;
}
footer#site-footer .bubble-1, footer#site-footer .bubble-2, footer#site-footer .bubble-3 {
  background: #e4e4e4;
  font-style: italic;
  font-style: 10px;
  display: block;
  line-height: 16px;
  padding: 14px;
  position: relative;
  float: left;
}
footer#site-footer .bubble-1 {
  color: #222;
  margin-top: 20px;
}
footer#site-footer .bubble-2, footer#site-footer .bubble-3 {
  /* Adjust this values to your needings, they are for demo purpouses */
  max-width: 185px;
  margin: 20px 0 0 0;
}
footer#site-footer .bubble-2 {
  background: #e4e4e4;
  color: #222;
  margin-right: 26px;
}
footer#site-footer .bubble-3 {
  background: #999;
  color: #fff;
}
footer#site-footer .bubble-1:before, footer#site-footer .bubble-2:before, footer#site-footer .bubble-3:before {
  content: "\00a0";
  display: block;
  height: 16px;
  width: 16px;
  position: absolute;
  bottom: auto;
  left: 26px;
  top: -7px;
  transform: rotate(-58deg) skew(0deg, 28deg);
  -moz-transform: rotate(-58deg) skew(0deg, 28deg);
  -webkit-transform: rotate(-58deg) skew(0deg, 28deg);
  -o-transform: rotate(-58deg) skew(0deg, 28deg);
  -ms-transform: rotate(-58deg) skew(0deg, 28deg);
}
footer#site-footer .bubble-1:before, footer#site-footer .bubble-2:before {
  background: #e4e4e4;
}
footer#site-footer .bubble-3:before {
  background: #999;
}
footer#site-footer .cite-1, footer#site-footer .cite-2 {
  padding-left: 10px;
  margin: 10px 0;
  display: inline-block;
  font-style: italic;
  font-style: 11px;
  line-height: 16px;
  color: #bbb;
}
footer#site-footer .cite-1 {
  border-left: solid 6px #e4e4e4;
}
footer#site-footer .cite-2 {
  border-left: solid 6px #999;
}
footer#site-footer b.dark {
  color: #222;
  font-weight: 400;
}
footer#site-footer b.color {
  color: #999;
  font-weight: 400;
}
footer#site-footer ul#footer-menu {
  font-family: 'Source Sans Pro', sans-serif;
  font-weight: 300;
}
footer#site-footer ul#footer-menu a.home {
  font-size: 25px;
  width: 35px;
  height: 35px;
  line-height: 35px;
  text-align: center;
  color: #6f7b8a;
  text-decoration: none;
  display: inline-block;
  border-radius: 50%;
}
footer#site-footer .main-item {
  margin: 0 5px;
  text-transform: uppercase;
  font-size: 10px;
  display: inline-block;
  cursor: pointer;
  color: #6f7b8a;
  font-weight: 400;
  line-height: 35px;
  position: relative;
}
footer#site-footer .main-item span {
  font-size: 12px;
  padding: 0 0 0 2px;
  vertical-align: middle;
  display: inline-block;
  margin-top: -2px;
}
footer#site-footer ul.dropdown {
  margin: 0 10px;
  padding: 0;
  list-style: none outside none;
  position: relative;
  z-index: 9999;
  float: left;
}
footer#site-footer ul.dropdown li, footer#site-footer ul.dropdown ul {
  margin: 0;
  padding: 0;
  list-style: none outside none;
}
footer#site-footer ul.dropdown li {
  float: left;
  min-height: 1px;
  vertical-align: middle;
  position: relative;
  color: #6f7b8a;
}
footer#site-footer ul.dropdown li:hover {
  position: relative;
  z-index: 99;
}
footer#site-footer ul.dropdown li:hover > .main-item {
  color: #8b95a1;
}
footer#site-footer ul.dropdown ul {
  left: -20px;
  position: absolute;
  top: 100%;
  visibility: hidden;
  margin: 0;
  width: auto;
  opacity: 0;
  -ms-filter: "alpha(opacity=0)";
  filter: alpha(opacity=0);
}
footer#site-footer ul.dropdown li:hover > ul {
  visibility: visible;
  -ms-filter: "alpha(opacity=100)";
  filter: alpha(opacity=100);
  opacity: 1;
  zoom: 1;
  z-index: 999;
}
footer#site-footer ul.dropdown ul li {
  float: none;
  font-weight: normal;
}
footer#site-footer ul.dropdown ul ul {
  top: auto;
  bottom: 0;
  left: 100%;
}
footer#site-footer ul.dropdown ul ul.right {
  /* Right submenu aligment */
  left: auto;
  right: 100%;
}
footer#site-footer ul.dropdown-up ul {
  bottom: 100%;
  top: auto;
  left: auto;
  background: rgba(255, 255, 255, 0);
  /* IE fix */
}
footer#site-footer ul.dropdown-up ul.right {
  /* Right orientated menu, like used in sitemap menu */
  right: 0;
}
footer#site-footer ul.dropdown-up ul.center {
  /* Center orientated menu, like used in content preview menu with a full width columns of 820px */
  right: auto;
  left: -400px;
  /* This is a half width value of 820px column. Adjust this value according to the column you're using */
}
footer#site-footer ul.dropdown .has-menu {
  position: relative;
}
footer#site-footer ul.dropdown-up ul .has-menu:before {
  font-family: 'FontAwesome';
  content: "\f0da";
  color: #ddd;
  font-size: 14px;
  position: absolute;
  top: 8px;
  right: 12px;
}
footer#site-footer ul.dropdown-up ul .has-menu.right:before {
  /* Arrow of submenu and it's orientation of the right aligned menu */
  content: "\f055";
}
footer#site-footer .dropdown-box {
  background: #fff;
  position: relative;
  padding: 10px 0;
  width: auto;
  z-index: 10;
}
footer#site-footer .dropdown-box:hover {
  z-index: 9999;
}
footer#site-footer .dropdown-box.lvl-1 {
  margin-bottom: 5px;
}
footer#site-footer .dropdown-box.lvl-2, footer#site-footer .dropdown-box.lvl-3 {
  margin: 0 0 -20px 20px;
}
footer#site-footer .dropdown-box.lvl-2.right {
  /* Submenu aligment for right orientated menu */
  margin: 0 20px -20px 0;
}
footer#site-footer .dropdown-box.lvl-1:after, footer#site-footer .dropdown-box.lvl-2:after, footer#site-footer .dropdown-box.lvl-3:after {
  background: #fff;
  content: "\00a0";
  display: block;
  height: 16px;
  width: 16px;
  position: absolute;
  top: auto;
}
footer#site-footer .dropdown-box.lvl-1:after {
  left: 26px;
  bottom: -7px;
  transform: rotate(-58deg) skew(0deg, 28deg);
  -moz-transform: rotate(-58deg) skew(0deg, 28deg);
  -webkit-transform: rotate(-58deg) skew(0deg, 28deg);
  -o-transform: rotate(-58deg) skew(0deg, 28deg);
  -ms-transform: rotate(-58deg) skew(0deg, 28deg);
}
footer#site-footer .dropdown-box.lvl-1.right:after {
  /* Bottom arrow aligment when using right orientated menu */
  left: auto;
  right: 26px;
}
footer#site-footer .dropdown-box.lvl-1.center:after {
  /* Bottom arrow aligment when using center orientated menu */
  left: 430px;
  /* This value centers the bottom arrow according to the width of the column we're using (usualy half of the parent's width + XXpx for left/right adjustment) */
  right: auto;
}
footer#site-footer .dropdown-box.lvl-2:after, footer#site-footer .dropdown-box.lvl-3:after {
  transform: rotate(32deg) skew(0deg, 28deg);
  -moz-transform: rotate(32deg) skew(0deg, 28deg);
  -webkit-transform: rotate(32deg) skew(0deg, 28deg);
  -o-transform: rotate(32deg) skew(0deg, 28deg);
  -ms-transform: rotate(32deg) skew(0deg, 28deg);
  left: -7px;
  bottom: 30px;
}
footer#site-footer .dropdown-box.lvl-2.right:after {
  left: auto;
  right: -7px;
  transform: rotate(212deg) skew(0deg, 28deg);
  -moz-transform: rotate(212deg) skew(0deg, 28deg);
  -webkit-transform: rotate(212deg) skew(0deg, 28deg);
  -o-transform: rotate(212deg) skew(0deg, 28deg);
  -ms-transform: rotate(212deg) skew(0deg, 28deg);
}
footer#site-footer ul.dropdown ul li.menu-title {
  font-size: 20px;
  padding: 24px 0 15px 26px;
  border-top: solid 1px #ccc;
  color: #bbb;
  text-transform: uppercase;
  font-weight: 300;
  white-space: nowrap;
}
footer#site-footer ul.dropdown ul li.menu-title.right {
  /* Title aligment when using right orientated menu */
  text-align: right;
  padding: 24px 26px 15px 0;
}
footer#site-footer ul.dropdown ul li.menu-title.center {
  /* Title aligment when using center orientated menu */
  text-align: center;
  padding: 24px 26px 15px 0;
}
footer#site-footer ul.dropdown ul li.menu-title span {
  font-size: 22px;
  font-family: 'FontAwesome';
  padding: 0 14px 0 0;
  font-weight: normal;
}
footer#site-footer ul.dropdown ul li.menu-title:hover,
footer#site-footer ul.dropdown ul li.content-full-width:hover,
footer#site-footer ul.dropdown ul li.no-hover:hover {
  background: none;
  color: #bbb;
}
footer#site-footer #inner-block-1 {
  position: relative;
  width: 426px;
  display: inline-block;
  white-space: normal;
  padding: 14px 26px 10px 26px;
}
footer#site-footer #inner-block-1 .content {
  display: inline-block;
  width: 190px;
}
footer#site-footer #inner-block-1 .title {
  font-size: 14px;
  color: #222;
  font-weight: 400;
  text-transform: uppercase;
}
footer#site-footer #inner-block-1 p {
  line-height: 16px;
  font-size: 11px;
  color: #bbb;
  padding-top: 6px;
}
footer#site-footer #inner-block-1 a.overlay-img {
  width: auto;
  height: 100%;
  float: left;
  margin-right: 20px;
  display: inline-block;
  position: relative;
}
footer#site-footer #inner-block-1 .overlay-icon {
  position: absolute;
  width: 160px;
  height: 93px;
  background: #222;
  opacity: 0;
  display: block;
  top: 0;
  left: 0;
  padding-top: 36px;
  color: #fff;
  text-align: center;
  font-size: 24px;
}
footer#site-footer #inner-block-1 .overlay-icon:hover {
  opacity: 0.8;
}
footer#site-footer #tabs label:first-of-type {
  z-index: 99;
}
footer#site-footer #tabs input#tab-1.tab-1-selector:checked ~ .tab-wrapper .tab-1,
footer#site-footer #tabs input#tab-2.tab-2-selector:checked ~ .tab-wrapper .tab-2,
footer#site-footer #tabs input#tab-3.tab-3-selector:checked ~ .tab-wrapper .tab-3,
footer#site-footer #tabs input#tab-4.tab-4-selector:checked ~ .tab-wrapper .tab-4,
footer#site-footer #tabs input#tab-1-wide.tab-1-wide-selector:checked ~ .tab-wrapper .tab-1-wide,
footer#site-footer #tabs input#tab-2-wide.tab-2-wide-selector:checked ~ .tab-wrapper .tab-2-wide,
footer#site-footer #tabs input#tab-3-wide.tab-3-wide-selector:checked ~ .tab-wrapper .tab-3-wide,
footer#site-footer #tabs input#tab-4-wide.tab-4-wide-selector:checked ~ .tab-wrapper .tab-4-wide {
  z-index: 999;
  -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";
  filter: alpha(opacity=100);
  opacity: 1;
  position: absolute;
}
footer#site-footer #tabs input:hover + label {
  background: #222;
  color: #fff;
  cursor: pointer;
  z-index: 999;
}
footer#site-footer #tabs input {
  position: absolute;
  z-index: 9999;
  width: 20px;
  height: 20px;
  left: auto;
  top: auto;
  bottom: -50px;
  opacity: 0;
  -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
  filter: alpha(opacity=0);
  cursor: pointer;
}
footer#site-footer #tabs label {
  background: #ccc;
  font-size: 12px;
  line-height: 24px;
  width: 24px;
  height: 24px;
  position: absolute;
  padding: 0;
  display: block;
  margin: 0 0 0 6px;
  color: #fff;
  text-align: center;
  font-weight: 400;
  top: auto;
  bottom: -50px;
}
footer#site-footer #tabs label.tab-label-1,
footer#site-footer #tabs input.first {
  right: 116px;
}
footer#site-footer #tabs label.tab-label-2,
footer#site-footer #tabs input.second {
  right: 86px;
}
footer#site-footer #tabs label.tab-label-3,
footer#site-footer #tabs input.third {
  right: 56px;
}
footer#site-footer #tabs label.tab-label-4,
footer#site-footer #tabs input.fourth {
  right: 26px;
}
footer#site-footer #tabs input:checked + label {
  background: #222;
  color: #fff;
  z-index: 9;
}
footer#site-footer #tabs .tab-wrapper > div {
  position: absolute;
  top: 0;
  left: 0;
  padding: 16px 26px 14px 26px;
  width: 100%;
  height: auto;
  z-index: 1;
  opacity: 0;
  min-width: 448px;
  /* Hack for Chrome first load, adjust this accordingly if changing the width of the tabs in below on .tab-wrapper */
}
footer#site-footer #tabs .tab-wrapper {
  position: relative;
  width: 520px;
  height: 280px;
  z-index: 5;
}
footer#site-footer #tabs .tab-wrapper.wide {
  /* Used for menu with wide content in tabs */
  width: auto;
  height: 320px;
}
footer#site-footer #tabs img {
  float: left;
  margin-right: 20px;
  display: inline-block;
}
footer#site-footer #tabs img.wide {
  width: 397px;
  height: 300px;
}
footer#site-footer #tabs .content {
  display: inline-block;
  width: 220px;
  float: right;
}
footer#site-footer #tabs .title {
  font-size: 16px;
  color: #222;
  display: block;
  text-transform: uppercase;
}
footer#site-footer #tabs p {
  line-height: 16px;
  color: #bbb;
}
footer#site-footer #tabs .small-info {
  font-style: italic;
  font-size: 10px;
  display: inline-block;
  padding-top: 18px;
  color: #bbb;
}
footer#site-footer #tabs .category {
  display: inline-block;
  font-style: italic;
  font-size: 10px;
  padding: 6px 0 8px 0;
  color: #bbb;
}
footer#site-footer #tabs a.overlay-img {
  width: 397px;
  height: 300px;
  float: left;
  margin-right: 26px;
  display: inline-block;
  position: relative;
}
footer#site-footer #tabs .overlay-text {
  position: absolute;
  width: 397px;
  height: 300px;
  background: #000;
  opacity: 0;
  display: block;
  top: 0;
  left: 0;
  padding-top: 130px;
  color: #fff;
  text-align: center;
  font-size: 12px;
}
footer#site-footer #tabs .overlay-text:hover {
  opacity: 0.8;
}
footer#site-footer #tabs .overlay-title {
  text-transform: uppercase;
  font-weight: 300;
  font-size: 18px;
  display: block;
}
footer#site-footer #tabs .overlay-text span {
  font-size: 34px;
  display: block;
  margin-bottom: 10px;
}
footer#site-footer iframe.video-medium {
  padding: 18px 26px 22px 26px;
}
footer#site-footer #form-1 {
  display: block;
  width: auto;
  height: auto;
  padding: 20px 26px;
}
footer#site-footer p.title {
  text-transform: uppercase;
  font-size: 16px;
  color: #222;
  padding-bottom: 4px;
}
footer#site-footer p.form-intro {
  color: #222;
  padding-bottom: 26px;
}
footer#site-footer p.form-intro:hover {
  color: #222;
}
footer#site-footer #form-1 .field {
  display: inline-block;
  width: 360px;
  position: relative;
  margin: 0 0 16px 0;
}
footer#site-footer #form-1 .field p {
  display: inline-block;
  width: 30px;
  height: 36px;
  text-align: center;
  background: #999;
  color: #fff;
  position: absolute;
  left: 0;
  top: 0;
  font-size: 14px;
  padding-top: 8px;
}
footer#site-footer #form-1 input.form-1, footer#site-footer #form-1 select, footer#site-footer #form-1 textarea {
  font-size: 12px;
  font-family: 'Source Sans Pro', sans-serif;
  font-weight: 400;
}
footer#site-footer #form-1 input.form-1 {
  width: 100%;
  padding: 0 10px 0 42px;
  height: 36px;
  border: solid 1px #ccc;
  outline: none;
}
footer#site-footer .field select {
  border: solid 1px #ccc;
  position: relative;
  margin: 0;
  width: 100%;
  color: #4f4e4c;
  font-family: Arial, Helvetica, sans-serif;
  padding: 9px 10px 8px 40px;
  -moz-appearance: none;
  -webkit-appearance: none;
  appearance: none;
  background: none;
  background-color: transparent;
  height: 36px;
}
footer#site-footer .disabled {
  display: none;
}
footer#site-footer #form-1 textarea {
  width: 100%;
  padding: 8px 24px 8px 8px;
  border: solid 1px #ccc;
  resize: none;
  max-height: 110px;
  height: 110px;
  overflow-y: hidden;
}
footer#site-footer #form-1 textarea:focus, footer#site-footer #form-1 input[type="text"]:focus, footer#site-footer #form-1 input[type="password"]:focus, footer#site-footer #form-1 input[type="datetime"]:focus, footer#site-footer #form-1 input[type="datetime-local"]:focus, footer#site-footer #form-1 input[type="date"]:focus, footer#site-footer #form-1 input[type="month"]:focus, footer#site-footer #form-1 input[type="time"]:focus, footer#site-footer #form-1 input[type="week"]:focus, footer#site-footer #form-1 input[type="number"]:focus, footer#site-footer #form-1 input[type="email"]:focus, footer#site-footer #form-1 input[type="url"]:focus, footer#site-footer #form-1 input[type="search"]:focus, footer#site-footer #form-1 input[type="tel"]:focus, footer#site-footer #form-1 input[type="color"]:focus, footer#site-footer #form-1 .uneditable-input:focus {
  height: 160px;
  max-height: 160px;
  border: solid 1px #222;
}
footer#site-footer #form-1 textarea:hover {
  border: solid 1px #222;
}
footer#site-footer #form-1 input.form-1:focus, footer#site-footer #form-1 input.form-1:hover {
  border: solid 1px #222;
  padding: 0 10px 0 42px;
  height: 36px;
}
footer#site-footer #form-1 select:focus, footer#site-footer #form-1 select:hover {
  border: solid 1px #222;
}
footer#site-footer input.send {
  display: inline-block;
  background: #222;
  color: #fff;
  width: auto;
  padding: 6px 28px;
  border: none;
  outline: none;
  font-size: 13px;
  margin: 0 30px 0 0;
  clear: none;
}
footer#site-footer input.send:hover {
  border: none;
  outline: none;
  background: #777;
  cursor: pointer;
}
footer#site-footer input.send:focus {
  border: none;
  outline: none;
}
footer#site-footer input[type="checkbox"].check {
  display: none;
}
footer#site-footer input[type="checkbox"].check + label {
  color: #bbb;
  font-size: 11px;
  display: inline-block;
  line-height: 18px;
  vertical-align: middle;
  font-weight: 300;
}
footer#site-footer input[type="checkbox"].check + label span {
  font-size: 18px;
}
footer#site-footer input[type="checkbox"].check + label span:before {
  display: inline-block;
  cursor: pointer;
  float: left;
  font-family: 'FontAwesome', sans-serif;
  content: "\f096";
  width: 24px;
  padding-top: 2px;
}
footer#site-footer input[type="checkbox"].check:checked + label span:before {
  font-family: 'FontAwesome', sans-serif;
  content: "\f046";
  color: #4f4e4c;
}
@media screen and (-webkit-min-device-pixel-ratio: 0) {
  footer#site-footer #arrow-select-svg {
    display: none;
  }
}
footer#site-footer x:-o-prefocus, footer#site-footer #arrow-select {
  display: none;
}
footer#site-footer #expanded-menu {
  width: 100%;
  text-align: left;
  background: white;
}
footer#site-footer #expanded-menu .wrapper {
  width: 1000px;
  margin: 0 auto;
  position: relative;
}
footer#site-footer #expanded-menu label {
  position: absolute;
  z-index: 999;
  display: inline-block;
  right: 1px;
  top: -33px;
  color: #999;
  cursor: pointer;
  font-size: 14px;
  font-family: 'FontAwesome';
}
footer#site-footer #expanded-menu label:after {
  content: "\f055";
}
footer#site-footer #expanded-menu label:hover {
  color: #fff;
}
footer#site-footer #expanded-menu input {
  display: none;
}
footer#site-footer #expanded-menu input:checked + label:after {
  content: "\f056";
}
footer#site-footer #expanded-menu input:checked + label:hover {
  color: #fff;
}
footer#site-footer #expanded-menu article {
  margin: 0;
  overflow: hidden;
  max-height: 0px;
  position: relative;
  z-index: 99;
  -webkit-transition: max-height 0.8s ease-in-out;
  -moz-transition: max-height 0.8s ease-in-out;
  -o-transition: max-height 0.8s ease-in-out;
  -ms-transition: max-height 0.8s ease-in-out;
  transition: max-height 0.8s ease-in-out;
}
footer#site-footer #expanded-menu input:checked ~ article {
  -webkit-transition: max-height 0.5s ease-in-out;
  -moz-transition: max-height 0.5s ease-in-out;
  -o-transition: max-height 0.5s ease-in-out;
  -ms-transition: max-height 0.5s ease-in-out;
  transition: max-height 0.5s ease-in-out;
}
footer#site-footer #expanded-menu input:checked ~ article.expanded {
  /* The height of expanded content menu. The height must have a value in order for transition to work */
  max-height: 1000px;
}
footer#site-footer article .title {
  display: block;
  font-size: 20px;
  color: #222;
  text-transform: uppercase;
  padding-bottom: 10px;
  margin-bottom: 20px;
  font-weight: 300;
  border-bottom: solid 1px #ccc;
}
footer#site-footer article p {
  line-height: 18px;
  color: #bbb;
}

/*
00 - Mobile device fixed
----------------------*/
.isMobile #main.none {
  -webkit-transition: none;
  transition: none;
}
.isMobile #nav-scroll, .isMobile #mailbox #nav-scroll, #mailbox .isMobile #nav-scroll {
  width: 250px;
}
.isMobile #mailbox #nav-scroll {
  width: 300px !important;
}
.isMobile .widget-chat .chat-body {
  margin-right: 0;
}
.isMobile #main::-webkit-scrollbar, .isMobile #nav-scroll::-webkit-scrollbar, .isMobile #mailbox #nav-scroll::-webkit-scrollbar, #mailbox .isMobile #nav-scroll::-webkit-scrollbar,
.isMobile #mailbox #nav-scroll::-webkit-scrollbar,
.isMobile .mm-menu > .mm-panel::-webkit-scrollbar,
.isMobile .ms-list::-webkit-scrollbar {
  background: transparent;
}
.isMobile #main::-webkit-scrollbar-thumb, .isMobile #nav-scroll::-webkit-scrollbar-thumb, .isMobile #mailbox #nav-scroll::-webkit-scrollbar-thumb, #mailbox .isMobile #nav-scroll::-webkit-scrollbar-thumb,
.isMobile #mailbox #nav-scroll::-webkit-scrollbar-thumb,
.isMobile .mm-menu > .mm-panel::-webkit-scrollbar-thumb,
.isMobile .ms-list::-webkit-scrollbar-thumb {
  background: transparent;
}
.isMobile #nav-scroll::-webkit-scrollbar, .isMobile #mailbox #nav-scroll::-webkit-scrollbar, #mailbox .isMobile #nav-scroll::-webkit-scrollbar,
.isMobile #mailbox #nav-scroll::-webkit-scrollbar,
.isMobile .mm-menu > .mm-panel::-webkit-scrollbar {
  width: auto;
}

@media all and (max-width: 767px) {
  #main {
    margin-left: 0px;
    top: 0;
  }

  .nav-main-xs {
    left: 0;
  }

  .navbar-right {
    float: right;
  }
  .navbar-right .dropdown a em {
    display: none;
    font-style: normal !important;
  }

  .navbar-nav {
    margin: 0;
  }
  .navbar-nav > li {
    float: left;
  }
  .navbar-nav > li > a {
    padding-bottom: 15px;
    padding-top: 15px;
  }

  #header .logo-area a.logo {
    width: 100%;
  }

  .modal-crop .col-md-8, .modal-crop .col-md-4 {
    padding: 0px;
  }

  .profile-cover {
    margin-right: 0;
    position: relative;
    text-align: center;
  }

  .profile-status {
    margin-top: 15px;
    position: relative;
  }

  .profile-avatar {
    left: 0;
    right: 0;
  }

  #content.after-mail-box {
    margin-left: 0px;
  }

  #main.in #content.after-mail-box {
    overflow: hidden;
  }

  #mailbox {
    margin-left: 0;
    z-index: 100;
    -webkit-transform: translate3d(-320px, 0, 0);
    -moz-transform: translate3d(-320px, 0, 0);
    -ms-transform: translate3d(-320px, 0, 0);
    -o-transform: translate3d(-320px, 0, 0);
    transform: translate3d(-320px, 0, 0);
  }

  #main.in #content.after-mail-box:after {
    opacity: 1;
    visibility: visible;
  }
  #main.in #mailbox {
    -webkit-transform: translate3d(0, 0, 0);
    -moz-transform: translate3d(0, 0, 0);
    -ms-transform: translate3d(0, 0, 0);
    -o-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
  }
  #main.in .mail-collapse {
    z-index: 100;
  }

  .widget-timeline li {
    margin-bottom: 45px;
  }
  .widget-timeline li.left section, .widget-timeline li.right section {
    margin: auto;
  }
  .widget-timeline li.left, .widget-timeline li.right {
    clear: all;
    float: none;
    width: 100%;
  }
  .widget-timeline li.left:before {
    border-bottom: 10px solid;
    border-bottom-color: inherit;
    border-left: 10px solid transparent;
    border-right: 10px solid transparent;
    left: 50%;
    margin-left: -10px;
    right: auto;
    top: -20px;
  }
  .widget-timeline li.right:before {
    border-bottom: 10px solid;
    border-bottom-color: inherit;
    border-left: 10px solid transparent;
    border-right: 10px solid transparent;
    left: 50%;
    margin-left: -10px;
    right: auto;
    top: -20px;
  }
  .widget-timeline li.right + li.left:before {
    top: -20px;
  }
  .widget-timeline li.left + li.right:before {
    top: -20px;
  }
  .widget-timeline li.left:after {
    left: 50%;
    margin-left: -6px;
    right: auto;
    top: -30px;
  }
  .widget-timeline li.right:after {
    left: 50%;
    margin-left: -6px;
    right: auto;
    top: -30px;
  }
  .widget-timeline li.right + li.left:after {
    top: -30px;
  }
  .widget-timeline li.left + li.right:after {
    top: -30px;
  }
}
@media (max-width: 991px) {
  #main {
    margin-left: 0px;
  }

  #header {
    border: none;
    height: auto;
    position: relative;
  }
  #header .logo-area {
    float: none;
    height: 55px;
    position: absolute;
    width: 100%;
  }
  #header a.logo {
    width: 250px;
  }
  #header .tools-bar {
    border: none;
    margin-left: 0;
    position: relative;
    z-index: 20;
  }
  #header ul.nav li a, #header .tools-bar a.icon-toolsbar {
    color: #FFF;
  }
  #header ul.nav li a:hover {
    color: #eeeeee !important;
  }
  #header ul.dropdown-menu li a:hover {
    color: #a1a1a1 !important;
  }
  #header ul.nav li a.h-seperate:before {
    border-left: 1px solid #009E7D;
  }
  #header ul li.h-seperate {
    border-color: #191c21 !important;
  }
  #header ul .btn-header-search {
    background-color: #191c21 !important;
    border-color: #191c21 !important;
    color: white !important;
  }

  .navbar-nav {
    display: inline-block;
  }

  .isMobile #main.none {
    -webkit-transition: -webkit-transform 0.5s;
    transition: transform 0.5s;
  }

  #nav {
    opacity: 0;
    -webkit-transform: translate3d(-100px, 0, 0);
    -moz-transform: translate3d(-100px, 0, 0);
    -ms-transform: translate3d(-100px, 0, 0);
    -o-transform: translate3d(-100px, 0, 0);
    transform: translate3d(-100px, 0, 0);
  }
  #nav.nav-collapse-out {
    opacity: 1;
    -webkit-transform: translate3d(0, 0, 0);
    -moz-transform: translate3d(0, 0, 0);
    -ms-transform: translate3d(0, 0, 0);
    -o-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
  }

  #main.nav-collapse-out {
    right: 0px;
    -webkit-transform: translate3d(250px, 0, 0);
    -moz-transform: translate3d(250px, 0, 0);
    -ms-transform: translate3d(250px, 0, 0);
    -o-transform: translate3d(250px, 0, 0);
    transform: translate3d(250px, 0, 0);
  }

  #content {
    padding: 15px 15px 0;
  }

  body.leftMenu .logo-area {
    display: block !important;
    background-color: #101215;
    border-bottom: 5px #262a33 solid;
  }
  body.leftMenu .logo-area .logo {
    background-image: none;
  }
  body.leftMenu #wrapper {
    margin-left: 50px;
  }
  body.nav-collapse #main {
    -webkit-transform: translate3d(0, 0, 0);
    -moz-transform: translate3d(0, 0, 0);
    -ms-transform: translate3d(0, 0, 0);
    -o-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
    right: 0;
  }
  body.nav-collapse.nav-collapse-in #header {
    -webkit-transform: translate3d(0, 0, 0);
    -moz-transform: translate3d(0, 0, 0);
    -ms-transform: translate3d(0, 0, 0);
    -o-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
    left: 0;
  }
  body.nav-collapse.nav-collapse-in #header .tools-bar {
    right: 0;
    margin-left: 0 !important;
  }
  body.nav-collapse.nav-collapse-in #main {
    -webkit-transform: translate3d(250px, 0, 0);
    -moz-transform: translate3d(250px, 0, 0);
    -ms-transform: translate3d(250px, 0, 0);
    -o-transform: translate3d(250px, 0, 0);
    transform: translate3d(250px, 0, 0);
    right: 0;
  }
}
@media (max-width: 979px) {
  .modal-open.page-overflow .page-container .navbar-fixed-top, .modal-open.page-overflow .page-container .navbar-fixed-bottom {
    overflow-y: visible;
  }

  .modal {
    bottom: auto;
    height: auto !important;
    left: 1%;
    margin: 0 !important;
    padding: 0 !important;
    right: 1%;
    top: 1%;
    width: auto !important;
  }
  .modal.container, .modal.modal-overflow {
    bottom: auto;
    height: auto !important;
    left: 1%;
    margin: 0 !important;
    padding: 0 !important;
    right: 1%;
    top: 1%;
    width: auto !important;
  }
  .modal.fade.in, .modal.container.fade.in, .modal.modal-overflow.fade.in {
    bottom: auto;
    top: 1%;
  }

  .modal-body, .modal-overflow .modal-body {
    height: auto !important;
    margin: 0;
    max-height: none !important;
    overflow: visible !important;
    position: static;
  }

  .modal-footer, .modal-overflow .modal-footer {
    position: static;
  }
}
@media (min-width: 1200px) {
  .modal.container {
    margin-left: -585px;
    width: 1170px;
  }
}
@media all and (max-width: 550px) {
  body.leftMenu #wrapper {
    margin-left: 0 !important;
  }

  #wrapper {
    margin-left: 0px;
  }

  .toggle-menu {
    display: none;
  }

  #header .logo-area a.logo {
    background-size: 90px 23px;
    width: 190px;
  }
  #header .tools-bar a.icon-toolsbar {
    padding: 0 15px;
  }

  .widget-top-search form h2 {
    margin-bottom: 10px;
    font-size: 2.5em;
  }
}
.site-logo {
  background: url(../img/logo_.png) no-repeat center center;
  display: block;
  height: 75px;
  position: relative;
}

@media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
  #header .logo-area a.logo {
    background: url(../img/logo2x.png) no-repeat center center;
    background-size: 120px 30px;
  }

  .site-logo {
    background: url(../img/logo_2x.png) no-repeat center center;
    background-size: 75px 75px;
  }
}
div.color-themes {
  cursor: pointer;
  text-indent: -9999px;
  display: inline-block;
  margin-right: 3px;
  margin-bottom: 3px;
  width: 35px;
  height: 30px;
  border: 2px rgba(255, 255, 255, 0.5) solid;
}
div.col1 {
  background: #697687;
}
div.col2 {
  background: #FBBA52;
}
div.col3 {
  background: #008192;
}
div.col4 {
  background: #384A63;
}
div.col5 {
  background: #1B1E24;
}
