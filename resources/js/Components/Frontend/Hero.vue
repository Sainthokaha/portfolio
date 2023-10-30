<script setup>

</script>

<template>
  <section id="home" class="bg-red-100">
    <div class="mx-auto max-w-screen-xl px-4 py-8 sm:py-12 sm:px-6 lg:py-16 lg:px-8" v-motion
    :initial="{ opacity: 0, y: 100 }"
    :visible="{ opacity: 1, y: 0 }"
    :delay="100">
      <div class="grid grid-cols-1 md:grid-row-1 gap-8 lg:grid-cols-2 lg:gap-16">
        <div class="lg:py-24">
          <h2 class="text-dark-100 text-lg text-md mb-[22px]">Hey, I'm Saint Hokaha! 👋</h2>

          <p class="mt-4 text-4xl leading-[44px] md:text-5xl md:leadig-tight lg:text-7xl lg:leadig-[1.2] font-bold md:tracking-[-2px] text-dark">
            I Build & Design <br/> Web Interfaces.
          </p>

          <a href="#home"
            class="mt-8 inline-block rounded bg-blue-600 px-12 py-3 text-sm text-white duration-500 hover:tracking-wider hover:bg-blue-400font-medium text-white duration-500 hover:tracking-wider hover:bg-blue-400 focus:outline-none focus:ring focus:ring-blue-400">
            Work with me
          </a>
          <div class="pt-12">
            <h5 class="text-lg mb-2">Follow me on</h5>
            <div class="flex items-center mb-6">
              <a href="https://www.facebook.com/Sainthokaha" target="_blank" class="w-12 h-12 rounded-full flex items-center justify-center border border-white text-dark hover:bg-blue-700 mr-3 sm:mr-4 hover:scale-75">
                <img src="http://127.0.0.1:8000/img/facebook (1).svg" alt="facebook">
              </a>
              <a href="https://www.instagram.com/st_hokaha/" target="_blank" class="w-12 h-12 rounded-full flex items-center justify-center border border-white text-dark hover:bg-blue-700 mr-3 sm:mr-4 hover:scale-75">
                <img src="http://127.0.0.1:8000/img/instagram (1).svg" alt="instagram">
              </a>
              <a href=" https://x.com/SaintHokaha" target="_blank" class="w-12 h-12 rounded-full flex items-center justify-center border border-white text-dark hover:bg-blue-700 mr-3 sm:mr-4 hover:scale-75">
                <img src="http://127.0.0.1:8000/img/twitter.svg" alt="twitter">
              </a>
              <a href="https://Wa.me/+2347063551444?text=I+contacted+you+through+your+website❤+please+create+a+website+for+me______" target="_blank" class="w-12 h-12 rounded-full flex items-center justify-center border border-white text-dark hover:bg-blue-700 mr-3 sm:mr-4 hover:scale-75">
                <img src="http://127.0.0.1:8000/img/whatsapp (1).svg" alt="whatsapp">
              </a>
            </div>
          </div>
        </div>
        <div class="flex flex-1 h-full justify-end items-center mt-8 md:mt-0">
          <img alt="Hero"
            src="http://127.0.0.1:8000/img/hero.webp"
            class="rounded-lg" />
        </div>
      </div>
    </div>
  </section>
</template>