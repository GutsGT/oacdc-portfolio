<script setup>
  // import HelloWorld from './components/HelloWorld.vue'
  // import TheWelcome from './components/TheWelcome.vue'
</script>

<template>
  <div class="text-center font-['Consolas']">
        <div class="text-7xl italic max-[640px]:text-4xl" style="text-shadow: 3px 3px 5px gray;">
            Otávio A. Castro<br>
        </div>
        <div class="justify-items-center">
            <img src="/src/assets/images/svg.png" alt="" class="max-w-[90%]"/>
        </div>
        <div class="txt-animado mt-2 text-4xl max-[640px]:text-lg justify-items-center">
            <div class="text-center flex">
                >DESENVOLVEDOR<pre><span class="relative"></span></pre>
            </div>
        </div>
    </div>

    <div class="flex justify-center px-10 max-h-[500px]">
        <img class="h-[500px] invert max-[640px]:hidden rotate-[270deg] z-0" src="/src/assets/images/tech_bg_cut.png" alt="">
        <div class="h-[500px] content-center relative z-10 justify-items-center">
            <div class="border-8 border-white size-96 max-[640px]:size-64 rounded-full overflow-hidden">
                <img src="/src/assets/images/me_pb-min.png" alt="">
            </div>
        </div>
        <img class="h-[500px] invert max-[640px]:hidden rotate-[90deg]" src="/src/assets/images/tech_bg_cut.png" alt="">
    </div>

    <div class="flex justify-evenly min-h-20 font-trend-sans-one text-xl max-[640px]:text-sm max-[640px]:flex-col max-[640px]:min-h-[25vh] max-[640px]:items-center">
        <a class="link-block text-center content-center" href="aboutme">
            Sobre Mim
        </a>
        <a class="link-block text-center content-center" href="academicbackground">
            Formações
        </a>
        <a class="link-block text-center content-center" href="projects">
            Projetos
        </a>
    </div>
</template>

<style scoped>
  /* header {
    line-height: 1.5;
  }

  .logo {
    display: block;
    margin: 0 auto 2rem;
  }

  @media (min-width: 1024px) {
    header {
      display: flex;
      place-items: center;
      padding-right: calc(var(--section-gap) / 2);
    }

    .logo {
      margin: 0 2rem 0 0;
    }

    header .wrapper {
      display: flex;
      place-items: flex-start;
      flex-wrap: wrap;
    }
  } */
</style>
