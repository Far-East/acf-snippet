// Если они предназначены исключительно для коротких кодов, вы можете использовать функцию do_shortcode () для вывода такой информации:
echo do_shortcode(get_field('myfield'));

// Если они могут содержать обычную текстовую строку, а также шорткоды, вы можете использовать фильтр the_content:
echo apply_filters('the_content', get_field('myfield'));
