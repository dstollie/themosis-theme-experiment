@if (comments_open())
    <h2>Comment Form </h2>

    <?php comments_template(); ?>
    <?php comment_form(); ?>
@endif