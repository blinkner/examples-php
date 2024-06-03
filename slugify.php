function slugify($nome) {
    $slug = $nome;
    $slug = trim($slug);
    $slug = str_replace("- ", "", $slug);
    $slug = str_replace(":", "", $slug);
    $slug = str_replace(" ", "-", $slug);
    $slug = str_replace("á", "a", $slug);
    $slug = str_replace("Á", "A", $slug);
    $slug = str_replace("à", "a", $slug);
    $slug = str_replace("À", "A", $slug);
    $slug = str_replace("ã", "a", $slug);
    $slug = str_replace("Ã", "A", $slug);
    $slug = str_replace("é", "e", $slug);
    $slug = str_replace("É", "E", $slug);
    $slug = str_replace("í", "i", $slug);
    $slug = str_replace("Í", "I", $slug);
    $slug = str_replace("õ", "o", $slug);
    $slug = str_replace("Õ", "O", $slug);
    $slug = str_replace("ó", "o", $slug);
    $slug = str_replace("Ó", "O", $slug);
    $slug = str_replace("ú", "u", $slug);
    $slug = str_replace("Ú", "U", $slug);
    $slug = str_replace("ç", "c", $slug);
    $slug = str_replace("Ç", "C", $slug);
    $slug = strtolower($slug);

    return $slug;
}
