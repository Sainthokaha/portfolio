<script setup>
  defineProps({
    skills: Object
  });
</script>

<template>
  <section class="bg-blue-200 py-16">
    <div class="mx-auto max-w-screen-xl px-4 py-8 sm:py-12 sm:px-6 lg:py-16 lg:px-8">
      <div class="grid grid-cols-8 md:grid-flow-col">
        <div class="flex items-center justify-center" v-for="skill in skills.data" :key=skill.id>
          <img :src="skill.image" :alt="skill.name" class="h-20">
        </div>
      </div>
    </div>
  </section>
</template>