 <?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>
    <div class="main-content">
      <div class="container">
        <div class="date">
          <p class="schedule">Saturday March 10 to Sunday March 11 2018 &bull; Sheraton on the Park, 161 Elizabeth Street, Sydney NSW 2000</p>
          <p class="schedule">Saturday March 24 to Sunday March 25 2018 &bull; Hilton Brisbane, 190 Elizabeth Street, Brisbane City QLD 4000</p>
        </div>
        <div class="join-book">
          <div class="content-left">
            <p class="join">Join Australia's leading experts in NVAF and DVT/PE for high quality education over 2 days, incorporating an Active Learning Module attracting <strong>40 Category 1 QI&amp;CPD points</strong><span class="act-no">Activity Number 82324</span></p>
            <img src="<?php echo get_stylesheet_uri(); ?>/../assets/images/racgp.jpg" class="img-fluid" />
            <p class="faculty-member">Faculty members include Australia's leading physicians in stroke prevention and vascular health.</p>
          </div>
        <div class="grp-btns">
          <p>
            <a href="/event" class="book-today"></a>
          </p>
          <p>
            <a href="http://starcite.smarteventscloud.com/sydney2018" target="_blank" class="sydney-event">
              <button class="sydney-event"></button>
            </a>
          </p>
          <p>
            <a href="http://starcite.smarteventscloud.com/brisbane2018" target="_blank">
            <button class="brisbane-event"></button>
            </a>
          </p>
        </div>
        <div class="clear"></div>
        <div class="row dotted-sp"></div>
        <div class="row dotted">
        </div>
      </div>
    </div>
    </div>

<?php get_footer(); ?>