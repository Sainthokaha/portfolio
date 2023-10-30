<script setup>
  import Projects from './Projects.vue';
  defineProps({
    skills: Object,
    projects: Object
  });
</script>

<template>
    <section id="portfolio" class="py-12 lg:py-32 bg-red-100 min-h-[800px]">
      <div class="container mx-auto" v-motion
    :initial="{ opacity: 0, y: 100 }"
    :visible="{ opacity: 1, y: 0 }"
    :delay="200">
        <div class="flex flex-col items-center text-center">
          <h2 class="text-3xl lg:text-4xl font-medium lg:font-extrabold mb-5">My latest work</h2>
          <p class="text-base text-paragraph mb-16 lg:mb-24 max-w-[520px]">This is a brief list of my latest projects. Please highlight the key features and benefits of the projects, and click on any of the images to see the full projects on my GitHub repository.</p>
        </div>
      </div>
      <Projects :skills="skills" :projects="projects" />
    </section>
</template>