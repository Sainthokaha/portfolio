<script setup>
  import { ref, onMounted } from 'vue';
  const showMobileMenu = ref("false")
  const scrollBg = ref("false")

  const navigations = [
    {  name: "Home", href: "#home" },
    {  name: "About", href: "#about" },
    {  name: "Portfolio", href: "#portfolio" },
    {  name: "Services", href: "#services" },
    {  name: "Contact", href: "#contact" },
  ]

  const setScrollBg = (value) => {
    scrollBg.value = value;
  }

  onMounted(() => {
    window.addEventListener("scroll", () => {
      return window.scrollY > 50 ? setScrollBg(true) : setScrollBg(false);
    })
  })
</script>

<template>
  <nav class="fixed z-20 w-full border-gray-200" :class="{
    'bg-white' : scrollBg,
    'bg-rose-100' : !scrollBg
  }">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
      <a href="http://127.0.0.1:8000/" class="flex items-center">
        <img src="http://127.0.0.1:8000/img/logo.jpg" class="h-8 mr-3" alt="Saint Logo" />
      </a>
      <button @click="showMobileMenu = !showMobileMenu" data-collapse-toggle="navbar-default" type="button"
        class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-rose-700 rounded-lg md:hidden"
        aria-controls="navbar-default" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M1 1h15M1 7h15M1 13h15" />
        </svg>
      </button>
      <div class="w-full md:block md:w-auto" :class="{hidden : showMobileMenu}" id="navbar-default">
        <ul
          class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-blue-900 rounded-lg md:flex-row md:space-x-8 md:mt-0 md:border-0">
          <li v-for="(navigation, index) in navigations" :key="index">
            <a :href="navigation.href"
              class="block py-2 pl-3 pr-4 text-rose-700 hover:bg-white hover:tracking-wider duration-500 hover:font-bold"
              aria-current="page">{{ navigation.name }}</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</template>