<?php 
$commentsCount = get_comments_number();

if ($commentsCount > 0) : ?>
    <h4 class="comments__title"> Коментарі (<?php echo $commentsCount; ?>) </h4>
<?php else: ?>
    <h3 class="comments__title"> Ще немає коментарів</h3>
<?php endif; ?>

<?php 
if ($commentsCount > 0) : ?>
<ul class="comment__list">
    <?php wp_list_comments(array(
        'style' => 'ul',
        'callback'=> 'tsugli_comments'
    )); ?>
</ul>
<?php endif; ?>

<div id="respond">
    <?php
    comment_form(array(
        'fields' => array(
            'author' => '<div class="comments__inputs"><div class="comment-form-author">' . 
              '<input id="author" name="author" placeholder="Ім\'я" type="text" value="' . esc_attr($commenter['comment_author']) . '" size="30" required /></div>',
            'email'  => '<div class="comment-form-email">' .
               '<input id="email" name="email" placeholder="*Email" type="email" value="' . esc_attr($commenter['comment_author_email']) . '" size="30" required /></div></div>',
        ),
            'comment_field' => '<div class="comment-form-comment">
              <textarea id="comment" name="comment" cols="45" rows="8" aria-required="true" placeholder="Текст"></textarea>
               </div>
            <button type="submit" id="submit-comment" class="comment__submit">Відправити</button>',
            'submit_button' => '', 
            'title_reply' => '<h4 class="comments__add">Додати коментар</h4><p class="comments__call">Будемо раді емоціям.</p>', 
    ));
    ?>
</div>

<?php
function tsugli_comments($comment, $args, $depth) {
    $author_name = get_comment_author();
    $comment_date = get_comment_date();
    $comment_text = get_comment_text();

    echo '<li class="comment__item">';
    echo '<div class="comment__info">';
    echo '<span class="comment__autor">' . esc_html($author_name) . '</span>';
    echo '<span class="comment__date">' . esc_html($comment_date) . '</span>';
    echo '</div>';
    echo '<span class="comment__text">' . esc_html($comment_text). '</span>';
    echo '</li>';
}
?>