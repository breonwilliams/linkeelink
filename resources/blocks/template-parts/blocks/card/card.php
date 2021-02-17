<?php

// Create id attribute allowing for custom "anchor" value.
$id = 'card-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

?>



<?php if( have_rows('card') ): ?>
    <?php while( have_rows('card') ): the_row();
    $subheading = get_sub_field('subheading') ?: 'Your subheading here...';
    $heading = get_sub_field('heading') ?: 'Your Heading Here';
    $header_color = get_sub_field('header_color');
    $card_content = get_sub_field('card_content') ?: 'Your content here...';
    $content_color = get_sub_field('content_color');
    $button_text = get_sub_field('button_text') ?: 'Button Text';
    $background_color = get_sub_field('background_color');
    $button_text_hover_color = get_sub_field('button_text_hover_color');
    $card_url = get_sub_field('card_url');
        ?>
        <a href="<?php echo $card_url; ?>" id="<?php echo esc_attr($id); ?>" target="_blank" class="flex-item m-3 pt-5 pr-5 pl-5 rounded hvr-grow my-card mofx-card">

          <?php
          $image = get_sub_field('card_thumbnail');
          if( $image ):
              // Image variables.
              $url = $image['url'];
              $title = $image['title'];
              $alt = $image['alt'];
              // Thumbnail size attributes.
              $size = 'thumbnail';
              $thumb = $image['sizes'][ $size ];
              $width = $image['sizes'][ $size . '-width' ];
              $height = $image['sizes'][ $size . '-height' ];
              ?>
                  <img class="card-logo" src="<?php echo esc_url($thumb); ?>" alt="<?php echo esc_attr($alt); ?>" />
          <?php endif; ?>

          <h2 class="card-subheading"><?php echo $subheading; ?></h2>
          <h3 class="card-heading"><?php echo $heading; ?></h3>
          <p><?php echo $card_content; ?></p>
          <span class="btn btn-primary my-button"><?php echo $button_text; ?></span>
        </a>
        <style type="text/css">
        #<?php echo $id; ?> {
            background: <?php echo $background_color; ?>;
        }
        #<?php echo $id; ?> p {
            color: <?php echo $content_color; ?>;
        }
        #<?php echo $id; ?> .card-subheading, #<?php echo $id; ?> .card-heading {
            color: <?php echo $header_color; ?>;
        }
        #<?php echo $id; ?> .btn {
            color: <?php echo $header_color; ?>;
            border-color: <?php echo $header_color; ?>;
        }
        #<?php echo $id; ?>:hover .btn {
            background-color: <?php echo $header_color; ?>;
            color: <?php echo $button_text_hover_color; ?>;
        }
    </style>
    <?php endwhile; ?>
<?php endif; ?>
