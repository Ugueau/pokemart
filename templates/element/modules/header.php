<header>
    <nav class="navbar bs-body-color bg_main_color rounded-4">
        <div class="container-fluid">
            <?= $this->Html->link(
                "PokeMart",
                ["controller" => "Card", "action" => "index"],
                ["class" => "navbar-brand txt_white "]
            );?>
            <ul class="d_flex flex-row navbar-nav">
                <li class="nav-item me-3">
                    <?= $this->Html->link(
                        "Panier",
                        ["controller" => "Cart", "action" => "index"],
                        ["class" => "nav-link btn btn-dark txt_white p-3 border_radius_small", "escapeTitle" => false]
                    ) ?>
                </li>
                <li class="nav-item">
                    <?php

                    use Cake\Http\Session;

                    $session = new Session();
                    if ($session->check('Auth')) {
                        echo $this->Html->link(
                            "Se Déconnecter",
                            ["controller" => "Users", "action" => "logout"],
                            ["class" => "nav-link tn btn-dark txt_white p-3 border_radius_small", "escapeTitle" => false]);
                    } else {
                        echo $this->Html->link(
                            "Se Connecter",
                            ["controller" => "Users", "action" => "login"],
                            ["class" => "nav-link btn btn-dark txt_white p-3 border_radius_small", "escapeTitle" => false]);
                    }

                    ?>
                </li>
            </ul>
        </div>
    </nav>
</header>
