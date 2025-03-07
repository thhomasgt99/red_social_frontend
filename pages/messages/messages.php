<div class="container messages d-flex justify-content-between">
    <!-- Aside izquierdo -->
    <aside class="aside-messages w-25 rounded overflow-auto position-sticky"
        style="top: 3vh; height: 87vh; margin-top: 3vh;">
        <ul class="d-flex flex-column list-unstyled">
            <li>
                <div class="li-aside d-flex mt-5 flex-column">
                    <a class="d-flex flex-column justify-content-center align-items-center text-decoration-none text-dark" href="#">
                        <div class="position-relative">
                            <div class="rounded-circle position-absolute bg-success" 
                                style="width: 1.3rem; height: 1.3rem;"></div>
                            <img src="/assets/imgs/user-1.png" class="rounded-circle" style="width: 50px;">
                            <div class="rounded-circle text-center pt-1 position-absolute border border-white bg-primary text-white"
                                style="bottom: 2px; right: 0; width: 2rem; height: 2rem;">
                                3
                            </div>
                        </div>
                        <div class="contaniner-message d-flex flex-column text-truncate">
                            <span class="nombre-message">Laura</span>
                            <p class="parrafo-message text-truncate" style="max-width: 100%;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit quos
                                optio magni. Vel placeat quam amet enim temporibus adipisci sapiente, quaerat nisi illum sint voluptatem
                                perspiciatis sed dignissimos recusandae quia.</p>
                        </div>
                    </a>
                </div>
            </li>
        </ul>
    </aside>

    <main class="rounded p-5 pt-0 bg-white" style="z-index: 99; width: 73%; margin-top: 3vh;">
        <div class="rounded p-3 bg-light">
            <div class="d-flex justify-content-between align-items-center">
                <div class="d-flex align-items-center">
                    <img src="/assets/imgs/user-1.png" alt="Perfil" class="rounded-circle" style="height: 5rem; width: 5rem;">
                    <h2 class="ms-3 mb-0">Laura</h2>
                </div>
                <button class="btn" data-bs-toggle="collapse" data-bs-target="#laura">
                    <i class="bi bi-three-dots"></i>
                </button>
            </div>
            <div id="laura" class="collapse position-absolute end-0 bg-danger text-white rounded p-2" style="width: 15rem;">
                <ul class="list-unstyled mb-0">
                    <li class="p-2">Eliminar</li>
                </ul>
            </div>
        </div>
    </main>
</div>

<script>
    (function styles() {
        const estilos = () => {
            const anchoPantalla = window.innerWidth;
            document.querySelectorAll("a").forEach(link => {
                if (anchoPantalla > 990) {
                    link.classList.replace("flex-column", "flex-row");
                    link.classList.remove("justify-content-center", "align-items-center");
                    link.classList.add("mt-3");
                } else {
                    link.classList.replace("flex-row", "flex-column");
                    link.classList.add("justify-content-center", "align-items-center");
                }
            });

            document.querySelectorAll(".li-aside").forEach(elemento => {
                if (anchoPantalla > 990) {
                    elemento.classList.remove("align-items-center", "justify-content-center");
                } else {
                    elemento.classList.add("align-items-center", "justify-content-center");
                }
            });
        }

        estilos();
        window.addEventListener('resize', estilos);
    })();
</script>
