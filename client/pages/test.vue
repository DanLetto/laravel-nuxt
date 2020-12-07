<template>
  <div class="container">
    <div>
      test page
      <NuxtLink to="/"> - index -</NuxtLink>
      <p>{{posts}}</p>
    </div>
  </div>
</template>

<script>
export default {
  async asyncData(context) {
    let response = await context.app.$axios.$post(`http://lanu/api/test-api`)
    return { posts: response }
  },
}
</script>

<style>
.container {
  margin: 0 auto;
  min-height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
  text-align: center;
}
</style>
