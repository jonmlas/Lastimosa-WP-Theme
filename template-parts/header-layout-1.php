<?php if ( ! defined( 'ABSPATH' ) ) die( 'Direct access forbidden.' ); 

$header_menu 	= lastimosa_get_option('header_menu');
do_action( 'lastimosa_header_top' ); ?>

<?php
if ( fw_ext('megamenu')  && ($header_menu['selected'] == 'style_2') ) { ?>
<div class="header-main">
	<div class="container">
		<?php do_action('lastimosa_header_logo'); ?>
        <nav id="primary-navigation" class="site-navigation primary-navigation" role="navigation">
            <?php do_action('lastimosa_menu_button'); ?>
            <?php do_action('lastimosa_menu'); ?>
        </nav>
    </div>
</div>
<?php } else { ?>

<nav class="navbar navbar-expand-md navbar-light bg-light" role="navigation">
  <div class="container">
		<?php do_action('lastimosa_menu_button'); ?>
		<?php do_action('lastimosa_header_logo'); ?>
		<a class="navbar-brand" href="#">Navbar</a>
		<?php do_action('lastimosa_menu'); ?>
  </div>
</nav>

<?php } ?>

    <nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="#">Never expand</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample01" aria-controls="navbarsExample01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExample01">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#">Disabled</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </li>
        </ul>
        <form class="form-inline my-2 my-md-0">
          <input class="form-control" type="text" placeholder="Search" aria-label="Search">
        </form>
      </div>
    </nav>

<?php do_action( 'lastimosa_header_bottom' ); ?>