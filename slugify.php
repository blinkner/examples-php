function slugify($nome) {
    $slug = $nome;
    $slug = str_replace("- ", "", $slug);
    $slug = str_replace(":", "", $slug);
    $slug = str_replace(" ", "-", $slug);
    $slug = str_replace("á", "a", $slug);
    $slug = str_replace("à", "a", $slug);
    $slug = str_replace("ã", "a", $slug);
    $slug = str_replace("é", "e", $slug);
    $slug = str_replace("õ", "o", $slug);
    $slug = str_replace("í", "i", $slug);
    $slug = strtolower($slug);

    return $slug;
}
