<?php
// $Id$
$_SERVER['BASE_PAGE'] = 'download-logos.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/include/prepend.inc';
site_header("Download Logos");

// Print recommended star cell
function print_star()
{
    echo "  <td class=\"star\">" .
         make_image('star.gif', 'recommended', FALSE, 'title="recommended"') .
         "</td>\n";
}
function print_nostar()
{
    echo "<td></td>";
}

// Provide a random bgcolor setting for a cell
function random_bgcolor($min, $max)
{
    echo "style=\"background-color: #" . 
         sprintf('%02x%02x%02x', rand($min, $max)*51, rand($min, $max)*51, rand($min, $max)*51) .
         ";\"";
}
?>

<h1>Download Logos and Icons</h1>

<p>
 Right click on one of the images and select "Save Image As" to save the
 logo (except where otherwise indicated). Then, link it to the main PHP
 site at <strong>www.php.net</strong>.
</p>

<p>
 <strong>Note:</strong> If you are planning on making money off of our logo 
 (e.g. you want to make merchandise with the logo ... t-shirts,
 coffee mugs, pocket protectors, etc.), then you need to contact 
 <a href="mailto:logos@php.net">logos@php.net</a> for licencing information.  
 For pretty much all other uses, there is no licensing requirement. For 
 example: a logo on your website showing that you use/promote PHP, even 
 commercial websites; course materials; a bunch of t-shirts for your own use 
 and some friends, or your user group; a PHP-related book; a banner for your 
 computer group; etc.. If in doubt, <a href="mailto:logos@php.net">ask</a>.
</p>

<p class="warn">
 Do not just include the graphic from our servers on your page!
 Copy the image to your site please.
</p>

<p>
 <a href="http://www.elroubio.net/">Vincent Pontier</a> also made some
 really neat PHP artwork, for the French PHP sites, and for the benefit
 of the whole community. You can download some of his works and use
 under a GPL licence.
</p>

<p>
 In case you have found some PHP logos, icons or other material around
 the web, feel free to point those out to us, so we can include them here,
 if appropriate. And oh, if you're wondering about the font we used, it's
 called  <a href="http://www.myfonts.com/fonts/bitstream/handel-gothic/">Handel
 Gothic</a>.
</p>

<p>
 The images marked with a <?php print_image('star.gif', 'recommended');?> are
 the images we recommend to display on your website, in case you are unable
 to choose from the formats. Note however, that some combinations of
 browser/operating system don't handle transparent PNG images very well.
</p>

<div class="center">
<table border="0" width="90%" cellspacing="2" cellpadding="10" id="logos">
 
 <tr>
  <td class="logo">
   <?php print_image("logos/php-med-trans-light.gif", "PHP logo"); ?><br />
   (not exactly as shown)
  </td>
  <?php print_star(); ?>
  <td>
   <ul>
    <li>scaleable vector image</li>
    <li>
     <a href="/images/logos/php-logo.eps">EPS format</a> | 
     <a href="/images/logos/php-logo.ai">AI (Adobe Illustrator) format</a>
    </li>
   </ul>
  </td>
 </tr>

 <tr>
  <td class="logo">
   <?php print_image("logos/php-med-trans-light.gif", "PHP logo"); ?><br />
   (not exactly as shown)
  </td>
  <?php print_nostar(); ?>
  <td>
   <ul>
    <li>250 x 134 pixels</li>
    <li>white background</li>
    <li>large scale for presentations, etc.</li>
    <li><a href="/images/logos/php-big.tif">TIF format</a></li>
   </ul>
  </td>
 </tr>

 <tr>
  <td class="logo" <?php random_bgcolor(0, 5); ?>>
   <?php print_image("logos/php-med-trans.png", "PHP logo"); ?>
  </td>
  <?php print_star(); ?>
  <td>
   <ul>
    <li>95 x 51 pixels</li>
    <li>transparent background</li>
    <li>suitable for any background</li>
    <li><a href="/images/logos/php-med-trans.png">PNG format</a></li>
   </ul>
  </td>
 </tr>

 <tr>
  <td class="logo">
   <?php print_image("logos/php-med-trans-light.gif", "PHP logo"); ?>
  </td>
  <?php print_nostar(); ?>
  <td>
   <ul>
    <li>95 x 51 pixels</li>
    <li>transparent background</li>
    <li>suitable for white/light backgrounds</li>
    <li><a href="/images/logos/php-med-trans-light.gif">GIF format</a></li>
   </ul>
  </td>
 </tr>

 <tr>
  <td class="logob">
   <?php print_image("logos/php-med-trans-dark.gif", "PHP logo"); ?>
  </td>
  <?php print_nostar(); ?>
  <td>
   <ul>
    <li>95 x 51 pixels</li>
    <li>transparent background</li>
    <li>suitable for black/dark backgrounds</li>
    <li><a href="/images/logos/php-med-trans-dark.gif">GIF format</a></li>
   </ul>
  </td>
 </tr>

 <tr>
  <td class="logo" <?php random_bgcolor(3, 5); ?>>
   <?php print_image("logos/php-power-white.png", "Powered by PHP"); ?>
  </td>
  <?php print_star(); ?>
  <td>
   <ul>
    <li>88 x 31 pixels</li>
    <li>"Powered by PHP" logo</li>
    <li>black text on transparent background</li>
    <li><a href="/images/logos/php-power-white.png">PNG format</a></li>
   </ul>
  </td>
 </tr>

 <tr>
  <td class="logo">
   <?php print_image("logos/php-power-white.gif", "Powered by PHP"); ?>
  </td>
  <?php print_nostar(); ?>
  <td>
   <ul>
    <li>88 x 31 pixels</li>
    <li>"Powered by PHP" logo</li>
    <li>black text on solid white background</li>
    <li><a href="/images/logos/php-power-white.gif">GIF format</a></li>
   </ul>
  </td>
 </tr>

 <tr>
  <td class="logo" <?php random_bgcolor(0, 2); ?>>
   <?php print_image("logos/php-power-black.png", "Powered by PHP"); ?>
  </td>
  <?php print_star(); ?>
  <td>
   <ul>
    <li>88 x 31 pixels</li>
    <li>"Powered by PHP" logo</li>
    <li>white text on transparent background</li>
    <li><a href="/images/logos/php-power-black.png">PNG format</a></li>
   </ul>
  </td>
 </tr>

 <tr>
  <td class="logob">
   <?php print_image("logos/php-power-black.gif", "Powered by PHP"); ?>
  </td>
  <?php print_nostar(); ?>
  <td>
   <ul>
    <li>88 x 31 pixels</li>
    <li>"Powered by PHP" logo</li>
    <li>white text on solid black background</li>
    <li><a href="/images/logos/php-power-black.gif">GIF format</a></li>
   </ul>
  </td>
 </tr>

 <tr>
  <td class="logo">
   <?php print_image("logos/php-power-micro.png", "PHP Powered"); ?><br /><br />
   <?php print_image("logos/php-power-micro2.png", "PHP Powered"); ?>
  </td>
  <?php print_nostar(); ?>
  <td>
   <ul>
    <li>80 x 15 pixels</li>
    <li>"PHP Powered" logo</li>
    <li>suitable for any background, usually used on blogs</li>
    <li>
     <a href="/images/logos/php-power-micro.png">PNG format (1)</a>,
     <a href="/images/logos/php-power-micro2.png">PNG format (2)</a>
    </li>
   </ul>
  </td>
 </tr>

 <tr>
  <td class="logo" <?php random_bgcolor(0, 5); ?>>
   <?php print_image("logos/php-icon.png", "PHP icon"); ?>
  </td>
  <?php print_star(); ?>
  <td>
   <ul>
    <li>32 x 32 pixels</li>
    <li>transparent background</li>
    <li>suitable for any background</li>
    <li><a href="/images/logos/php-icon.png">PNG format</a></li>
   </ul>
  </td>
 </tr>

 <tr>
  <td class="logo">
   <?php print_image("logos/php-icon-white.gif", "PHP icon"); ?>
  </td>
  <?php print_nostar(); ?>
  <td>
   <ul>
    <li>32 x 32 pixels</li>
    <li>transparent background</li>
    <li>suitable for white/light backgrounds</li>
    <li><a href="/images/logos/php-icon-white.gif">GIF format</a></li>
   </ul>
  </td>
 </tr>

 <tr>
  <td class="logob">
   <?php print_image("logos/php-icon-black.gif", "PHP icon"); ?>
  </td>
  <?php print_nostar(); ?>
  <td>
   <ul>
    <li>32 x 32 pixels</li>
    <li>transparent background</li>
    <li>suitable for black/dark backgrounds</li>
    <li><a href="/images/logos/php-icon-black.gif">GIF format</a></li>
   </ul>
  </td>
 </tr>
 
 <tr>
  <td class="logo">
   <?php print_image("logos/php-icon-white.gif", "PHP icons"); ?><br />
   (not exactly as shown)
  </td>
  <?php print_nostar(); ?>
  <td>
   <ul>
    <li>PHP icon resource for Windows</li>
    <li>suitable as icons for your desktop</li>
    <li>
     48x48, 32x32 and 16x16 sizes, in each of 16 colour,
     256 colour, and true colour formats ...
     all in one .ICO file
    </li>
    <li><a href="/images/logos/php.ico">ICO format</a></li>
   </ul>
  </td>
 </tr>

 <tr>
  <td class="logo">
   <?php print_image("logos/php_file_ico.gif", "PHP file icons"); ?><br />
   (not exactly as shown)
  </td>
  <?php print_nostar(); ?>
  <td>
   <ul>
    <li>PHP icon resource for Windows</li>
    <li>suitable as icons for file extensions like .php, .phtml and .php3</li>
    <li>32x32 and 16x16 sizes, in true colour format... all in one .ICO file</li>
    <li>these icons are made by Gonzalo de la Pea</li>
    <li><a href="/images/logos/php_file.ico">ICO format</a></li>
   </ul>
  </td>
 </tr>

 <tr>
  <td class="logo">
   <?php print_image("logos/php_xpstyle_ico.gif", "Windows XP PHP file icons"); ?><br />
   (not exactly as shown)
  </td>
  <?php print_nostar(); ?>
  <td>
   <ul>
    <li>PHP icon resource for Windows XP [<b>use only on WinXP!</b>]</li>
    <li>suitable as icons for file extensions like .php, .phtml and .php3</li>
    <li>
     48x48, 32x32, 24x24, 16x16 sizes, in each of 16 colour, 256 colour,
     and true colour formats... all in one .ICO file
    </li>
    <li>these icons are made by Jonathan Metillon</li>
    <li><a href="/images/logos/php_xpstyle.ico">XP ICO format</a></li>
   </ul>
  </td>
 </tr>

 <tr>
  <td class="logob">
   <?php print_image("logos/zend-powered-by.gif", "Powered by Zend"); ?>
  </td>
  <?php print_nostar(); ?>
  <td>
   <ul>
    <li>100 x 58 pixels</li>
    <li>"Powered by Zend" logo</li>
    <li>solid black background</li>
    <li>
     <a href="/images/logos/zend-powered-by.gif">GIF format</a> |
     <a href="/images/logos/zend-powered-by.png">PNG format</a>
    </li>
   </ul>
  </td>
 </tr>

</table>
</div>

<?php site_footer(); ?>
