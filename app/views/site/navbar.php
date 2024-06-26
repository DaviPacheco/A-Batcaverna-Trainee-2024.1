
        <header>
            <a href= "/"><img class="logo-nav" src="../../../public/assets/Logo_Batcaverna_vermelha nav.png" alt="Logo_Batcaverna_vermelha"></a>
            <nav class="nav">
                <button class="hamburguer"></button>
                <ul class="layout-nav">
                    <li><a class="btnav" href="/post_list"><iconify-icon icon="octicon:book-16" width="17"></iconify-icon>Publicações</a></li>
                    <li><a class="btnav" href="/"><iconify-icon icon="mdi:home" width="24"></iconify-icon>Home</a></li>
                    <li><?php if(isset($_SESSION['sessao'])){ ?><a class="btnav" href="/logout"><iconify-icon icon="bx:user" width="18" ></iconify-icon>Sair</a> <?php } else 
                        { ?> <a class="btnav" href="/login"><iconify-icon icon="bx:user" width="18" ></iconify-icon>Login</a> <?php } ?></li>

                </ul>
            </nav>
        </header>
        <script src="https://code.iconify.design/iconify-icon/2.1.0/iconify-icon.min.js"></script>
