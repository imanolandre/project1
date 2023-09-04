
<div class="background-img min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100 dark:bg-gray-900">
    <div>
        {{ $logo }}
    </div>
<style>.background-img {
    background-image: url({{asset('images/img.jpg')}});
    background-size: cover; /* Para que la imagen cubra todo el contenedor */
    background-repeat: no-repeat; /* Evita que la imagen se repita */
    min-height: 100vh; /* Asegura que el contenedor tenga al menos el alto de la ventana */

  }
  .bg-glass {
        background-color: hsla(0, 0%, 100%, 0.158) !important;
      }
  </style>

    <div class="bg-glass flex items-center w-100position-left sm:max-w-md mt-6 px-6 py-4 bg-white dark:bg-gray-900 shadow-md overflow-hidden sm:rounded-lg">
        {{ $slot }}
    </div>
</div>
