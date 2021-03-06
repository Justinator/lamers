<!-- Accordion -->
<section id="accordion" class="pageWidth">
  <div class="accordion" role="tablist" aria-live="polite" data-behavior="accordion">
    <article class="accordion__item js-show-item-default" data-binding="expand-accordion-item">
      <div class="iconToggle">
        <?php get_template_part("/inc/svg-icons/plus"); ?>
        <?php get_template_part("/inc/svg-icons/minus"); ?>
      </div>
      <span id="tab1" tabindex="0" class="accordion__title" aria-controls="panel1" role="tab" aria-selected="false" aria-expanded="false" data-binding="expand-accordion-trigger">
        <h6 class="noMargin mediumHeading">Lamers Connect Policies</h6>
      </span>
      <div id="panel1" class="accordion__content" role="tabpanel" aria-hidden="true" aria-labelledby="tab1" data-binding="expand-accordion-container">
        <div class="accordion__content-inner">
          <?php the_field('connect_policies' ,'option'); ?>
        </div>
      </div>
    </article>
  </div>
</section>
