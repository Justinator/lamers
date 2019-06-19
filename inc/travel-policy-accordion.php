<!-- Accordion 4 -->

<section class="accordion" role="tablist" aria-live="polite" data-behavior="accordion">

  <article class="accordion__item js-show-item-default" data-binding="expand-accordion-item">
    <span id="tab22" tabindex="0" class="accordion__title" aria-controls="panel1" role="tab" aria-selected="false" aria-expanded="false" data-binding="expand-accordion-trigger">
      <h5 class="noMargin">Lamers Connect Policies</h5>
    </span>

    <div id="panel22" class="accordion__content" role="tabpanel" aria-hidden="true" aria-labelledby="tab1" data-binding="expand-accordion-container">
      <div class="accordion__content-inner">
        <?php the_field('connect_policies' ,'option'); ?>
      </div>
    </div>

  </article>

</section>
