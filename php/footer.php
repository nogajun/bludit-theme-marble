<div id="get-in-touch">
  <div class="fh5co-narrow-content">
  <?php if ($contact_page): ?>
    <?php foreach($staticContent as $contact): ?>
      <?php if($contact->slug() == 'contact'): ?>
  <div class="row">
    <div class="col-md-4 animate-box" data-animate-effect="fadeInLeft">
      <h1 class="fh5co-heading-colored"><?php echo $contact->title()?></h1>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
      <p class="fh5co-lead"><?php echo $contact->description()?$contact->description():$language->p('Plase enter a description'); ?></p>
      <p><a href="<?php echo $contact->permalink(); ?>" class="btn btn-primary"><?php echo $language->p('Learn More'); ?></a></p>
    </div>
  </div>
      <?php endif; ?>
    <?php endforeach; ?>
  <?php else: ?>
  <div class="row">
    <div class="col-md-4 animate-box" data-animate-effect="fadeInLeft">
      <h1 class="fh5co-heading-colored"><?php echo $language->p('Add a static page with slug name contact'); ?></h1>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
      <p class="fh5co-lead"><?php echo $language->p('Add a static page with slug name contact'); ?></p>
    </div>
  </div>
  <?php endif; ?>
  </div>
</div>