<?php
/**
 * Sticky CSS extender
 * 
 */

?>

/* ***************************************
	STICKY FOOTER
*****************************************/
.elgg-page {
	min-height: 100%;
}
.elgg-page-body {
	overflow: auto;
	padding-bottom: 80px; /* must be same height as the footer */
}
.elgg-page-footer {
	position: relative;
	margin-top: -80px; /* negative value of footer height */
	height: 80px;
    background: #F0F0F0; /* footer color example */
	clear: both;
}
/* Opera Fix */
body:before {
	content:"";
	height: 100%;
	float: left;
	width: 0;
	margin-top: -32767px;/
}
/* ***************************************
	LAYOUT
*****************************************/
.elgg-page-footer .elgg-inner {
	width: 990px;
	margin: 0 auto;
	padding: 5px 0;
}