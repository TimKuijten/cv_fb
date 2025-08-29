<style>
  :root{
    --brand:#0A212E;   /* color principal */
    --ink:#0A212E;
    --ink-2:#294957;
    --bg:#E6EEF2;
    --card:#FFFFFF;
    --accent:#0A212E;  /* acentos también en el color principal */
    --muted:#6b7280;
    --shadow: 0 12px 32px rgba(10,33,46,.1);
    --radius: 8px;
  }
  .kcvf *{box-sizing:border-box}
  .kcvf{
    font-family: ui-sans-serif, system-ui, -apple-system, Segoe UI, Roboto, Helvetica, Arial;
    color:var(--ink);
    background: var(--bg);
  }
  .kcvf a{color:var(--accent);text-decoration:none}
  .kcvf a:hover{text-decoration:underline}
  .kcvf-container{max-width:1100px;margin:0 auto;padding: clamp(20px, 4vw, 48px);}

  /* HERO */
  .kcvf-hero{
    display:grid;grid-template-columns:1.1fr .9fr;gap:36px;align-items:center;
    background:linear-gradient(180deg,#fff 0%,#f8fafc 100%);
    border-radius:var(--radius);box-shadow:var(--shadow);padding:clamp(24px,3vw,40px);
    position:relative;overflow:hidden
  }
  .kcvf-eyebrow{
    display:inline-flex;align-items:center;gap:8px;
    background:rgba(10,33,46,.08); color:#0A212E; padding:6px 12px;
    border-radius:999px; font-weight:600; letter-spacing:.2px; font-size:.9rem;
  }
  .kcvf-title{font-size: clamp(28px,4.2vw,44px); line-height:1.05; margin:.4rem 0 1rem}
  .kcvf-title .accent{color:var(--accent)}
  .kcvf-sub{color:var(--ink-2); font-size: clamp(15px,1.4vw,18px); max-width:52ch}
  .kcvf-hero-cta{display:flex;gap:14px;align-items:center;margin-top:18px;flex-wrap:wrap}
  .kcvf-badge{
    display:inline-flex;align-items:center;gap:8px;background:rgba(10,33,46,.08);color:#0A212E;
    padding:8px 12px;border-radius:12px;font-weight:600;font-size:.95rem
  }
  .kcvf-hero img{width:100%;height:auto;border-radius:var(--radius);box-shadow: var(--shadow)}

  /* GRID DE VALOR */
  .kcvf-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:18px;margin-top:34px}
  .kcvf-card{
    background:var(--card);border:1px solid #e9eef5;border-radius:var(--radius);padding:20px;
    box-shadow:0 6px 18px rgba(10,33,46,.06)
  }
  .kcvf-card h3{margin:.2rem 0 .4rem; font-size:1.05rem}
  .kcvf-card p{color:var(--muted);font-size:.98rem;line-height:1.55}
  .kcvf-ico{
    width:38px;height:38px;border-radius:12px;display:inline-grid;place-items:center;
    background:rgba(10,33,46,.08);color:#0A212E;margin-bottom:10px
  }
  .kcvf-ico svg{stroke:currentColor}

  /* CÓMO FUNCIONA */
  .kcvf-steps{margin-top:42px;display:grid;grid-template-columns:1.1fr .9fr;gap:28px;align-items:center}
  .kcvf-steps ol{counter-reset: step; list-style:none; padding:0; margin:0}
  .kcvf-steps li{
    counter-increment: step; background:#fff;border:1px solid #e9eef5;border-radius:var(--radius);
    padding:16px 16px 16px 58px; position:relative; margin-bottom:12px; box-shadow:0 8px 20px rgba(10,33,46,.05)
  }
  .kcvf-steps li:before{
    content: counter(step); position:absolute; left:16px; top:50%; transform:translateY(-50%);
    width:32px;height:32px;border-radius:10px; background:var(--accent); color:#fff; display:grid; place-items:center;
    font-weight:700
  }
  .kcvf-steps p{margin:.2rem 0; color:var(--ink-2)}
  .kcvf-steps .illus img{width:100%; border-radius:var(--radius); box-shadow: var(--shadow)}

  /* BLOQUE FORMULARIO */
  .kcvf-formwrap{
    margin-top:38px; background:#fff; border:1px solid #e9eef5; border-radius:var(--radius);
    padding:22px; box-shadow:var(--shadow)
  }
  .kcvf-formwrap h3{margin:0 0 8px}
  .kcvf-formwrap p{color:var(--muted)}
  .kcvf-toggle{margin-top:10px;padding:8px 14px;background:var(--accent);color:#fff;border:none;border-radius:6px;cursor:pointer}
  .kcvf-shortcode{display:none;margin-top:14px; padding:16px; border-radius:12px; background:#f4f6f8; border:1px dashed rgba(10,33,46,.25)}
  .kcvf-shortcode strong{color:var(--ink)}

  /* FAQ */
  .kcvf-faq{margin-top:42px; display:grid; grid-template-columns:repeat(2,1fr); gap:18px}
  .kcvf-faq .q{
    background:#fff;border:1px solid #e9eef5;border-radius:var(--radius);padding:18px;box-shadow:0 10px 18px rgba(10,33,46,.05)
  }
  .kcvf-faq h4{margin:.2rem 0 .3rem}

  /* Responsive */
  @media (max-width: 900px){
    .kcvf-hero, .kcvf-steps{grid-template-columns:1fr}
    .kcvf-grid{grid-template-columns:1fr; gap:14px}
    .kcvf-faq{grid-template-columns:1fr}
  }
</style>

<section class="kcvf">
  <div class="kcvf-container">

    <!-- REGISTRO INICIAL -->
    <section class="kcvf-formwrap" style="margin-top:0">
      <h3>Registra tu CV para futuras oportunidades</h3>
      <p>Sube tu CV para que podamos contactarte y mantenerte informado.</p>
      <button class="kcvf-toggle" id="toggle-cv-form" aria-expanded="false">Registrar CV</button>
      <div class="kcvf-shortcode" id="cv-form">
        <strong>[kovacic_cv_register]</strong>
      </div>
    </section>

    <!-- HERO -->
    <header class="kcvf-hero">
      <div>
        <span class="kcvf-eyebrow">Desarrollado internamente por Kovacic Executive Talent Research</span>
        <h1 class="kcvf-title">Mejora el impacto de tu CV <span class="accent"></span></h1>
        <p class="kcvf-sub">
          Nuestro sistema analiza tu CV a partir de <strong>múltiples puntos de evaluación</strong>
          (estructura, impacto, palabras clave, ATS y más) para ofrecerte un <strong>feedback personalizado</strong>
          que te ayude a destacar en tus próximas oportunidades.
        </p>
        <div class="kcvf-hero-cta">
          <span class="kcvf-badge">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M20 7L9 18l-5-5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
            Feedback claro y accionable
          </span>
          <span class="kcvf-badge">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M12 8v4l3 3" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><circle cx="12" cy="12" r="9" stroke="currentColor" stroke-width="2"/></svg>
            En minutos
          </span>
          <span class="kcvf-badge">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M4 12h16M4 6h16M4 18h10" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg>
            Orientado a ATS
          </span>
        </div>
      </div>

      <!-- IMAGEN HERO (sustituye la URL por la tuya) -->
      <img src="https://images.unsplash.com/photo-1581090700227-3b5c702d1a94?auto=format&fit=crop&w=900&q=80"
           alt="Reclutadores profesionales analizando un CV">
    </header>

    <!-- GRID DE VALOR -->
    <section class="kcvf-grid" aria-label="Puntos de valor">
      <article class="kcvf-card">
        <div class="kcvf-ico">
          <svg width="22" height="22" viewBox="0 0 24 24" fill="none"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><circle cx="12" cy="7" r="4" stroke="currentColor" stroke-width="2"/></svg>
        </div>
        <h3>Personalizado</h3>
        <p>El feedback se adapta a tu <strong>rol y sector</strong>, resaltando logros y fortalezas relevantes.</p>
      </article>
      <article class="kcvf-card">
        <div class="kcvf-ico">
          <svg width="22" height="22" viewBox="0 0 24 24" fill="none"><path d="M3 12h18M3 6h18M3 18h12" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg>
        </div>
        <h3>Listo para ATS</h3>
        <p>Recomendaciones para mejorar <strong>legibilidad y palabras clave</strong> sin perder estilo profesional.</p>
      </article>
      <article class="kcvf-card">
        <div class="kcvf-ico">
          <svg width="22" height="22" viewBox="0 0 24 24" fill="none"><path d="M12 1v4M12 19v4M4.22 4.22l2.83 2.83M16.95 16.95l2.83 2.83M1 12h4M19 12h4M4.22 19.78l2.83-2.83M16.95 7.05l2.83-2.83" stroke="currentColor" stroke-width="2" stroke-linecap="round"/></svg>
        </div>
        <h3>Desarrollado in-house</h3>
        <p>Solución creada por <strong>Kovacic Executive Talent Research</strong> para impulsar tu candidatura.</p>
      </article>
    </section>

    <!-- CÓMO FUNCIONA -->
    <section class="kcvf-steps">
      <div>
        <h2>¿Cómo funciona?</h2>
        <ol>
          <li>
            <strong>Sube tu CV y cuéntanos tu objetivo.</strong>
            <p>Indica el rol/área y sector para un análisis más preciso.</p>
          </li>
          <li>
            <strong>Analizamos múltiples puntos de evaluación.</strong>
            <p>Estructura, cuantificación de logros, keywords, legibilidad y adecuación a ATS.</p>
          </li>
          <li>
            <strong>Recibe tu feedback claro y accionable.</strong>
            <p><em>Top 5 mejoras</em>, consejos de métricas, revisión por secciones y un <em>resumen mejorado</em>.</p>
          </li>
        </ol>
      </div>
      <div class="illus">
        <!-- Ilustración alternativa del mismo estilo (cambia la URL) -->
        <img src="https://images.unsplash.com/photo-1551836022-d5d88e9218df?auto=format&fit=crop&w=900&q=80"
             alt="Ejecutivo revisando un currículum en la oficina">
      </div>
    </section>

    <!-- EXPLICACIÓN OFICIAL -->
    <section style="margin-top:36px">
      <div class="kcvf-card" style="padding:24px">
        <h2 style="margin:.2rem 0 10px">Por qué este generador</h2>
        <p style="color:var(--ink-2); max-width:80ch">
          En <strong>Kovacic Executive Talent Research</strong> hemos desarrollado internamente esta herramienta para ayudarte a
          <strong>optimizar tu CV</strong> con recomendaciones prácticas. El sistema combina señales que los reclutadores valoran
          (claridad, impacto, relevancia, palabras clave y cumplimiento ATS) para ofrecerte un <strong>feedback personalizado</strong>
          que mejore tu presentación y posicione mejor tu candidatura.
        </p>
      </div>
    </section>

    <!-- FORMULARIO (SHORTCODE DEL PLUGIN) -->
    <section class="kcvf-formwrap" id="enviar-cv">
      <h3>Envía tu CV para feedback</h3>
      <p>Sube tu documento y recibe recomendaciones en pocos minutos.</p>
      <div class="kcvf-shortcode" style="display:block">
        <strong>[kovacic_cv_submit]</strong>
      </div>
    </section>

    <!-- Se ha eliminado el bloque CTA final a petición del usuario -->

  </div>
</section>
<script>
document.addEventListener('DOMContentLoaded', function(){
  const btn = document.getElementById('toggle-cv-form');
  const form = document.getElementById('cv-form');
  if(btn && form){
    btn.addEventListener('click', function(){
      const open = form.style.display === 'block';
      form.style.display = open ? 'none' : 'block';
      btn.setAttribute('aria-expanded', String(!open));
      btn.textContent = open ? 'Registrar CV' : 'Ocultar formulario';
    });
  }
});
</script>
