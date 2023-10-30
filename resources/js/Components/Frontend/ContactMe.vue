<script setup>
  import { ref } from 'vue';
  import { useForm } from '@inertiajs/vue3';

  const showMessage = ref(false);

  const form = useForm({
    name: "",
    email: "",
    body: "",
  });

  function setShowMessage(value) {
    showMessage.value = value;
  }

  function cleanForm() {
    form.reset();
    setShowMessage(true)
    setTimeout(() => setShowMessage(false), 2000)
  }

  const submit = () => {
    form.post(route('contact'), {
      preserveScroll: true,
      onSuccess: () => cleanForm(),
    })
  }
</script>

<template>
  <section id="contact" class="bg-blue-200 min-h-[700px]">
    <div class="mx-auto px-22 md:px-10 pt-20" v-motion
    :initial="{ opacity: 0, y: 100 }"
    :visible="{ opacity: 1, y: 0 }"
    :delay="200">
      <div class="flex flex-col items-center text-center p-10">
        <h2 class="text-3xl lg:text-4xl font-medium lg:font-extrabold mb-5">Contact Me</h2>
        <p class="text-base text-paragraph mb-16 lg:mb-24 max-w-[520px]">I'm always happy to chat with potential clients about their projects, big or small. If you have any questions or would like to discuss working together, please don't hesitate to contact me. Also I'm here to help you achieve your goals, so if you have a project in mind, I'd love to hear about it. I'm passionate about helping businesses succeed online, and I'm confident that I can help you achieve your goals. Please feel free to contact me in any way that is convenient for you either through my email, phone number or any of my social media account. I look forward to hearing from you soon!</p>
      </div>
      <div class="flex flex-col lg:flex-row lg:gap-x-8 p-10">
        <div class="flex flex-1 flex-col items-start space-y-8 mb-12 lg:mb-0 lg:pt-2">
          <div class="flex flex-col lg:flex-row gap-x-4">
            <div class="text-blue-200 rounded-sm w-14 h-14 items-start justify-center mt-2 mb-4 lg:mb-0 text-2xl">
              <img src="http://127.0.0.1:8000/img/mail.svg" alt="Mail">
            </div>
            <div>
              <h4 class="text-xl font-medium mb-1">Have a question?</h4>
              <p class="text-xl text-blue-700 mb-1">I am here to help you.</p>
              <a href="mailto:Sainthokaha5@gmail.com" class="text-blue-700  font-normal">Email me at Sainthokaha5@gmail.com</a>
            </div>
          </div>
          <div class="flex flex-col lg:flex-row gap-x-4">
            <div class="text-blue-200 rounded-sm w-14 h-14 items-center justify-center mt-2 mb-4 lg:mb-0 text-2xl">
              <img src="http://127.0.0.1:8000/img/phone-call.svg" alt="Map">
            </div>
            <div>
              <a href="tel:+2347063551444" class="text-blue-700 font-normal">07063551444</a>
            </div>
          </div>
          <div class="flex flex-col lg:flex-row gap-x-4">
            <div class="text-blue-200 rounded-sm w-14 h-14 items-start justify-center mt-2 mb-4 lg:mb-0 text-2xl">
              <img src="http://127.0.0.1:8000/img/map (3).svg" alt="Map">
            </div>
            <div>
              <h4 class="text-xl font-medium mb-1">Current Location</h4>
              <p class="text-xl text-blue-700 mb-1">Calabar, Cross River State.</p>
              <p class="text-blue-700  font-normal">Serving clients worldwide.</p>
            </div>
          </div>
        </div>
        <form @submit.prevent="submit" class="space-y-8 w-full max-w-md">
          <div v-if="showMessage" class="m-2 p-4 bg-blue-700 text-white rounded-lg">Thank you for contacting me.</div>
          <div class="flex gap-8">
            <div>
              <input v-model="form.name" type="text"
                class="text-paragraph h-[60px] outline-none pl-6 w-full font-body text-[15px] rounded-lg focus:outline focus:outline-1 focus:outline-blue-500"
                placeholder="Your Name">
                <span v-if="form.errors.name" class="text-sm m-2 text-red-400">{{ form.errors.name }}</span>
            </div>
            <div>
              <input v-model="form.email" type="email"
                class="text-paragraph h-[60px] outline-none pl-6 w-full font-body text-[15px] rounded-lg focus:outline focus:outline-1 focus:outline-blue-500"
                placeholder="Your Email Address">
              <span v-if="form.errors.email" class="text-sm m-2 text-red-400">{{ form.errors.email }}</span>
            </div>
          </div>
          <textarea v-model="form.body"
            class="resize-none w-full outline-none p-6 rounded-lg h-[200px] focus:outline focus:outline-1 focus:outline-blue-500"
            placeholder="Your Message" spellcheck="false"></textarea>
          <div v-if="form.errors.body" class="text-sm m-2 text-red-400">{{ form.errors.body }}</div>
          <button class="mt-8 inline-block rounded bg-blue-600 px-12 py-3 text-sm font-medium text-white duration-500 hover:tracking-wider hover:bg-blue-400 focus:outline-none focus:ring focus:ring-blue-400">Send message</button>
      </form>
    </div>
  </div>
</section></template>