<?php 
  /**
   * molecule: faq
   */

    $question = isset($args['question']) ? $args['question']:'';
    $answer = isset($args['answer']) ? $args['answer']:'';
    $custom_class = isset($args['custom_class']) ? $args['custom_class']:'';

    wp_enqueue_style('m-faq');
    wp_enqueue_script('m-faq');
?>

<details class="m-faq <?php echo $custom_class; ?>">
  <summary class="m-faq__question"><span class="m-faq__question-icon">
    <?php echo $question; ?></span>
  </summary>
  <div class="m-faq__answer">
    <?php echo $answer; ?>
  </div>
</details>