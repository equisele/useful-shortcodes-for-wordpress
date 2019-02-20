//
// Get current year inside any wordpress content supporting shortcodes
// Paste this portion of script in your functions.php file just ony under your responsability.
//

// get "current year" begin
// Use [year] in your wp contents
// Use also inside your templates php pages like this:
// echo do_shortcode('[year]'); 

function year_shortcode() {
  $year = date('Y');
  return $year;
}
add_shortcode('year', 'year_shortcode');
// get current year end

// get "next year" begin
// use [nextyear] in your wp contents
// Use also inside your templates php pages like this:
// echo do_shortcode('[nextyear]'); 

function next_year_shortcode() {
  $year = date('Y', strtotime('+1 year'));;
  return $year;
}
add_shortcode('nextyear', 'next_year_shortcode');
// get next year end
