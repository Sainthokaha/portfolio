<script setup>
  import Project from './Project.vue';
  import {ref} from "vue";
  const props = defineProps({
    skills: Object,
    projects: Object
  });

  const filteredProjects = ref(props.projects.data);
  const selectedSkill = ref("all");
  const filterProjects = (id) => {
    if(id === 'all') {
      filteredProjects.value = props.projects.data;
      selectedSkill.value = id;
    } else {
      filteredProjects.value = props.projects.data.filter(project => {
        return project.skill.id === id;
      });
      selectedSkill.value = id;
    }
  };
</script>

<template>
  <div class="mx-auto max-w-screen-xl px-4 py-8 sm:py-12 sm:px-6 lg:py-16 lg:px-8">
    <nav class="mb-12 border-b-2 border-blue-200">
      <ul class="flex flex-col lg:flex-row justify-evenly items-center">
        <li class="cursor-pointer capitalize m-4">
          <button
          @click="filterProjects('all')"
          class="flex text-center px-4 py-2"
          :class="[selectedSkill === 'all' ? 'inline-block rounded bg-blue-600 px-12 py-3 text-sm font-medium text-white transition   focus:outline-none focus:ring focus:ring-blue-400' : '',]">
            All
          </button>
        </li>
        <li class="cursor-pointer capitalize m-4" v-for="projectSkill in skills.data" :key="projectSkill.id">
          <button
          @click="filterProjects(projectSkill.id)"
          class="flex text-center px-4 py-2"
          :class="[selectedSkill === projectSkill.id ? 'inline-block rounded bg-blue-600 px-12 py-3 text-sm font-medium text-white transition focus:outline-none focus:ring focus:ring-blue-400' : '',]">
            {{ projectSkill.name }}
          </button>
        </li>
      </ul>
    </nav>
    <section class="grid gap-y-12 lg:grid-cols-3 lg:gap-8">
      <Project v-for="project in filteredProjects" :key="project.id" :project="project" />
    </section>
  </div>
</template>