<script setup>

</script>

<template>
  <section id="services" class="py-12 bg-stone-100 min-h-[800px]">
    <div class="max-w-screen-xl mx-auto p-4 pt-20" v-motion
    :initial="{ opacity: 0, y: 100 }"
    :visible="{ opacity: 1, y: 0 }"
    :delay="200">
      <div class="flex flex-col items-center text-center">
        <h2 class="text-3xl lg:text-4xl font-medium lg:font-extrabold mb-5">What I do for clients</h2>
        <p class="text-base text-paragraph mb-16 lg:mb-24 max-w-[520px]">I help my clients to create and maintain websites that are user-friendly, informative, and visually appealing. I work with them to understand their needs and requirements, and then I design and develop websites that meet those needs.<br/> I am passionate about helping my clients to succeed online. I believe that a well-designed website is essential for any business, and I am committed to providing my clients with the best possible service. <br/> Here are some specific examples of the services I offer my clients:</p>
      </div>
      <div class="grid lg:grid-cols-4 gap-8">
        <div class="bg-blue-200 p-6 rounded-2xl hover:cursor-pointer transform hover:-translate-y-2 hover:-translate-x-2 shadow-2xl">
          <div class="text-blue-500 rounded-sm w-12 h-12 flex justify-center items-center mb-24 text-[28px]">
            <img src="http://127.0.0.1:8000/img/web-design.svg" alt="Web design">
          </div>
          <h4 class="text-xl font-medium mb-2">Web Design</h4>
          <p>Web design is more than just making a website look good. It's about creating a user experience that is intuitive, engaging, and persuasive. I work with my clients to create websites that not only look great, but also achieve their specific business goals.</p>
        </div>    
        <div class="bg-blue-200 p-6 rounded-2xl hover:cursor-pointer transform hover:-translate-y-2 hover:-translate-x-2 shadow-2xl">
          <div class="text-blue-500 rounded-sm w-12 h-12 flex justify-center items-center mb-24 text-[28px]">
            <img src="http://127.0.0.1:8000/img/web-development.svg" alt="Web development">
          </div>
          <h4 class="text-xl font-medium mb-2">Web Development</h4>
          <p>Web development is the art and science of building and maintaining websites. I work with my clients to create websites that are not only beautiful and functional, but also optimized for performance and security.</p>
        </div>    
        <div class="bg-blue-200 p-6 rounded-2xl hover:cursor-pointer transform hover:-translate-y-2 hover:-translate-x-2 shadow-2xl">
          <div class="text-blue-500 rounded-sm w-12 h-12 flex justify-center items-center mb-24 text-[28px]">
            <img src="http://127.0.0.1:8000/img/branding.svg" alt="Branding">
          </div>
          <h4 class="text-xl font-medium mb-2">Branding</h4>
          <p>Branding is more than just a logo and a tagline. It's about creating a unique identity for your business that resonates with your target audience. I work with my clients to develop brands that are authentic, memorable, and effective.</p>
        </div>    
        <div class="bg-blue-200 p-6 rounded-2xl hover:cursor-pointer transform hover:-translate-y-2 hover:-translate-x-2 shadow-2xl">
          <div class="text-blue-500 rounded-sm w-12 h-12 flex justify-center items-center mb-24 text-[28px]">
            <img src="http://127.0.0.1:8000/img/seo (1).svg" alt="SEO">
          </div>
          <h4 class="text-xl font-medium mb-2">SEO</h4>
          <p>SEO is the art and science of optimizing your website so that it ranks higher in search engine results pages (SERPs). I help my clients improve their organic visibility and attract more visitors to their websites.</p>
        </div>    
      </div>
    </div>
  </section>
</template>