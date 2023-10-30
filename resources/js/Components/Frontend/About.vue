<template>
  <section id="about" class="section bg-stone-100 py-12 lg:py-32 min-h-[800px]">
    <div class="mx-auto" v-motion
    :initial="{ opacity: 0, y: 100 }"
    :visible="{ opacity: 1, y: 0 }"
    :delay="200">
      <div class="flex flex-col xl:flex-row gap-24 max-w-screen-xl items-center justify-between mx-auto p-4">
        <img src="http://127.0.0.1:8000/img/about.jpg" alt="About" class="object-cover h-full w-[556px] md:mx-auto lg:mx-0 rounded-2xl">
        <div class="flex flex-col items-center text-center lg:items-start lg:text-left">
          <div class="flex flex-col">
            <h2 class="text-3xl lg:text-4xl font-medium lg:font-extrabold mb-3">About Me</h2>
            <p class="mb-4 text-black">Software Engineer</p>
            <hr class="mb-8 opacity-90"/>
            <p class="mb-8">Hi there! My name is Eno, Hokaha Bassey, I am a creative and passionate individual with a strong work ethic and a desire to learn. I am always looking for new challenges and opportunities to grow and develop my skills. I am also a team player and I enjoy working with others to achieve common goals.,<br/> <br/>I am excited to start this next chapter in my career and I look forward to working with new people and contributing to new projects.</p>
          </div>
          <a href="#contact"
            class="mt-8 inline-block rounded bg-blue-600 px-12 py-3 text-sm font-medium text-white duration-500 hover:tracking-wider hover:bg-blue-400 focus:outline-none focus:ring focus:ring-blue-400">
            Work with me
          </a>
        </div>
      </div>
    </div>
  </section>
</template>