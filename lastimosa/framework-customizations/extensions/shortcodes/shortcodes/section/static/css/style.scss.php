/*Vertical Offsets
 * no longer used since BS4
 * to be deleted
@for $i from 1 through 8 {
	$i: $i * 15;
	.vo-top-#{$i} {
		padding-top: #{$i}px;
	}
	
	.vo-bottom-#{$i} {
		padding-bottom: #{$i}px;
	}
}*/

section {
	.content-wrap {
        padding: 60px 0;
    }
	.full-border {
	  border-top:1px solid #ccc;
	  border-bottom:1px solid #ccc;
	  border-left:1px solid #ccc;
	  border-right:1px solid #ccc;
	}
	.top-bottom-border {
	  border-top:1px solid #ccc;
	  border-bottom:1px solid #ccc;
	}
	.left-right-border {
	  border-left:1px solid #ccc;
	  border-right:1px solid #ccc;
	}
	.top-border {
	  border-top:1px solid #ccc;
	}
	.bottom-border {
	  border-bottom:1px solid #ccc;
	}
	.left-border {
	  border-left:1px solid #ccc;
	}
	.right-border {
	  border-right:1px solid #ccc;
	}
	&.background-video .container, &.background-video .container-fluid {
    position: relative;
    z-index: 1;
	}
}

.full-vh {
	min-height: 100%;  /* Fallback for vh unit */
	-webkit-height: 100vh;
	-moz-height: 100vh;
	-ms-height: 100vh;
	-o-height: 100vh;
	min-height: 100vh;
}

.two-thirds-vh {
	min-height: 75%;  /* Fallback for vh unit */
	-webkit-height: 75vh;
	-moz-height: 75vh;
	-ms-height: 75vh;
	-o-height: 75vh;		
	min-height: 75vh;
}

.half-vh {
	min-height: 50%;  /* Fallback for vh unit */
	-webkit-height: 50vh;
	-moz-height: 50vh;
	-ms-height: 50vh;
	-o-height: 50vh;	
	min-height: 50vh;
}

.quarter-vh {
	min-height: 25%;  /* Fallback for vh unit */
	-webkit-height: 25vh;
	-moz-height: 25vh;
	-ms-height: 25vh;
	-o-height: 25vh;	
	min-height: 25vh;
}

.vertical-center {
  /* Make it a flex container */
  display: -webkit-box;
  display: -moz-box;
  display: -ms-flexbox;
  display: -webkit-flex;
  display: flex; 
  
  /* Align the bootstrap's container vertically */
    -webkit-box-align : center;
  -webkit-align-items : center;
       -moz-box-align : center;
       -ms-flex-align : center;
          align-items : center;
  
  /* In legacy web browsers such as Firefox 9
     we need to specify the width of the flex container */
  width: 100%;
  
  /* Also 'margin: 0 auto' doesn't have any effect on flex items in such web browsers
     hence the bootstrap's container won't be aligned to the center anymore.
  
     Therefore, we should use the following declarations to get it centered again */
         -webkit-box-pack : center;
            -moz-box-pack : center;
            -ms-flex-pack : center;
  -webkit-justify-content : center;
          justify-content : center;

	.row > div {
			margin: 0 auto;
			display: block;
	}
}

.parallax {
	background-attachment: fixed !important;
	position: relative;
}

<?php 
$css_styles = get_option( 'section-style');
if( !empty($css_styles) ) :
	foreach($css_styles as $id_key => $id_value)
	{
		foreach($id_value as $key => $value)
		{
			echo $value;
		}
	}
endif;
?>

section .content-wrap {
	z-index: 1;
    position:relative;
}

/*! formstone v0.8.35 [background.css] 2015-12-28 | MIT License | formstone.it */

/**
	 * @class
	 * @name .fs-background-element
	 * @type element
	 * @description Target elmement
	 */
/**
	 * @class
	 * @name .fs-background
	 * @type element
	 * @description Base widget class
	 */
.fs-background {
  overflow: hidden;
  position: relative;
  /**
		 * @class
		 * @name .fs-background-container
		 * @type element
		 * @description Container element
		 */
  /**
		 * @class
		 * @name .fs-background-media
		 * @type element
		 * @description Media element
		 */
  /**
		 * @class
		 * @name .fs-background-media.fs-background-animated
		 * @type modifier
		 * @description Indicates animated state
		 */
  /**
		 * @class
		 * @name .fs-background-media.fs-background-navtive
		 * @type modifier
		 * @description Indicates native support
		 */
  /**
		 * @class
		 * @name .fs-background-media.fs-background-fixed
		 * @type modifier
		 * @description Indicates fixed positioning
		 */
  /**
		 * @class
		 * @name .fs-background-embed
		 * @type element
		 * @description Embed/iFrame element
		 */
  /**
		 * @class
		 * @name .fs-background-embed.fs-background-embed-ready
		 * @type modifier
		 * @description Indicates ready state
		 */
}
.fs-background,
.fs-background-container,
.fs-background-media {
  -webkit-transition: none;
          transition: none;
}
.fs-background-container {
  width: 100%;
  height: 100%;
  position: absolute;
  top: 0;
  z-index: 0;
  overflow: hidden;
}
.fs-background-media {
  position: absolute;
  top: 0;
  bottom: 0;
  opacity: 0;
}
.fs-background-media.fs-background-animated {
  -webkit-transition: opacity 0.5s linear;
          transition: opacity 0.5s linear;
}
.fs-background-media img,
.fs-background-media video,
.fs-background-media iframe {
  width: 100%;
  height: 100%;
  display: block;
  -webkit-user-drag: none;
}
.fs-background-media.fs-background-native,
.fs-background-media.fs-background-fixed {
  width: 100%;
  height: 100%;
}
.fs-background-media.fs-background-native img,
.fs-background-media.fs-background-fixed img {
  display: none;
}
.fs-background-media.fs-background-native {
  background-position: center;
  background-size: cover;
}
.fs-background-media.fs-background-fixed {
  background-position: center;
  background-attachment: fixed;
}
.fs-background-embed.fs-background-ready:after {
  width: 100%;
  height: 100%;
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 1;
  content: '';
}
.fs-background-embed.fs-background-ready iframe {
  z-index: 0;
}
