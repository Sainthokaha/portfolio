<script setup>
import { Link } from '@inertiajs/vue3';
  defineProps({
    project: Object
  });
</script>

<template>
  <Link :href="project.project_url" class="flex flex-col items-center text-center cursor-pointer" v-motion
    :initial="{ opacity: 0, y: 100 }"
    :enter="{ opacity: 1, y: 0, scale: 1 }"
    :delay="200">
    <div class="mb-6">
      <img :src="project.image" :alt="project.name" class="rounded-2xl h-56">
    </div>
    <span class="group-hover:text-blue-500 capitalize text-blue-500 text-sm mb-3">
      {{ project.skill.name }}
    </span>
    <h3 class="group-hover:text-blue-500 capitalize font-bold text-blue-500 text-2xl mb-3">
      {{ project.name }}
    </h3>
  </Link>
</template>