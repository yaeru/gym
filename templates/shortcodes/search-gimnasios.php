<?php
// Shortcode Search Gimnasio
function shortcode_search_gimnasios() {
    return
    '<section>
    <h3>Buscar Salas</h3>
    <form role="search" action="'
    . site_url('/')
    .'" method="get" id="searchform">
    <input type="text" name="s" placeholder="Buscar Salas"/>
    <input type="hidden" name="post_type" value="salas" />
    <input type="submit" alt="Buscar" value="Buscar" />
    </form>
    </section>';
}
add_shortcode('search-gimnasio', 'shortcode_search_gimnasios');