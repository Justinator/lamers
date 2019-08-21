Edits to the Agile Store Locator
class-agile-store-locator-public.php

```
$words = array(
  'direction' => __('Directions','asl_locator'),
  'zoom' => __('Zoom Here','asl_locator'),
  'detail' => __('More Info','asl_locator'),
  'select_option' => __('Select Option','asl_locator'),
  'none' => __('None','asl_locator')
);
```

Edit this file to change "Website" to "More Info" in the tooltip to make more sense to a user

Edit the site-script.js file to update the More Info link in tooltip to target = \_self vs. target= \_blank

Tourmaster plugin edits

Tour.php is the primary file for outputting single tours. This file was edited to add in the assistance CTA block at the end of each single tour content post.

```
echo '<div>';
echo '<div class="assistanceCTA">';
echo '<h3><span class="underline">Need Assistance?</span></h3>';
echo '<p>Don’t hesitate to contact us with any questions and concerns.</p>';
echo '<a href="tel:1-800-236-8687">1-800-236-8687</a>';
echo '</div>';
echo '</div>';
```

Also edited the output what they call related tours. They only show the latest added tours so I changed the heading output to "Recently Added Tours" instead.
