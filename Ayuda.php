<?php
include_once('php/conexion.php');
include_once('php/funciones.php');
session_start();
revisa_login();

?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>Ayuda - Cultivos del Sol</title>
  <link rel="shortcut icon" href="img/logo.png">
  <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
  <link href="css/styles.css" rel="stylesheet" />
  <link rel="stylesheet" href="css/estilos.css">
  <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="css/Configuracion.css">
</head>

<body class="sb-nav-fixed">
  <?php include_once('inc/nav.php'); ?>
  <div id="layoutSidenav">
    <?php include_once('inc/sidenav.php'); ?>
    <div id="layoutSidenav_content">
      <main class="ayuda">
        <h1>AYUDA</h1>
        <button onclick="mostrarPreguntasFrecuentes()">Preguntas frecuentes (FAQ)</button>
        <button onclick="mostrarPoliticas()">Políticas y Términos de Servicio</button>
        <button onclick="mostrarSoporteTecnico()">Soporte Técnico</button>
        <script>
          function mostrarPreguntasFrecuentes() {
            document.getElementById("faq").style.display = "block";
            document.getElementById("policies").style.display = "none";
            document.getElementById("technicalSupport").style.display = "none";
          }

          function mostrarPoliticas() {
            document.getElementById("faq").style.display = "none";
            document.getElementById("policies").style.display = "block";
            document.getElementById("technicalSupport").style.display = "none";
          }

          function mostrarSoporteTecnico() {
            document.getElementById("faq").style.display = "none";
            document.getElementById("policies").style.display = "none";
            document.getElementById("technicalSupport").style.display = "block";
          }
        </script>
        <div id="faq" style="display: none;">
          <h2>Preguntas Frecuentes (FAQ)</h2>

          <h3>1. ¿Cuáles son los productos que exporta la empresa?</h3>
          <p>Nuestra empresa agroexportadora se especializa en la exportación de una amplia variedad de productos
            agrícolas.</p>

          <h3>2. ¿En qué países exportan sus productos?</h3>
          <p>Exportamos nuestros productos a diversos países del Peru. Algunos de nuestros principales destinos incluyen
            Lima,Íquitos,Piura y Trujillo. Estamos constantemente explorando nuevos mercados y expandiendo nuestra
            presencia internacional.</p>

          <h3>3. ¿Cómo garantizan la calidad de los productos exportados?</h3>
          <p>En nuestra empresa, nos comprometemos a mantener altos estándares de calidad en todas las etapas de la
            exportación. Realizamos rigurosos controles de calidad, desde la selección y clasificación de los productos
            hasta su empaque y transporte. Además, trabajamos en estrecha colaboración con nuestros agricultores y
            proveedores para garantizar el cumplimiento de las normas y regulaciones de calidad.</p>

          <h3>4. ¿Qué certificaciones y estándares cumplen sus productos?</h3>
          <p>Nuestros productos cumplen con una variedad de certificaciones y estándares reconocidos a nivel nacional e
            internacional. Algunos ejemplos incluyen certificaciones de calidad, como Global GAP y HACCP, y estándares
            de seguridad alimentaria, como los establecidos por la FDA (Administración de Alimentos y Medicamentos) y la
            UE (Unión Europea).</p>

          <h3>5. ¿Cómo se realiza el transporte de los productos exportados?</h3>
          <p>Nos aseguramos de utilizar métodos de transporte adecuados para preservar la frescura y calidad de nuestros
            productos durante la exportación. Utilizamos una combinación de transporte terrestre, marítimo y aéreo,
            según las necesidades y requisitos de cada envío. Trabajamos con compañías de transporte confiables y
            seguimos las mejores prácticas en la logística de exportación.</p>

          <h3>6. ¿Cuáles son los plazos de entrega para los pedidos de exportación?</h3>
          <p>Los plazos de entrega pueden variar según el destino y los detalles del pedido. Trabajamos diligentemente
            para cumplir con los plazos acordados y asegurar la entrega oportuna de los productos. Para obtener
            información más precisa sobre los plazos de entrega, te recomendamos ponerte en contacto con nuestro equipo
            de atención al cliente o consulta tu acuerdo de compra.</p>

          <h3>7. ¿Ofrecen servicios de personalización de productos o etiquetas?</h3>
          <p>Sí, ofrecemos servicios de personalización de productos y etiquetas según las necesidades de nuestros
            clientes. Si estás interesado en personalizar tus productos o etiquetas, te invitamos a comunicarte con
            nuestro equipo de ventas para discutir los detalles y opciones disponibles.</p>

          <h3>8. ¿Cómo puedo realizar un pedido de exportación?</h3>
          <p>Para realizar un pedido de exportación, te recomendamos comunicarte con nuestro equipo de ventas a través
            de los cananales de contacto proporcionados en nuestro sitio web. Nuestro equipo estará encantado de
            brindarte información adicional, asesoramiento sobre los productos y procesos de exportación, y guiarlo a
            través del proceso de pedido.</p>

          <h3>9. ¿Cuáles son los términos de pago aceptados?</h3>
          <p>Aceptamos una variedad de términos de pago para facilitar la realización de pedidos. Algunas opciones
            comunes incluyen transferencia bancaria, carta de crédito irrevocable (L/C) y pagos en efectivo. Nuestro
            equipo de ventas podrá proporcionarte información detallada sobre los términos de pago disponibles y
            asistirte en la elección de la opción más conveniente para ti.</p>
          <h3>10. ¿Brindan servicios de asesoramiento en el proceso de importación?</h3>
          <p>Sí, ofrecemos servicios de asesoramiento en el proceso de importación para nuestros clientes. Entendemos
            que el proceso de importación puede ser complejo y estamos comprometidos en ayudar a nuestros clientes a
            navegar por los requisitos aduaneros, aranceles y regulaciones específicas de cada país. Nuestro equipo
            estará disponible para brindarte información y asistencia en el proceso de importación.</p>
          <p>Si tienes alguna pregunta adicional o necesitas más información, no dudes en consultar nuestra sección de
            Preguntas Frecuentes en nuestro sitio web o contactar a nuestro equipo de atención al cliente. Estamos aquí
            para ayudarte.</p>


        </div>

        <div id="policies" style="display: none;">
          <h2>Políticas y Términos de Servicio</h2>

          <p>Por favor, lee nuestras políticas y términos de servicio cuidadosamente antes de utilizar nuestro servicio.
          </p>
          <h2>Política de Calidad:</h2>

          <p>En nuestra empresa agroexportadora, nos comprometemos a mantener altos estándares de calidad en todas las
            etapas de nuestro proceso de agroexportación. Esta política establece los principios y objetivos que guían
            nuestras actividades y busca garantizar la satisfacción de nuestros clientes y el cumplimiento de las normas
            y regulaciones aplicables.</p>

          <ul>
            <li>Cumplimiento normativo: Nos comprometemos a cumplir con todas las leyes, regulaciones y normas
              relacionadas con la agroexportación, incluyendo aquellas relacionadas con la seguridad alimentaria, la
              trazabilidad y el etiquetado de productos agrícolas.</li>

            <li>Control de calidad: Implementamos rigurosos controles de calidad en todas las etapas, desde la selección
              y clasificación de productos hasta su empaque y transporte. Nos aseguramos de que nuestros productos
              cumplan con los estándares de calidad acordados y satisfagan las necesidades y expectativas de nuestros
              clientes.</li>

            <li>Mejora continua: Buscamos constantemente oportunidades de mejora en nuestros procesos y prácticas para
              optimizar la calidad de nuestros productos y la eficiencia de nuestras operaciones. Fomentamos la
              participación activa de todos los empleados en la identificación y aplicación de mejoras.</li>
          </ul>

          <h2>Procedimiento de Seguridad Alimentaria:</h2>

          <p>La seguridad alimentaria es una prioridad en nuestra empresa. Este procedimiento describe las medidas y
            controles que implementamos para garantizar la seguridad y la inocuidad de nuestros productos agrícolas,
            desde su producción hasta su entrega final.</p>

          <ul>
            <li>Buenas prácticas agrícolas: Promovemos el uso de prácticas agrícolas seguras y sostenibles, incluyendo
              la gestión responsable de plaguicidas, el control de residuos y la protección del medio ambiente.
              Capacitamos a nuestros agricultores y proveedores en estas prácticas y realizamos auditorías regulares
              para asegurar su cumplimiento.</li>

            <li>Manejo y almacenamiento adecuados: Establecemos pautas claras para el manejo y almacenamiento de
              productos agrícolas, asegurando condiciones óptimas de temperatura, humedad y ventilación para preservar
              su calidad y reducir el riesgo de contaminación.</li>

            <li>Seguimiento y trazabilidad: Implementamos sistemas de seguimiento y trazabilidad para registrar y
              rastrear el origen de nuestros productos, desde el campo hasta su destino final. Esto nos permite
              identificar cualquier problema potencial y tomar medidas correctivas de manera rápida y eficiente.</li>

            <li>Capacitación y concientización: Brindamos capacitación regular a nuestros empleados sobre los aspectos
              clave de la seguridad alimentaria y promovemos la importancia de la higiene personal, el lavado de manos y
              el manejo adecuado de alimentos en todas nuestras operaciones.</li>
          </ul>

          <ul>
            <h2>Política de Privacidad</h2>

            <p>En [nombre de la empresa agroexportadora], nos comprometemos a proteger la privacidad de nuestros
              usuarios y clientes. Esta Política de Privacidad describe cómo recopilamos, utilizamos y protegemos la
              información personal que se recopila a través de nuestros servicios y plataformas.</p>

            <h3>Información que recopilamos</h3>

            <p>Recopilamos información personal de nuestros usuarios y clientes de diversas maneras, incluyendo, pero no
              limitado a:</p>

            <ul>
              <li>Información de contacto, como nombre, dirección de correo electrónico y número de teléfono.</li>
              <li>Información de identificación, como número de identificación tributaria.</li>
              <li>Información de ubicación, como dirección de envío o ubicación de cultivos.</li>
              <li>Información financiera, como detalles de cuentas bancarias para fines de pagos y transacciones.</li>
            </ul>

            <h3>Uso de la información</h3>

            <p>Utilizamos la información personal recopilada para los siguientes propósitos:</p>

            <ul>
              <li>Procesar pedidos y facilitar la entrega de productos agrícolas.</li>
              <li>Comunicarnos con nuestros usuarios y clientes sobre los servicios, actualizaciones y promociones
                relevantes.</li>
              <li>Mejorar nuestros productos y servicios a través de análisis y estudios de mercado.</li>
              <li>Cumplir con las obligaciones legales y regulatorias aplicables.</li>
            </ul>

            <h3>Compartir información con terceros</h3>

            <p>No vendemos, alquilamos ni compartimos información personal con terceros no afiliados, excepto en las
              siguientes circunstancias:</p>

            <ul>
              <li>Compartimos información con proveedores de servicios que nos ayudan en la operación de nuestro negocio
                y la prestación de servicios a nuestros usuarios y clientes.</li>
              <li>Podemos divulgar información personal cuando sea requerido por ley o en respuesta a una orden judicial
                o solicitud legal.</li>
              <li>En el caso de una fusión, adquisición o venta de activos, podemos transferir información personal a la
                parte involucrada en dicha transacción.</li>
            </ul>

            <h3>Seguridad de la información</h3>

            <p>Implementamos medidas de seguridad adecuadas para proteger la información personal contra accesos no
              autorizados, alteraciones, divulgaciones o destrucciones.</p>

            <h3>Derechos del usuario</h3>

            <p>Los usuarios y clientes tienen importación clave, junto con los requisitos actualizados para la
              exportación de productos agrícolas a esos destinos </p>
            <ol>
              <li><strong>Evaluación del mercado:</strong> Lo primero que debemos hacer es llevar a cabo un análisis
                exhaustivo del nuevo mercado. Esto implica estudiar las demandas, preferencias y necesidades de los
                consumidores locales, así como investigar a nuestros competidores y las barreras comerciales que puedan
                existir.</li>
              <li><strong>Adaptación de productos:</strong> Una vez que hayamos comprendido las particularidades del
                mercado, es importante adaptar nuestros productos para satisfacer las necesidades y preferencias de los
                consumidores locales. Esto podría implicar ajustes en el empaque, etiquetado, presentación o incluso en
                la oferta de productos específicos para ese mercado.</li>
              <li><strong>Establecimiento de alianzas:</strong> Para ingresar con éxito a este nuevo mercado, es
                fundamental establecer alianzas estratégicas con distribuidores y socios locales. La colaboración con
                empresas locales establecidas nos brindará una red de distribución confiable y facilitará la promoción y
                venta de nuestros productos.</li>
              <li><strong>Estrategias de marketing:</strong> Desarrollar una sólida estrategia de marketing es esencial
                para dar a conocer nuestros productos en el nuevo mercado. Debemos identificar los canales de
                comunicación más efectivos, adaptar nuestros mensajes publicitarios y promocionales al público objetivo
                y diseñar campañas que generen un impacto positivo en los consumidores locales.</li>
              <li><strong>Seguimiento y mejora continua:</strong> Una vez que hayamos ingresado al nuevo mercado, es
                importante realizar un seguimiento constante de nuestros resultados y realizar ajustes en función de los
                comentarios y el comportamiento de los consumidores. La mejora continua nos permitirá optimizar nuestra
                posición en el mercado y aprovechar al máximo esta nueva oportunidad.</li>
            </ol>
          </ul>

        </div>
        <div id="technicalSupport" style="display: none;">
          <h2>Soporte Técnico</h2>

          <h3>¿Qué es el Soporte Técnico?</h3>
          <p>En [nombre de la empresa agroexportadora], ofrecemos servicios de soporte técnico para garantizar el
            correcto funcionamiento de los sistemas y tecnologías utilizados en nuestras operaciones. Nuestro equipo de
            soporte técnico está disponible para ayudarte con cualquier problema o consulta relacionada con los aspectos
            tecnológicos de nuestro negocio.</p>

          <h3>Canal de Comunicación</h3>
          <p>Si necesitas soporte técnico, puedes comunicarte con nuestro equipo a través de los siguientes canales:</p>
          <ul>
            <li>Teléfono: +123456789</li>
            <li>Correo electrónico: soporte@empresaagroexportadora.com</li>
          </ul>
          <p>Nuestro equipo de soporte técnico está disponible durante el horario laboral para responder tus consultas y
            brindarte asistencia.</p>

          <h3>Tipo de Problemas que Atendemos</h3>
          <p>Nuestro equipo de soporte técnico está capacitado para resolver una amplia gama de problemas técnicos que
            puedan surgir en nuestras operaciones. Algunos ejemplos de los problemas que atendemos incluyen:</p>
          <ul>
            <li>Fallas en el software de gestión y control de inventario.</li>
            <li>Problemas de conectividad en los sistemas de comunicación interna.</li>
            <li>Dificultades en el acceso y uso de herramientas de análisis y seguimiento de datos.</li>
            <li>Consultas sobre el uso de aplicaciones y plataformas de comercio electrónico.</li>
            <li>Asistencia en la configuración de dispositivos y equipos utilizados en nuestras operaciones.</li>
          </ul>

          <h3>Proceso de Soporte Técnico</h3>
          <p>Al contactar a nuestro equipo de soporte técnico, te pediremos que proporciones detalles sobre el problema
            o consulta que estás experimentando. Esto nos ayudará a comprender mejor la situación y ofrecerte la mejor
            solución posible.</p>
          <p>Nuestro equipo de soporte técnico seguirá un proceso de resolución de problemas que incluye:</p>
          <ol>
            <li>Recopilación de información detallada sobre el problema o consulta.</li>
            <li>Análisis de la situación para identificar posibles causas y soluciones.</li>
            <li>Proporcionar orientación y asistencia para resolver el problema o responder la consulta.</li>
            <li>Seguimiento para garantizar la resolución completa y satisfactoria del problema.</li>
          </ol>

          <h3>Recursos de Autoayuda</h3>
          <p>Además de nuestro equipo de soporte técnico, también proporcionamos recursos de autoayuda para resolver
            problemas comunes. Puedes encontrar guías, tutoriales y preguntas frecuentes en nuestra sección de soporte
            técnico en el sitio web de la empresa. Te recomendamos consultar estos recursos antes de contactar a nuestro
            equipo de soporte técnico, ya que podrían brindarte una solución rápida y sencilla.</p>

          <p>Si tienes alguna pregunta adicional o necesitas más información sobre nuestro soporte técnico, no dudes en
            comunicarte con nosotros a través de los canales de contacto

          <div class="container">

          </div>
        </div>
      </main>
      <?php include_once('inc/footer.php'); ?>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    crossorigin="anonymous"></script>
  <script src="js/scripts.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
  <script src="assets/demo/chart-area-demo.js"></script>
  <script src="assets/demo/chart-bar-demo.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js"
    crossorigin="anonymous"></script>
  <script src="js/datatables-simple-demo.js"></script>
</body>

</html>