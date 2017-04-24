<?php

// @codingStandardsIgnoreFile

/**
 * Whether a post should be skipped for AMP.
 *
 * @param $bool
 * @param $postId
 * @param $post
 * @return bool
 */
function isAmpSkipPost($bool, $postId, $post)
{
    $noShowPost = get_post_meta($postId, 'book_cf_amp', true);

    if ($noShowPost === '1') {
        return true;
    } else {
        return false;
    }
}
add_filter('amp_skip_post', 'isAmpSkipPost', 10, 3);
