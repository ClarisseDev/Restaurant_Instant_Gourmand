<?php


function nav_item (string $lien, string $titre, string $linkClass) : string
{
    $classe = "nav-link";
    if (basename($_SERVER['SCRIPT_NAME']) === basename($lien))
    {
        $classe .= ' active';
    }
    return <<<HTML
    <li class = "nav-item">
        <a class=" $classe $linkClass"  href="$lien">$titre</a>
    </li>
HTML;
}

// function nav_item(string $lien, string $titre): string
// {
//     $active = basename($_SERVER['SCRIPT_NAME']) === $lien ? 'active' : '';
//     return <<<HTML
//     <li class="nav-item">
//         <a class="nav-link $active" href="$lien">$titre</a>
//     </li>
//     HTML;
// }

function nav_menu(string $linkClass = "") : string
{
    return
        nav_item("index.php", "Accueil", $linkClass).
        nav_item("contact.php", "Contact", $linkClass).
        nav_item("histoire.php", "Hébergements", $linkClass);
        nav_item("menu.php", "Menu", $linkClass);
}

function checkbox(string $name, string $value, array $data) : string
{
    $attribute = null;
    if(isset($data[$name])&& in_array($value, $data[$name]))
    {
        $attribute .= ' checked';
    }
    return <<<HTML
        <input type="checkbox" name="{$name}[]" value="$value" $attribute>
HTML;
}

function radio(string $name, string $value, array $data) : string
{
    $attribute = null;
    if(isset($data[$name])&& ($value=== $data[$name]))
    {
        $attribute .= ' checked';
    }
    return <<<HTML
        <input type="radio" name="$name" value="$value" $attribute>
HTML;
}


function creneaux_html(array $creneaux)
{
    if(empty($creneaux))
    {
        return "Fermé";
    }
    $phrases = [];
    foreach($creneaux as [$ouverture, $fermeture])
    {
        $phrases[] = "de <strong>{$ouverture}h</strong> à <strong>{$fermeture}h</strong>";
    }
    return "Ouvert " . implode(" et ", $phrases);
}

function in_creneau(int $heure, array $creneaux) : bool
{
    foreach ($creneaux as $creneau)
    {
        $debut = $creneau[0];
        $fin = $creneau[1];
        if($heure >= $debut && $heure < $fin)
        {
            return true;
        }
    }
    return false;
}

function select(string $name, $value, array $options) : string
{
    $html_options = [];
    foreach ($options as $k => $option)
    {
        $attributes = $k == $value ? 'selected' : '';
        $html_options[] = "<option value='$k' $attributes>$option</option>";
    }
    return "<select class='form-control' name='$name'>" . implode($html_options) . '</select>';
}
?>