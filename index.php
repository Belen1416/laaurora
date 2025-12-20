<?php $nameFile = basename(__FILE__); ?>
<!DOCTYPE html>
<html lang="es" translate="no">

<head>
    <?php require_once("includes/header.php"); ?>
</head>


<body>

    <?php require_once("includes/topnav.php"); ?>
    <!-- BOTÓN WHATSAPP -->
    <a href="https://wa.me/51958984504" target="_blank" class="whatsapp-fab" aria-label="WhatsApp">
        💬
    </a>

    <!-- HEADER -->


    <main>
        <!-- INICIO / HERO -->
        <section id="inicio" class="hero">
            <div class="container hero-grid">
                <div>
                    <div class="hero-eyebrow">Casa de cambio presencial y delivery</div>

                    <h1 class="hero-title">
                        Tu casa de cambio<br />
                        de <span>confianza real</span>
                    </h1>

                    <p class="hero-text">
                        Compra y venta de moneda extranjera con atención inmediata, tasas competitivas y oficinas
                        visibles en el
                        corazón de Miraflores.
                    </p>

                    <div class="hero-tags">
                        <div class="hero-tag">💵 Operaciones seguras</div>
                        <div class="hero-tag">👥 Personas y empresas</div>
                        <div class="hero-tag">🚗 Cambio delivery</div>
                    </div>

                    <div class="hero-actions">
                        <a href="https://wa.me/51958984504" target="_blank" class="btn">💬 Cotizar por WhatsApp</a>
                        <a href="tel:+51958984504" class="btn-outline">📞 Llamar ahora</a>
                    </div>

                    <div class="hero-note">
                        El tipo de cambio se confirma siempre por WhatsApp o teléfono antes de cada operación.
                    </div>
                </div>

                <!-- Panel de tasas -->
                <div class="hero-card">
                    <div class="hero-card-header">
                        <div class="hero-card-title">Monedas frecuentes</div>
                        <div class="hero-chip">Tasas referenciales</div>
                    </div>

                    <div class="hero-rates-row">
                        <div class="hero-rate">
                            <div class="hero-rate-left">
                                <div class="hero-rate-icon">$</div>
                                <div class="hero-rate-label">
                                    <strong>USD / PEN</strong>
                                    <small>Compra · Venta</small>
                                </div>
                            </div>
                            <div class="hero-rate-value" data-rate="usd">3.33 / 3.37</div>
                        </div>

                        <div class="hero-rate">
                            <div class="hero-rate-left">
                                <div class="hero-rate-icon">€</div>
                                <div class="hero-rate-label">
                                    <strong>EUR / PEN</strong>
                                    <small>Compra · Venta</small>
                                </div>
                            </div>
                            <div class="hero-rate-value" data-rate="eur">4.02 / 4.13</div>
                        </div>

                        <div class="hero-rate">
                            <div class="hero-rate-left">
                                <div class="hero-rate-icon">£</div>
                                <div class="hero-rate-label">
                                    <strong>GBP / PEN</strong>
                                    <small>Compra · Venta</small>
                                </div>
                            </div>
                            <div class="hero-rate-value" data-rate="gbp">4.65 / 4.79</div>
                        </div>
                    </div>

                    <div class="hero-ticker">
                        <!-- <span class="label">Info</span> -->
                        <span id="ticker-text">Consulta por WhatsApp el tipo de cambio antes de venir a la
                            oficina.</span>
                    </div>
                </div>
            </div>

            <!-- Stats -->
            <div class="container hero-stats">
                <div class="hero-stat-card">
                    <div class="hero-stat-icon">🏦</div>
                    <div class="hero-stat-text">
                        <b>+15 años</b><br />operando en Miraflores
                    </div>
                </div>
                <div class="hero-stat-card">
                    <div class="hero-stat-icon">🌎</div>
                    <div class="hero-stat-text">
                        <b>+20</b><br />monedas extranjeras
                    </div>
                </div>
                <div class="hero-stat-card">
                    <div class="hero-stat-icon">👥</div>
                    <div class="hero-stat-text">
                        <b>Personas y empresas</b><br />atendidas a diario
                    </div>
                </div>
                <div class="hero-stat-card">
                    <div class="hero-stat-icon">🔐</div>
                    <div class="hero-stat-text">
                        <b>Operaciones seguras</b><br />con procesos claros
                    </div>
                </div>
            </div>
        </section>

        <!-- QUIÉNES SOMOS -->
        <section id="quienes" class="about">
            <div class="container">
                <div class="about-grid">
                    <div>
                        <div class="about-kicker">¿Quiénes somos?</div>
                        <h2 class="about-title">
                            Más de <span>15 años</span> cambiando moneda con transparencia y trato cercano.
                        </h2>

                        <p class="about-text">
                            Somos una casa de cambio con trayectoria comprobada, enfocada en ofrecer operaciones claras,
                            seguras y a
                            buen precio, tanto para personas como para empresas.
                        </p>

                        <p class="about-text">
                            Nuestro enfoque es simple: información clara desde el primer contacto, procesos ordenados y
                            un equipo que
                            te acompaña en cada operación.
                        </p>

                        <div class="about-pill-row">
                            <div class="about-pill">🏛 Trayectoria real en Miraflores</div>
                            <div class="about-pill">💬 Atención personalizada</div>
                            <div class="about-pill">🔐 Operaciones reguladas</div>
                            <div class="about-pill">💱 Tasas competitivas y claras</div>
                        </div>
                    </div>

                    <div class="about-panel">
                        <div class="about-panel-item">
                            <span class="icon">📊</span>
                            <div>
                                <b>Experiencia comprobada</b><br />
                                <!-- Más de una década trabajando con clientes que vuelven y nos recomiendan. -->
                            </div>
                        </div>

                        <div class="about-panel-item">
                            <span class="icon">🧾</span>
                            <div>
                                <b>Procedimientos claros</b><br />
                                <!-- Información de tipo de cambio, montos y comprobantes desde el inicio de la operación. -->
                            </div>
                        </div>

                        <div class="about-panel-item">
                            <span class="icon">🤝</span>
                            <div>
                                <b>Relación de confianza</b><br />
                                <!-- Atención cordial, sin letras pequeñas y con acompañamiento paso a paso. -->
                            </div>
                        </div>

                        <div class="about-panel-item">
                            <span class="icon">🚗</span>
                            <div>
                                <b>Presencial y delivery</b><br />
                                <!-- Podrás venir a nuestras oficinas o coordinar cambio delivery según tu necesidad. -->
                            </div>
                        </div>

                        <div class="about-panel-footer">
                            Siempre confirmamos la operación contigo antes de mover cualquier monto.
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- SERVICIOS -->
        <section id="servicios" class="services">
            <div class="container">
                <h2 class="section-title">Servicios de cambio</h2>
                <p class="section-subtitle">
                    Soluciones pensadas para quienes desean un cambio de moneda seguro, rápido y con una casa de cambio
                    visible.
                </p>

                <div class="services-grid" id="servicesGrid">

                    <!-- Servicio 1 -->
                    <div class="service-card">
                        <div class="service-icon">
                            <img src="servicios/servicio1.svg" alt="Cambio de moneda extranjera">
                        </div>
                        <div class="service-title">Cambio de moneda extranjera</div>
                        <div>
                            Compra y venta de dólares, euros, libras, yenes y más de 20 monedas extranjeras.
                        </div>
                    </div>

                    <!-- Servicio 2 -->
                    <div class="service-card">
                        <div class="service-icon">
                            <img src="servicios/servicio2.svg" alt="Cambio delivery">
                        </div>
                        <div class="service-title">Cambio delivery</div>
                        <div>
                            Coordinamos el cambio a domicilio u oficina en zonas seleccionadas de Lima, con protocolos
                            de seguridad.
                        </div>
                    </div>

                    <!-- Servicio 3 -->
                    <div class="service-card">
                        <div class="service-icon">
                            <img src="servicios/servicio3.svg" alt="Atención a empresas">
                        </div>
                        <div class="service-title">Atención a empresas</div>
                        <div>
                            Operaciones frecuentes, pagos al exterior y montos especiales, con seguimiento
                            personalizado.
                        </div>
                    </div>

                    <!-- Servicio 4 -->
                    <div class="service-card">
                        <div class="service-icon">
                            <img src="servicios/servicio4.svg" alt="Operaciones rápidas">
                        </div>
                        <div class="service-title">Operaciones rápidas</div>
                        <div>
                            Procesos ágiles para que tu operación se complete en pocos minutos, sin complicaciones.
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- GALERÍA -->
        <section id="galeria" class="gallery">
            <div class="container">
                <h2 class="section-title">Galería</h2>
                <p class="section-subtitle">
                    Conoce nuestras tiendas y al equipo que diariamente te acompaña en cada operación.
                </p>

                <div class="gallery-wrapper">
                    <div class="gallery-track" id="galleryTrack">
                        <div class="gallery-item">
                            <img src="img/galeria1.jpg" alt="Fachada oficina José Pardo" />
                            <div class="gallery-label">Oficina José Pardo · Miraflores</div>
                        </div>

                        <div class="gallery-item">
                            <img src="img/galeria2.jpg" alt="Fachada oficina La Aurora" />
                            <div class="gallery-label">Oficina La Aurora · Miraflores</div>
                        </div>

                        <div class="gallery-item">
                            <img src="img/galeria3.jpg" alt="Equipo de atención" />
                            <div class="gallery-label">Equipo de atención · Casa de Cambio La Aurora</div>
                        </div>
                    </div>

                    <div class="gallery-dots" id="galleryDots">
                        <div class="gallery-dot active" data-index="0"></div>
                        <div class="gallery-dot" data-index="1"></div>
                        <div class="gallery-dot" data-index="2"></div>
                    </div>
                </div>
            </div>
        </section>

        <!-- OFICINAS -->
        <section id="oficinas" class="offices">
            <div class="container">
                <h2 class="section-title">Nuestras oficinas</h2>
                <p class="section-subtitle">
                    Dos puntos estratégicos donde operamos cambio de divisas con tecnología, seguridad y atención
                    directa.
                </p>

                <div class="offices-grid">
                    <!-- Oficina 1 -->
                    <div class="office-card">
                        <div class="office-top">
                            <div class="office-icon">💱</div>
                            <div class="office-badge">Centro financiero</div>
                        </div>

                        <div class="office-title">Oficina José Pardo</div>
                        <div class="office-location">📍 Av. José Pardo 610 · Miraflores</div>

                        <div class="office-info">
                            <div>
                                <strong>Horario</strong>
                                <span>Lu – Vi: 9:00 am a 7:30 pm</span>
                                <span>Sa – Do – Fe: 9:00 am a 6:00 pm</span>
                            </div>
                            <div>
                                <strong>Teléfonos</strong>
                                <span>01 447 8117</span>
                                <span>958 984 504</span>
                                <span>958 627 924</span>
                            </div>
                        </div>

                        <div class="office-footer">
                            <span>🔐 Seguridad verificada</span>
                            <span>🚚 Delivery en zonas cercanas</span>
                        </div>
                    </div>

                    <!-- Oficina 2 -->
                    <div class="office-card accent">
                        <div class="office-top">
                            <div class="office-icon">🏦</div>
                            <div class="office-badge">Sede La Aurora</div>
                        </div>

                        <div class="office-title">Oficina Arias Schreiber</div>
                        <div class="office-location">📍 Av. Arias Schreiber 169 · Urb. La Aurora · Miraflores</div>

                        <div class="office-info">
                            <div>
                                <strong>Horario</strong>
                                <span>Lu – Vi: 9:00 am a 6:00 pm</span>
                                <span>Sa: 9:00 am a 1:00 pm</span>
                            </div>
                            <div>
                                <strong>Teléfonos</strong>
                                <span>01 273 7615</span>
                                <span>994 007 296</span>
                            </div>
                        </div>

                        <div class="office-footer">
                            <span>⚡ Atención inmediata</span>
                            <span>👤 Personal capacitado</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- CONTACTO -->
        <section id="contacto" class="contact">
            <div class="container contact-grid">
                <div>
                    <h2 class="contact-title">¿Listo para cambiar con confianza?</h2>
                    <p class="contact-text">
                        Escríbenos por WhatsApp o utiliza el formulario para coordinar tu próxima operación de cambio,
                        ya sea en oficina o mediante servicio delivery.
                    </p>

                    <ul class="contact-list">
                        <li>📍 Miraflores · Lima · Perú</li>
                        <li>📞 Central: 01 447 8117</li>
                        <li>💬 <a href="https://wa.me/51958984504" target="_blank"> WhatsApp: +51 958 984 504
                            </a> </li>
                        <li>📩 <a href="mailto:informes@laauroramoneyexchange.com">
                                informes@laauroramoneyexchange.com
                            </a></li>

                    </ul>



                    <div class="contact-note">
                        Atención sujeta a horarios de oficina y a la disponibilidad de moneda en cada sede.
                    </div>
                </div>

                <div class="contact-form">
                    <form action="mailto:informes@laauroramoneyexchange.com" method="POST" enctype="text/plain"
                        onsubmit="event.preventDefault(); alert('Gracias, hemos recibido tu mensaje. Te contactaremos pronto.');">
                        <div class="form-row">
                            <div class="form-group">
                                <label for="nombre">Nombre</label>
                                <input id="nombre" type="text" placeholder="Tu nombre completo" required />
                            </div>
                            <div class="form-group">
                                <label for="telefono">Teléfono</label>
                                <input id="telefono" type="tel" placeholder="+51 ..." required />
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="correo">Correo electrónico (opcional)</label>
                            <input id="correo" type="email" placeholder="tucorreo@ejemplo.com" />
                        </div>

                        <div class="form-group">
                            <label for="mensaje">Mensaje</label>
                            <textarea id="mensaje" placeholder="Cuéntanos qué tipo de operación deseas realizar."
                                required></textarea>
                        </div>

                        <button type="submit" class="btn" style="width:100%;justify-content:center;">
                            Enviar consulta
                        </button>
                    </form>
                </div>
            </div>
        </section>
    </main>

    <script src="js/scripts.js?v=<?= $version ?>"></script>
</body>

</html>