# Genesis framework

## Qué es Genesis framework

[Genesis framework](my.studiopress.com/themes/genesis/) es un tema robusto que actua como plataforma para crear tu propio tema de WordPress. El framework Genesis integra todas las características de SEO, securidad y rendimiento necesitadas para ayudarte a tener el mejor sitio posible.

Puedes construir tu sitio con Genesis Framework usando el tema hijo _Sample_ incluido, o puedes comprar uno de los muchos temas hijos que hagan lo que realmente quieres.

### Archivos del tema

Un tema hijo de Genesis estará compuesto, en parte, por los siguientes elementos:

*  *Screenshot*: Una imagen del diseño que el tema creará con tu contenido.
*  *Hoja de estilos* (style.css): El código CSS que determina el diseño de tu sitio basado en el HTML generado por Genesis y WordPress.
*  *Archivo Functions* (functions.php): Conecta el tema hijo con el framework. Puede añadir, eliminar y modificar los elementos por defecto del framework.
*  *Archivo Front Page* (front-page.php): Normalmente usado para crear un área de widgets o página de inicio personalizada.
*  Otros archivos de plantillas.
*  *Imágenes*: Usadas por las hojas de estilos como parte del diseño.

### Instalar Genesis Framework y un tema hijo

Instalar Genesis Framework y un tema hijo sigue el mismo proceso que instalar cualquier otro tema WordPress, excepto que estamos instalando básicamente dos temas. Primero, tenemos que instalar Genesis Framework y entonces instalamos el tema hijo.

## Configuración básica de Genesis Framework

Genesis Framework incluye muchas configuraciones y opciones básicas que te ayudarán a personalizar cómo se ve y funciona tu sitio.

Algunas de estas opciones pueden ser configuradas dentro del Personalizador de WordPress y algunas pueden ser configuradas en las páginas específicas de configuración de Genesis.

### Configuración del tema en el Personalizador de WordPress

Usando el Personalizador de WordPress, puedes editar las opciones de tu tema hijo y tener una vista preliminar de los cambios antes de publicarlas en tu sitio en producción.

Una vez que activas un tema hijo, verás muchas configuraciones por defecto de WordPress en el Personalizador y algunas específicas de Genesis. Las opciones disponibles variarán según el tema hijo elegido.

### Pantalla de configuración del tema

Una vez que actives un tema hijo, verás un nuevo ítem en el menú del Escritorio de WordPress con la palabra *Genesis*.

Este ítem incluye tres sub-ítems: _Theme Settings_, _SEO Settings_, y _Import/Export_. Algunas veces, los temas hijos tendrán plugins específicos que añadirán otros sub-ítems a este menú. También pueden añadir contenido adicional en la página por defecto de configuración de Genesis.

La página *Theme Settings* contiene opciones generales para controlar la forma en que se comporta tu tema. Algunas de estas configuraciones están disponsibles igualmente en el Personalizador.

Cada una de las cajas en la página puede colapsarse o expandirse pulsando en la cabecera de la caja y puede arratrarse para ordenarlas como quieras. También se pueden ocultar en clickando en la pestaña _Opciones de Pantalla_ en la esquina superior izquierda.

Algunos de los aspectos destacados de la configuración del tema son:

#### Default Layout

Diseño por defecto que va a mostrar nuestro tema. Podemos seleccionar cualquiera de las opciones que vengan con nuestro tema hijo:

*  Contenido, Sidebar primaria.
*  Sidebar primaria, Contenido.
*  Contenido, Sidebar primaria, Sidebar secundaria.
*  Sidebar secundaria, Sidebar primaria, Contenido.
*  Sidebar Secundaria, Contenido, Sidebar Primaria.
*  Contenido ancho máximo.

#### Breadcrumbs (o migas de pan)

Breadcrumbs son una ayuda a la navegación que permite al usuario mantener la pista de su localización en un sitio web en relación con la página de inicio. Esta opción te permite deinfir las páginas dónde las Bredcrumbs se mostrarán.

#### Archivos de Contenido

Esta característica te permite controlar la forma en que la que el contenido se muestra en las páginas de archivo de categorias, etiquetas, autores, fechas y taxonomías.

Puedes elegir entre mostrar el *contenido de la entrada* o mostrar el *extracto de la entrada*. La opción de Imagen Destacada te permite mostrar una miniatura de la primera imagen de la publicación la imagen destacada establecida para la entrada.

La Paginación te permitirá selecionar uno o dos métodos de paginación: _Anterior/Siguiente_ o _Numérico_. Estos enlaces de navegación estarán visible en las páginas de archivo y cuando estés usando la plantilla del blog.

#### Scripts del Header y Footer

Estas áreas de texto te permitirán añadir el código para herramientas cómo scripts de analítica y otros servicios de terceros que requieren que el código se añada al header o el footer de tu sitio. Por ejemplo, el script de tracking de Google Analytics.

### Configuración de SEO

Cuando activas el módulo SEO de Genesis, verás una opción en el Escritorio de WordPress que diga *SEO Settings*.

Si cualquiera de los plugins de SEO conocidos está activo, Genesis SEO se desactivará automáticamente para impedir que existan campos duplicados en el sitio.

Los ajustos por defecto son los recomendados para la mayoría de usuarios. Pero Genesis permite una gran cantidad de ajustes en el SEO.


### Importar y Exportar

Esta funcionalidad te permitirá importar o exportar las opciones de Genesis para usarlas como copia de respaldo o en un sitio diferente.

Esto es configuración específica de Genesis y no incluye la copia del contenido de WordPress. Tampoco incluye la configuración de plugins, widgets u opciones específicas relacionadas con el contenido.

Para más información sobre todo lo que incluye Genesis Framework, échale un vistazo a su guía de iniciación. [Guia de iniciación de Genesis Framework](http://www.studiopress.com/download/genesis-for-beginners-v2.pdf).


## Creando un tema hijo con Genesis

Para aprender a usar Genesis, vamos a empezar desde cero, usando el framework y creando nuestro propio tema hijo. Como ya se explicó en unidades anteriores, para crear un tema hijo tenemos que crear una carpeta en el directorio _themes_ de nuestro WordPres. El nombre de esta carpeta suele ser el nombre del tema añadiéndole el sufijo `-child` pero no es obligatorio, y en este caso, como estamos usando Genesis, podemos crear el nombre de carpeta que queramos, por ejemplo OpenWebinarsGenesis.

Una vez que hayamos creado la carpeta, tenemos que crear el archivo `style.css` y en él sí que tendremos que añadir la línea `Template` para indicarle cuál es nuestro tema padre. El archivo `style.css` quedaría así:

```css
/*
Theme Name: OpenWebinarsGenesis
Theme URI: http://github.com/jarcos/openwebinarsgenesis
Author: Jose Arcos
Author URI: http://www.josearcos.me
Description: Este es un tema de ejemplo creado para el curso de creación de temas de OpenWebinars
Version: 1.0.0
License: GNU General Public License v3 or later
License URI: http://www.gnu.org/licenses/gpl-3.0.html
Tags:
Template: genesis
Text Domain: openwebinarsgenesis
*/
```

En este caso, y para no dedicar tiempo a darle estilos a nuestro temas, importaremos los estilos de Genesis, aunque esto no es lo que se suele hacer normalmente, pero al menos, lo haremos para que no nos duelan los ojos mientras trabajamos con Genesis. Para ello basta con añadir la línea.

`@import url( "../genesis/style.css" );`

### Archivo functions.php

Usando Genesis framework también necesitaremos crear un archivo `functions.php` para poder desenvolver todo el potencial de Genesis. En el archivo `functions` es el segundo sitio en el que asociaremos nuestro tema a Genesis. Realmente, en este archivo "inicializaremos" el framework, y existen dos formas de hacerlo.

La primera forma es incluir el archivo llamado `init.php` que se ubica en la carpeta del framework. Así se hace en la mayoría de los temas hijos de Genesis, y quedaría así:

`include_once( get_template_directory() . '/lib/init.php' );`

Si nos fijamos en el contenido de este archivo, veremos qué es lo que hace. Carga el tema y el textdomain para la internacionalización. También vemos cómo Genesis, por defecto, añade soporte en el tema para una variedad de configuraciones. Por ejemplo, invoca a la función para habilitar el tipo de contenido para la configuración específica de Genesis, `Genesis-specific-settings`. También se definen una serie de variables y se carga los archivos del core de Genesis.

La segunda forma de inicializar Genesis es asociar nuestra función de configuración a este archivo. Este método cumple dos funciones que el primero no hace. Carga el tema hijo antes que el tema padre, que es el estándar en WordPress. Cargando en este orden dejamos que WordPress decida qué archivos o funciones han de ser sobreescritas al cargar el tema padre. En segundo lugar, este método nos permite enganchar (hook) funciones antes de que Genesis se cargue. El código quedaría así:

```php
add_action( 'genesis_setup', 'owg_setup' );
function owg_setup() {
  // Code
}
```

Lo primero que haremos en esta función será definir algunas constantes, así podremos utilizarlas en nuestro tema hijo más tarde. Algunas de las constantes que podremos crear, según necesitemos serán `CHILD_THEME_NAME`, `CHILD_THEME_URL` y `CHILD_THEME_VERSION`. Esto es un paso a crear nuestro Starter theme basado en Genesis. Lo siguiente que haremos será añadir soporte al tema para varios ítems usando la función `add_theme_support`.

Por defecto, Genesis ya tiene soporte para una serie de aspectos que podemos ver dentro del código del archivo `init.php`:

```php
add_theme_support( 'menus' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'genesis-inpost-layouts' );
add_theme_support( 'genesis-archive-layouts' );
add_theme_support( 'genesis-admin-menu' );
add_theme_support( 'genesis-seo-settings-menu' );
add_theme_support( 'genesis-import-export-menu' );
add_theme_support( 'genesis-readme-menu' );
add_theme_support( 'genesis-auto-updates' );
add_theme_support( 'genesis-breadcrumbs' );

//* Maybe add support for Genesis menus
if ( ! current_theme_supports( 'genesis-menus' ) )
  add_theme_support( 'genesis-menus', array(
    'primary'   => __( 'Primary Navigation Menu', 'genesis' ),
    'secondary' => __( 'Secondary Navigation Menu', 'genesis' ),
  ) );

//* Maybe add support for structural wraps
if ( ! current_theme_supports( 'genesis-structural-wraps' ) )
  add_theme_support( 'genesis-structural-wraps', array( 'header', 'menu-primary', 'menu-secondary', 'footer-widgets', 'footer' ) );

//* Turn on HTML5 and responsive viewport if Genesis is active
if ( ! is_child_theme() ) {
  add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption'  ) );
  add_theme_support( 'genesis-responsive-viewport' );
  add_theme_support( 'genesis-accessibility', array(
    '404-page',
    'drop-down-menu',
    'headings',
    'rems',
    'search-form',
    'skip-links',
  ) );
}

}
```

Existen algunas condiciones en este archivo, por ejemplo, si estamos usando un tema hijo no se da soporte a HTML5, viewports o accesibilidad. En nuestro caso, tendremos que indicar en el archivo `functions.php` que queremos incluir soporte para estos ítems.

Otra cosa que podremos añadir en nuestra función de configuración es soporte para widgets en el footer. Además de este área de widgets, podemos añadir todas las que queramos.

Finalmente, nuestra función de configuración quedaría así:

```php
function owg_setup() {

	// Definir constantes del tema
	define( 'CHILD_THEME_NAME', 'openwebinarsgenesis' );
	define( 'CHILD_THEME_URL', 'http://github.com/jarcos/openwebinarsgenesis' );
	define( 'CHILD_THEME_VERSION', '1.0.0' );

	// Añadir soporte para HTML5
	add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption'  ) );

	// Añadir viewport meta tag para navegadores móviles
	add_theme_support( 'genesis-responsive-viewport' );

	// Añadir soporte al tema para accesibilidad
	add_theme_support( 'genesis-accessibility', array(
		'404-page',
		'drop-down-menu',
		'headings',
		'rems',
		'search-form',
		'skip-links',
	) );

	// Añadir soporte al tema para widgets en el footer
	add_theme_support( 'genesis-footer-widgets', 3 );
}
```

Una de las mejores cosas que tiene Genesis es que el tema por defecto trae muchas características. Por ejemplo, existen seis diseños por defecto, lo que significa que no tenemos que crear uno propio para nuestro tema.

![Default layouts](https://clickwp.com/wp-content/uploads/2015/02/genesis-default-layout.png)

En el caso que quisieramos eliminar alguno de estos diseños por defecto, Genesis provee una forma muy fácil de hacerlo. Por ejemplo, si no quisiéramos los diseños con doble sidebar, podríamos eliminarlos con la función `genesis_unregister_layout`.

```php
// Quitar los layous que usan sidebar secundario
genesis_unregister_layout( 'content-sidebar-sidebar' );
genesis_unregister_layout( 'sidebar-content-sidebar' );
genesis_unregister_layout( 'sidebar-sidebar-content' );
```

De la misma forma, para eliminar la sidebar que ya no vamos a usar, añadiremos la siguiente línea:

```php
// Quitar sidebar secundaria
unregister_sidebar( 'sidebar-alt' );
```

Anteriormente, hemos creado el hook para asociar la función `owg_setup`. Pero si añadimos estas características a nuestra función de configuración, algunas sentencias no funcionarán debido a la prioridad en la que se carga el tema hijo. Como dijimos antes, al asociar la configuración de génesis `genesis_setup` con una función de configuración del tema hijo, el orden de carga es, primero el tema hijo y luego el tema padre. Con el simple hecho de añadir una prioridad más baja a nuestra función de configuración, estaremos cargando estas sentencias después de la carga del tema padre. La prioridad por defecto es 10, y en el caso de Genesis, está usando esa prioridad para la configuración, así que en nuestro tema añadiremos una prioridad de 15 para que esta función se cargue después.

`add_action( 'genesis_setup', 'owg_setup', 15 );`

Puedes conocer más detalles sobre los hooks y filters en la documentación de WordPress. [Plugin API](https://codex.wordpress.org/Plugin_API).

#### Widgets en Genesis

Los widgets son uno de los grandes protagonistas en Genesis. Gracias a ellos le damos un gran control al usuario sobre el contenido. Por ello, deberíamos organizar nuestro archivo para registrar widgets de una forma adecuada. Podemos crear una carpeta llamada `includes` y dentro de ella el archivo `widget-areas.php`.

En el archivo `widget-areas.php` registraremos los widgets con la función que provee Genesis, `genesis_register_sidebar`.

```php
genesis_register_sidebar( array(
	'id'            => 'home-welcome',
	'name'          => __( 'Home Welcome', 'scratch' ),
	'description'   => __( 'This is a home widget area that will show on the front page', 'scratch' ),
) );
genesis_register_sidebar( array(
	'id'            => 'call-to-action',
	'name'          => __( 'Call to Action', 'scratch' ),
	'description'   => __( 'This is a call to action widget area that will show on the front page', 'scratch' ),
) );
```

Para llamar a este archivo dentro de nuestro `functions.php` tendremos que añadir esta línea en el archivo:

```php
// Añadir area de widgets
include_once( get_stylesheet_directory() . '/includes/widget-areas.php' );
```

#### Textdomain

Dentro de nuestro archivo functions, también tendremos que cargar el textdomain para la internacionalización de las cadenas, esto lo haremos con la siguiente línea.

`load_child_theme_textdomain( 'openwebinarsgenesis' );`

### Página de inicio

Como ya hemos comentado en otras secciones del curso, la página de inicio de un tema WordPress es determinada por la plantilla (si existe) `front-page.php`. La primera cosa que tendremos que hacer para que nuestra página de inicio esté operativa será escribir la función `genesis();`. Esto haremos para cada plantilla que creemos, y si le echamos un vistazo a esta función que se encuentra en el archivo `framework.php` veremos como carga el header, footer, sidebar y el loop de WordPress.

#### Configurar widgets en página de inicio

Vamos a usar los widgets que hemos creado recientemente. Hay muchas formas de hacerlo, pero veamos una forma básica de hacerlo. Una vez que nos aseguremos que el área de widgets está activa, tenemos que añadir la localización específica en la página. Para ellos crearemos una función de envoltura (wrapper) y el código de la misma sería así:

```php
function owg_home_page_setup() {
  $home_sidebars = array(
    'home-welcome'    => is_active_sidebar( 'home-welcome' ),
    'call-to-action'  => is_active_sidebar( 'call-to-action' ),
  );

  // Devuelve en el caso de que no haya sidebars activas
  if( ! in_array( true, $home_sidebars ) ) {
    return;
  }

  // Añadir Home Welcome area si el widget está activo
  if ( $home_sidebars['home-welcome'] ) {
    //
  }

  // Añadir Call to action area si el widget está activo
  if ( $home_sidebars['call-to-action'] ) {
    //
  }

}
```

#### Mostrar widgets en página de inicio

Tras elegir la localización de los nuevos widgets, tendremos que crear una función para cada uno de ellos y así asociarla a un gancho. Estas funciones podrían quedar así:

```php
function owg_add_home_welcome() {
  genesis_widget_area( 'home-welcome',
    array(
      'before'  => '<div class="home-welcome"><div class="wrap">',
      'after'   => '</div></div>'
    )
  );
}

function owg_add_call_to_action() {
  genesis_widget_area( 'call-to-action',
    array(
      'before'  => '<div class="call-to-action"><div class="wrap">',
      'after'   => '</div></div>'
    )
  );
}
```

Ahora solo necesitamos asociar estas funciones dentro de nuestra función de configuración con el gancho adecuado:

```php
// Añadir Home Welcome area si el widget está activo
if ( $home_sidebars['home-welcome'] ) {
  add_action( 'genesis_after_header', 'owg_add_home_welcome' );
}

// Añadir Call to action area si el widget está activo
if ( $home_sidebars['call-to-action'] ) {
  add_action( 'genesis_after_header', 'owg_add_call_to_action' );
}
```

Hemos añadido la sentencia `add_action()` con el gancho `genesis_after_header`, que será la ubicación dónde coloquemos dichos widgets. Para una guía clara sobre hooks y filters de Genesis, puede usar el plugin [Genesis Visual Hook Guide](https://es.wordpress.org/plugins/genesis-visual-hook-guide/).

Por defecto, al estar cargando la función `genesis();` estamos insertando el loop. Otras de las funcionalidades de Genesis es que podemos eliminar a nuestro antojo las características que Genesis inserta en nuestro tema, por ejemplo, si quisieramos hacer del archivo `front-page.php` una página estática, sin el feed de entradas, podríamos eliminar el loop añadiendo la siguiente línea a nuestra función de configuración:

```php
// Eliminar el loop
remove_action( 'genesis_loop', 'genesis_do_loop' );
```
