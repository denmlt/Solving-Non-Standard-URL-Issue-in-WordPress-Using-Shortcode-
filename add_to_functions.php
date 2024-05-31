function custom_messaging_links_shortcode() {
    return '
    <a href="https://t.me/+*****" target="_blank" rel="nofollow noopener">
        <img class="alignnone wp-image-2751" src="YOURURL/wp-content/uploads/2024/04/group-14-1.png" alt="Telegram" width="27" height="27" />
    </a>
    <a href="viber://chat?number=*****" target="_blank" rel="nofollow noopener">
        <img class="alignnone wp-image-2752" src="YOURURL/wp-content/uploads/2024/04/viber.png" alt="Viber" width="27" height="27" />
    </a>';
}
add_shortcode('messaging_links', 'custom_messaging_links_shortcode');
