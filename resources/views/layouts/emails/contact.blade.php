<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width"/>
	<style>
/**********************************************
* Ink v1.0.5 - Copyright 2013 ZURB Inc        *
**********************************************/

/* Client-specific Styles & Reset */

#outlook a { 
  padding:0; 
} 

body{ 
  width:100% !important; 
  min-width: 100%;
  -webkit-text-size-adjust:100%; 
  -ms-text-size-adjust:100%; 
  margin:0; 
  padding:0;
}

.ExternalClass { 
  width:100%;
} 

.ExternalClass, 
.ExternalClass p, 
.ExternalClass span, 
.ExternalClass font, 
.ExternalClass td, 
.ExternalClass div { 
  line-height: 100%; 
} 

#backgroundTable { 
  margin:0; 
  padding:0; 
  width:100% !important; 
  line-height: 100% !important; 
}

img { 
  outline:none; 
  text-decoration:none; 
  -ms-interpolation-mode: bicubic;
  width: auto;
  max-width: 100%; 
  float: left; 
  clear: both; 
  display: block;
}

center {
  width: 100%;
  min-width: 580px;
}

a img { 
  border: none;
}

p {
  margin: 0 0 0 10px;
}

table {
  border-spacing: 0;
  border-collapse: collapse;
}

td { 
  word-break: break-word;
  -webkit-hyphens: auto;
  -moz-hyphens: auto;
  hyphens: auto;
  border-collapse: collapse !important; 
}

table, tr, td {
  padding: 0;
  vertical-align: top;
  text-align: left;
}

hr {
  color: #d9d9d9; 
  background-color: #d9d9d9; 
  height: 1px; 
  border: none;
}

/* Responsive Grid */

table.body {
  height: 100%;
  width: 100%;
}

table.container {
  width: 580px;
  margin: 0 auto;
  text-align: inherit;
}

table.row { 
  padding: 0px; 
  width: 100%;
  position: relative;
}

table.container table.row {
  display: block;
}

td.wrapper {
  padding: 10px 20px 0px 0px;
  position: relative;
}

table.columns,
table.column {
  margin: 0 auto;
}

table.columns td,
table.column td {
  padding: 0px 0px 10px; 
}

table.columns td.sub-columns,
table.column td.sub-columns,
table.columns td.sub-column,
table.column td.sub-column {
  padding-right: 10px;
}

td.sub-column, td.sub-columns {
  min-width: 0px;
}

table.row td.last,
table.container td.last {
  padding-right: 0px;
}

table.one { width: 30px; }
table.two { width: 80px; }
table.three { width: 130px; }
table.four { width: 180px; }
table.five { width: 230px; }
table.six { width: 280px; }
table.seven { width: 330px; }
table.eight { width: 380px; }
table.nine { width: 430px; }
table.ten { width: 480px; }
table.eleven { width: 530px; }
table.twelve { width: 580px; }

table.one center { min-width: 30px; }
table.two center { min-width: 80px; }
table.three center { min-width: 130px; }
table.four center { min-width: 180px; }
table.five center { min-width: 230px; }
table.six center { min-width: 280px; }
table.seven center { min-width: 330px; }
table.eight center { min-width: 380px; }
table.nine center { min-width: 430px; }
table.ten center { min-width: 480px; }
table.eleven center { min-width: 530px; }
table.twelve center { min-width: 580px; }

table.one .panel center { min-width: 10px; }
table.two .panel center { min-width: 60px; }
table.three .panel center { min-width: 110px; }
table.four .panel center { min-width: 160px; }
table.five .panel center { min-width: 210px; }
table.six .panel center { min-width: 260px; }
table.seven .panel center { min-width: 310px; }
table.eight .panel center { min-width: 360px; }
table.nine .panel center { min-width: 410px; }
table.ten .panel center { min-width: 460px; }
table.eleven .panel center { min-width: 510px; }
table.twelve .panel center { min-width: 560px; }

.body .columns td.one,
.body .column td.one { width: 8.333333%; }
.body .columns td.two,
.body .column td.two { width: 16.666666%; }
.body .columns td.three,
.body .column td.three { width: 25%; }
.body .columns td.four,
.body .column td.four { width: 33.333333%; }
.body .columns td.five,
.body .column td.five { width: 41.666666%; }
.body .columns td.six,
.body .column td.six { width: 50%; }
.body .columns td.seven,
.body .column td.seven { width: 58.333333%; }
.body .columns td.eight,
.body .column td.eight { width: 66.666666%; }
.body .columns td.nine,
.body .column td.nine { width: 75%; }
.body .columns td.ten,
.body .column td.ten { width: 83.333333%; }
.body .columns td.eleven,
.body .column td.eleven { width: 91.666666%; }
.body .columns td.twelve,
.body .column td.twelve { width: 100%; }

td.offset-by-one { padding-left: 50px; }
td.offset-by-two { padding-left: 100px; }
td.offset-by-three { padding-left: 150px; }
td.offset-by-four { padding-left: 200px; }
td.offset-by-five { padding-left: 250px; }
td.offset-by-six { padding-left: 300px; }
td.offset-by-seven { padding-left: 350px; }
td.offset-by-eight { padding-left: 400px; }
td.offset-by-nine { padding-left: 450px; }
td.offset-by-ten { padding-left: 500px; }
td.offset-by-eleven { padding-left: 550px; }

td.expander {
  visibility: hidden;
  width: 0px;
  padding: 0 !important;
}

table.columns .text-pad,
table.column .text-pad {
  padding-left: 10px;
  padding-right: 10px;
}

table.columns .left-text-pad,
table.columns .text-pad-left,
table.column .left-text-pad,
table.column .text-pad-left {
  padding-left: 10px;
}

table.columns .right-text-pad,
table.columns .text-pad-right,
table.column .right-text-pad,
table.column .text-pad-right {
  padding-right: 10px;
}

/* Block Grid */

.block-grid {
  width: 100%;
  max-width: 580px;
}

.block-grid td {
  display: inline-block;
  padding:10px;
}

.two-up td {
  width:270px;
}

.three-up td {
  width:173px;
}

.four-up td {
  width:125px;
}

.five-up td {
  width:96px;
}

.six-up td {
  width:76px;
}

.seven-up td {
  width:62px;
}

.eight-up td {
  width:52px;
}

/* Alignment & Visibility Classes */

table.center, td.center {
  text-align: center;
}

h1.center,
h2.center,
h3.center,
h4.center,
h5.center,
h6.center {
  text-align: center;
}

span.center {
  display: block;
  width: 100%;
  text-align: center;
}

img.center {
  margin: 0 auto;
  float: none;
}

.show-for-small,
.hide-for-desktop {
  display: none;
}

/* Typography */

body, table.body, h1, h2, h3, h4, h5, h6, p, td { 
  color: #222222;
  font-family: "Helvetica", "Arial", sans-serif; 
  font-weight: normal; 
  padding:0; 
  margin: 0;
  text-align: left; 
  line-height: 1.3;
}

h1, h2, h3, h4, h5, h6 {
  word-break: normal;
}

h1 {font-size: 40px;}
h2 {font-size: 36px;}
h3 {font-size: 32px;}
h4 {font-size: 28px;}
h5 {font-size: 24px;}
h6 {font-size: 20px;}
body, table.body, p, td {font-size: 14px;line-height:19px;}

p.lead, p.lede, p.leed {
  font-size: 18px;
  line-height:21px;
}

p { 
  margin-bottom: 10px;
}

small {
  font-size: 10px;
}

a {
  color: #2ba6cb; 
  text-decoration: none;
}

a:hover { 
  color: #2795b6 !important;
}

a:active { 
  color: #2795b6 !important;
}

a:visited { 
  color: #2ba6cb !important;
}

h1 a, 
h2 a, 
h3 a, 
h4 a, 
h5 a, 
h6 a {
  color: #2ba6cb;
}

h1 a:active, 
h2 a:active,  
h3 a:active, 
h4 a:active, 
h5 a:active, 
h6 a:active { 
  color: #2ba6cb !important; 
} 

h1 a:visited, 
h2 a:visited,  
h3 a:visited, 
h4 a:visited, 
h5 a:visited, 
h6 a:visited { 
  color: #2ba6cb !important; 
} 

/* Panels */

.panel {
  background: #f2f2f2;
  border: 1px solid #d9d9d9;
  padding: 10px !important;
}

.sub-grid table {
  width: 100%;
}

.sub-grid td.sub-columns {
  padding-bottom: 0;
}

/* Buttons */

table.button,
table.tiny-button,
table.small-button,
table.medium-button,
table.large-button {
  width: 100%;
  overflow: hidden;
}

table.button td,
table.tiny-button td,
table.small-button td,
table.medium-button td,
table.large-button td {
  display: block;
  width: auto !important;
  text-align: center;
  background: #2ba6cb;
  border: 1px solid #2284a1;
  color: #ffffff;
  padding: 8px 0;
}

table.tiny-button td {
  padding: 5px 0 4px;
}

table.small-button td {
  padding: 8px 0 7px;
}

table.medium-button td {
  padding: 12px 0 10px;
}

table.large-button td {
  padding: 21px 0 18px;
}

table.button td a,
table.tiny-button td a,
table.small-button td a,
table.medium-button td a,
table.large-button td a {
  font-weight: bold;
  text-decoration: none;
  font-family: Helvetica, Arial, sans-serif;
  color: #ffffff;
  font-size: 16px;
}

table.tiny-button td a {
  font-size: 12px;
  font-weight: normal;
}

table.small-button td a {
  font-size: 16px;
}

table.medium-button td a {
  font-size: 20px;
}

table.large-button td a {
  font-size: 24px;
}

table.button:hover td,
table.button:visited td,
table.button:active td {
  background: #2795b6 !important;
}

table.button:hover td a,
table.button:visited td a,
table.button:active td a {
  color: #fff !important;
}

table.button:hover td,
table.tiny-button:hover td,
table.small-button:hover td,
table.medium-button:hover td,
table.large-button:hover td {
  background: #2795b6 !important;
}

table.button:hover td a,
table.button:active td a,
table.button td a:visited,
table.tiny-button:hover td a,
table.tiny-button:active td a,
table.tiny-button td a:visited,
table.small-button:hover td a,
table.small-button:active td a,
table.small-button td a:visited,
table.medium-button:hover td a,
table.medium-button:active td a,
table.medium-button td a:visited,
table.large-button:hover td a,
table.large-button:active td a,
table.large-button td a:visited {
  color: #ffffff !important; 
}

table.secondary td {
  background: #e9e9e9;
  border-color: #d0d0d0;
  color: #555;
}

table.secondary td a {
  color: #555;
}

table.secondary:hover td {
  background: #d0d0d0 !important;
  color: #555;
}

table.secondary:hover td a,
table.secondary td a:visited,
table.secondary:active td a {
  color: #555 !important;
}

table.success td {
  background: #5da423;
  border-color: #457a1a;
}

table.success:hover td {
  background: #457a1a !important;
}

table.alert td {
  background: #c60f13;
  border-color: #970b0e;
}

table.alert:hover td {
  background: #970b0e !important;
}

table.radius td {
  -webkit-border-radius: 3px;
  -moz-border-radius: 3px;
  border-radius: 3px;
}

table.round td {
  -webkit-border-radius: 500px;
  -moz-border-radius: 500px;
  border-radius: 500px;
}

/* Outlook First */

body.outlook p {
  display: inline !important;
}

/*  Media Queries */

@media only screen and (max-width: 600px) {

  table[class="body"] img {
    width: auto !important;
    height: auto !important;
  }

  table[class="body"] center {
    min-width: 0 !important;
  }

  table[class="body"] .container {
    width: 95% !important;
  }

  table[class="body"] .row {
    width: 100% !important;
    display: block !important;
  }

  table[class="body"] .wrapper {
    display: block !important;
    padding-right: 0 !important;
  }

  table[class="body"] .columns,
  table[class="body"] .column {
    table-layout: fixed !important;
    float: none !important;
    width: 100% !important;
    padding-right: 0px !important;
    padding-left: 0px !important;
    display: block !important;
  }

  table[class="body"] .wrapper.first .columns,
  table[class="body"] .wrapper.first .column {
    display: table !important;
  }

  table[class="body"] table.columns td,
  table[class="body"] table.column td {
    width: 100% !important;
  }

  table[class="body"] .columns td.one,
  table[class="body"] .column td.one { width: 8.333333% !important; }
  table[class="body"] .columns td.two,
  table[class="body"] .column td.two { width: 16.666666% !important; }
  table[class="body"] .columns td.three,
  table[class="body"] .column td.three { width: 25% !important; }
  table[class="body"] .columns td.four,
  table[class="body"] .column td.four { width: 33.333333% !important; }
  table[class="body"] .columns td.five,
  table[class="body"] .column td.five { width: 41.666666% !important; }
  table[class="body"] .columns td.six,
  table[class="body"] .column td.six { width: 50% !important; }
  table[class="body"] .columns td.seven,
  table[class="body"] .column td.seven { width: 58.333333% !important; }
  table[class="body"] .columns td.eight,
  table[class="body"] .column td.eight { width: 66.666666% !important; }
  table[class="body"] .columns td.nine,
  table[class="body"] .column td.nine { width: 75% !important; }
  table[class="body"] .columns td.ten,
  table[class="body"] .column td.ten { width: 83.333333% !important; }
  table[class="body"] .columns td.eleven,
  table[class="body"] .column td.eleven { width: 91.666666% !important; }
  table[class="body"] .columns td.twelve,
  table[class="body"] .column td.twelve { width: 100% !important; }

  table[class="body"] td.offset-by-one,
  table[class="body"] td.offset-by-two,
  table[class="body"] td.offset-by-three,
  table[class="body"] td.offset-by-four,
  table[class="body"] td.offset-by-five,
  table[class="body"] td.offset-by-six,
  table[class="body"] td.offset-by-seven,
  table[class="body"] td.offset-by-eight,
  table[class="body"] td.offset-by-nine,
  table[class="body"] td.offset-by-ten,
  table[class="body"] td.offset-by-eleven {
    padding-left: 0 !important;
  }

  table[class="body"] table.columns td.expander {
    width: 1px !important;
  }

  table[class="body"] .right-text-pad,
  table[class="body"] .text-pad-right {
    padding-left: 10px !important;
  }

  table[class="body"] .left-text-pad,
  table[class="body"] .text-pad-left {
    padding-right: 10px !important;
  }

  table[class="body"] .hide-for-small,
  table[class="body"] .show-for-desktop {
    display: none !important;
  }

  table[class="body"] .show-for-small,
  table[class="body"] .hide-for-desktop {
    display: inherit !important;
  }
}

  </style>
  <style>

    table.facebook td {
      background: #3b5998;
      border-color: #2d4473;
    }

    table.facebook:hover td {
      background: #2d4473 !important;
    }

    table.twitter td {
      background: #00acee;
      border-color: #0087bb;
    }

    table.twitter:hover td {
      background: #0087bb !important;
    }

    table.google-plus td {
      background-color: #DB4A39;
      border-color: #CC0000;
    }

    table.google-plus:hover td {
      background: #CC0000 !important;
    }

    .template-label {
      color: #ffffff;
      font-weight: bold;
      font-size: 11px;
    }

    .callout .panel {
      background: #ECF8FF;
      border-color: #b9e5ff;
    }

    .header {
      /*background: #999999; */
      background: linear-gradient(to bottom, #555555 0%,#000 100%);
    }

    .footer .wrapper {
      background: #ebebeb;
    }

    .footer h5 {
      padding-bottom: 10px;
    }

    table.columns .text-pad {
      padding-left: 10px;
      padding-right: 10px;
    }

    table.columns .left-text-pad {
      padding-left: 10px;
    }

    table.columns .right-text-pad {
      padding-right: 10px;
    }

    @media only screen and (max-width: 600px) {

      table[class="body"] .right-text-pad {
        padding-left: 10px !important;
      }

      table[class="body"] .left-text-pad {
        padding-right: 10px !important;
      }
    }

  </style>


  <!-- Smarty-->
  <style>

/** Portfolio
 **************************************************************** **/
/* do not move from here - we rewrite this below */
.item-box-desc h2,
.item-box-desc h3,
.item-box-desc h4,
.item-box-desc h5 {
  font-size:18px;
  line-height:21px;
  margin:0;
  padding:0;
}
.item-box .owl-carousel {
  margin-top:0px !important;
}



#portfolio {
  overflow:hidden;
}
#portfolio h2,
#portfolio h3 {
  font-size:18px;
  line-height:20px;
  margin:0;
  color:#111;
}

#portfolio .portfolio-item h2,
#portfolio .portfolio-item h3 {
  text-overflow:ellipsis;
  white-space: nowrap;
}


#portfolio div.col-md-3 h2,
#portfolio div.col-md-3 h3 {
  font-size:18px;
  line-height:18px;
}
#portfolio div.col-md-5th h2,
#portfolio div.col-md-5th h3 {
  font-size:15px;
  line-height:15px;

  overflow:hidden;
  text-overflow:ellipsis;
  white-space: nowrap;
}
#portfolio div.col-md-2 h2,
#portfolio div.col-md-2 h3 {
  font-size:13px;
  line-height:13px;
}
#portfolio div.col-md-2 .item-box-desc,
#portfolio div.col-md-2 .item-box-desc {
  padding:20px 6px 0 15px !important;
}
  section.dark #portfolio h2,
  section.dark #portfolio h3 {
    color:#fff;
  }
#portfolio.portfolio-title-over div.col-md-2 .item-box .item-hover .inner {
  margin-top:-20px !important;
}

#portfolio div.col-md-2 ul.categories>li>a,
#portfolio div.col-md-5th ul.categories>li>a {
  font-size:11px;
  line-height:11px;
}


/* dark section */
section.dark#portfolio h2,
section.dark #portfolio h2,
section.dark#portfolio h3,
section.dark #portfolio h3 {
  color:#fff !important;
}

#portfolio .mix-grid>.row.mix {
  border-bottom:rgba(0,0,0,0.1) 1px solid;
  margin-bottom:60px;
  padding-bottom:60px;
}
#portfolio .mix-grid>.row.mix:last-child {
  border-bottom:0;
}
#portfolio .mix-grid>.row>div:last-child {
  margin-bottom:0 !important;
}
#portfolio .item-box-desc h2,
#portfolio .item-box-desc h3 {
  font-size:18px;
  line-height:20px;
}

#portfolio .item-box-overlay-title {
  display:block;
  position:absolute;
  left:0; right:0;
  bottom:0;
  padding:8px;
  color:#fff;
  background-color:rgba(0,0,0,0.6);
  color:#fff;
  z-index:100;
}
#portfolio .item-box-overlay-title h2,
#portfolio .item-box-overlay-title h3,
#portfolio .item-box-overlay-title h4,
#portfolio .item-box-overlay-title a {
  color:#fff;
}
#portfolio .item-box-overlay-title a:hover {
  color:#fff !important;
}
#portfolio .controlls-over .owl-pagination {
  bottom:auto;
  top:10px;
  right:10px;
  left:auto;
  width:auto;
}

@media only screen and (max-width: 992px) {
  #portfolio div.col-md-5>h2,
  #portfolio div.col-md-5>h3 {
    margin-top:30px;
  }
}
@media only screen and (max-width: 480px) {
  #portfolio.portfolio-title-over .item-box .item-hover .inner {
    margin-top:-40px !important;
  }
}

  /** Gutter
   ****************** **/
  #portfolio.portfolio-gutter .item-box {
    margin-bottom:30px;
  }

  #portfolio.portfolio-nogutter .row>div,
  #portfolio.portfolio-nogutter .item-box {
    padding: 0 !important;
    margin: 0 !important;
  }

  #portfolio.portfolio-gutter .item-box .item-box-desc  {
    margin-bottom:0 !important;
    padding-bottom:0 !important;
  }


  /** Isotope Portfolio
   ****************** **/
  #portfolio.portfolio-isotope {
    display:block;
    margin:auto;
    width:100%;
  }
  #portfolio.portfolio-isotope .item-box-desc {
    margin-bottom:0;
  }
  #portfolio.portfolio-isotope-3 .portfolio-item.has-title .inner,
  #portfolio.portfolio-isotope-4 .portfolio-item.has-title .inner,
  #portfolio.portfolio-isotope-5 .portfolio-item.has-title .inner {
    margin-top:-36px !important;
  }
  #portfolio.portfolio-isotope-6 .portfolio-item.has-title .inner {
    margin-top:-26px !important;
  }

  /* 2 columns */
  #portfolio.portfolio-isotope-2 .portfolio-item {
    margin: 0 20px 20px 0;
    float:left;
  }
    #portfolio.portfolio-isotope-2 .item-box-desc {
      padding:20px;
    }

  /* 3 columns */
  #portfolio.portfolio-isotope-3 .portfolio-item {
    margin: 0 15px 15px 0;
  }
    #portfolio.portfolio-isotope-3 .item-box-desc {
      padding:20px;
    }

  /* 4 columns */
  #portfolio.portfolio-isotope-4 .portfolio-item {
    margin: 0 12px 12px 0;
  }
    #portfolio.portfolio-isotope-4 .portfolio-item h3,
    #portfolio.portfolio-isotope-4 .portfolio-item h4 {
      font-size:17px;
      line-height:17px;
    }
    #portfolio.portfolio-isotope-4 .item-box-desc {
      padding:20px 10px 20px 10px;
    }

  /* 5 columns */
  #portfolio.portfolio-isotope-5 .portfolio-item {
    margin: 0 10px 10px 0;
  }
    #portfolio.portfolio-isotope-5 .portfolio-item  h3,
    #portfolio.portfolio-isotope-5 .portfolio-item  h4 {
      font-size:16px;
      line-height:16px;
    }
    #portfolio.portfolio-isotope-5 .item-box-desc {
      padding:20px 10px 20px 10px;
    }

  /* 6 columns */
  #portfolio.portfolio-isotope-6 .portfolio-item {
    margin: 0 6px 6px 0;
  }
    #portfolio.portfolio-isotope-6 .portfolio-item h3,
    #portfolio.portfolio-isotope-6 .portfolio-item h4 {
      font-size:15px;
      line-height:15px;
    }
    #portfolio.portfolio-isotope-6 .item-box-desc {
      padding:20px 10px 20px 10px;
    }

  #portfolio.portfolio-isotope.portfolio-nogutter .portfolio-item {
    margin:0;
  }




  /** Ajax Portfolio
   ****************** **/
  #portfolio_ajax_container {
    position:relative;
  }
  #portfolio_ajax_container .overlay>span {
    position: absolute;
    top: 50%; left: 50%;
    width: 68px; height: 68px;
    line-height: 76px;
    text-align: center;

    margin: -34px 0 0 -34px;
    background-color: rgba(0,0,0,0.8);

    -webkit-border-radius: 3px;
       -moz-border-radius: 3px;
        border-radius: 3px;
  }
  #portfolio_ajax_container .overlay>span>i {
    color: #fff;
    font-size: 30px;
  }
  div.portfolio-ajax-page {
    margin-bottom:80px;
    padding:10px 0;
  }
  div.portfolio-ajax-page header {
    position:relative;
  }
  div.portfolio-ajax-page header>ul {
    margin:0;
    position:absolute;
    right:0;
    top:50%;
    margin-top:-10px;
  }
  div.portfolio-ajax-page header>ul a {
    font-size:18px;
  }
  div.portfolio-ajax-page header>ul a.portfolio-ajax-close {
    margin-left:20px;
  }
  div.portfolio-ajax-page header a {
    color:#888;
    text-decoration:none;
  }
  div.portfolio-ajax-page header a:hover {
    color:#000;
  }
  div.portfolio-ajax-page header h2,
  div.portfolio-ajax-page header h3 {
    margin:0;
  }

  section.dark  .portfolio-ajax-page header a:hover {
    color:#fff;
  }

  @media only screen and (max-width: 768px) {
    div.portfolio-ajax-page header {
      text-align:center;
    }
    div.portfolio-ajax-page header>ul {
      position:relative;
      margin-top:30px;
    }
    div.portfolio-ajax-page header h2,
    div.portfolio-ajax-page header h3 {
      font-size:24px;
      line-height:24px;
    }
  }




  /** Portfolio Single
   ****************** **/
  ul.portfolio-detail-list span {
    display: inline-block;
    font-weight: bold;
    width: 150px;
  }
  ul.portfolio-detail-list span>i {
    position: relative;
    top: 1px;
    width: 14px;
    text-align: center;
    margin-right: 7px;
  }






/** Item Box
 **************************************************************** **/
.item-box {
  overflow:hidden;
  margin:0;
  position:relative;
  box-shadow:rgba(0,0,0,0.1) 0 0 5px;


  -webkit-border-radius:0;
     -moz-border-radius:0;
      border-radius:0;
}
.mix-grid .item-box,
#portfolio .item-box {
  box-shadow:none;
}
  .item-box.fullwidth {
    max-width:100%;
  }
  section.alternate .item-box {
    background-color:rgba(0,0,0,0.05);
  }


.item-box figure {
  width:100%;
  display:block;
  margin-bottom:0;
  overflow:hidden;
  position:relative;
  text-align:center;
}
  .item-box.fixed-box figure img {
    width:100%;
    height:auto;
  }

.item-box-desc {
  padding:30px 20px 20px 20px;
  overflow:hidden;
  margin-bottom:10px;
  text-align:left !important;
}
.item-box-desc p {
  margin-top:20px;
  display:block;
  overflow:hidden;
  text-overflow:ellipsis;
  /*white-space: nowrap;*/
}
  .item-box.fixed-box .item-box-desc p {
    height:98px;
  }
.item-box-desc h2,
.item-box-desc h3,
.item-box-desc h4,
.item-box-desc h5 {
  padding:0; margin:0;
}
.item-box .item-box-desc small {
  display:block;
}

.item-box.fixed-box .item-box-desc {
  height:256px;
}

.item-box.fixed-box figure {
  max-height:263px;
}

.item-box .socials {
  border-top:#eee 1px solid;
  text-align:center;
  display:block;
}


/* hover */
.item-box .item-hover {
  opacity: 0;
  filter: alpha(opacity=0);
  position:absolute;
  left:0; right:0; top:0; bottom:0;
  text-align:center;
  color:#fff;

  -webkit-transition: all 0.3s;
     -moz-transition: all 0.3s;
     -o-transition: all 0.3s;
      transition: all 0.3s;
}
.item-box .item-hover,
.item-box .item-hover button,
.item-box .item-hover a {
  color:#fff;
}
.item-box .item-hover .inner {
  position:absolute;
  display:block;
  left:0; right:0; top:50%;
  margin-top:-10px;
  margin-bottom:0;
  width:100%;
  z-index:100;
  line-height:23px;
}
.item-box:hover .item-hover {
  opacity: 1;
  filter: alpha(opacity=100);
}

.item-box .item-hover .inner .ico-rounded>span {
  color:#666;
  background-color:#fff;
  width:50px;
  height:50px;
  line-height:50px !important;
  margin:-20px  5px 0 5px;

  -webkit-transition: all 0.3s;
     -moz-transition: all 0.3s;
     -o-transition: all 0.3s;
      transition: all 0.3s;

  -webkit-border-bottom-right-radius: 20px;
    -webkit-border-top-left-radius: 20px;
    -moz-border-radius-bottomright: 20px;
      -moz-border-radius-topleft: 20px;
      border-bottom-right-radius: 20px;
        border-top-left-radius: 20px;
}


.nav-pills>li.active>a,
.nav-pills>li.active>a:hover,
.nav-pills>li.active>a:focus {
  color:#333;
  background-color:rgba(0,0,0,0.07);
}


  </style>
  <!-- /Smarty -->

</head>
<body>
	<table class="body">
		<tr>
			<td class="center" align="center" valign="top">
        <center>


          <table class="row header">
            <tr>
              <td class="center" align="center">
                <center>

                  <table class="container">
                    <tr>
                      <td class="wrapper last">

                        <table class="twelve columns">
                          <tr>

                            <td class="six sub-columns">
                              <a href="http://texasracquetball.org/"><img src="{{ asset('images/logos/TXRA_full_logo.png')}}" style="height:80px;display:inline;" alt="" /></a>
                            </td>
                            <td class="six sub-columns last" align="right" style="text-align:right; vertical-align:middle;">
                              <span class="template-label"></span>
                            </td>
                            <td class="expander"></td>

                          </tr>
                        </table>

                      </td>
                    </tr>
                  </table>

                </center>
              </td>
            </tr>
          </table>
          <br>

          <table class="container">
            <tr>
              <td>

                <!-- content start -->
                <table class="row">
                  <tr>
                    <td class="wrapper last">

                      <table class="twelve columns">
                        <tr>
                          <td>
                            <h2>@yield('greeting')</h2>
                            <br/>
                						<p class="lead">
                              @yield('lead')
                            </p>
                            @yield('hero')
                          </td>
                          <td class="expander"></td>
                        </tr>
                      </table>

                    </td>
                  </tr>
                </table>

                <table class="row">
                  <tr>
                    <td class="wrapper last">

                      <table class="twelve columns">
                        <tr>
                          <td class="center">
                            @yield('content')

                          </td>
                          <td class="expander"></td>
                        </tr>
                      </table>

                    </td>
                  </tr>
                </table>  
                <table class="row">
                  <tr>
                    <td class="wrapper last">

                      <table class="twelve columns">
                        <tr>
                          <td class="">
                            @yield('footer')
                          </td>
                          <td class="expander"></td>
                        </tr>
                      </table>

                    </td>
                  </tr>
                </table> 

                <br/>
                <table class="row footer">
                  <tr>
                    <td class="wrapper">

                      <table class="twelve columns">                        
                        <tr>
                          <td class="last left-text-pad">
                            <h6>Contact Info:</h6>
                              @yield('contact')
                          </td>
                          <td class="expander"></td>
                        </tr>
                      </table>

                    </td>
                  </tr>
                </table>

                <!-- container end below -->
              </td>
            </tr>
          </table>

        </center>
			</td>
		</tr>
	</table>
</body>
</html>
