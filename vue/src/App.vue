<template>
  <v-app>
    <v-app-bar
      app
      color="success"
      dark
    >
      <div class="d-flex align-center">
        <h1 @click="$router.push('/').catch(() => {})">色食</h1>
      </div>

      <v-spacer></v-spacer>
      
      <!-- ナビバー -->
      <NavList />

    </v-app-bar>

    <v-main>
      <v-progress-linear
        indeterminate
        v-if="this.$store.state.load"
      ></v-progress-linear>
      <router-view/>
    </v-main>
  </v-app>
</template>

<script>
import NavList from '@/components/NavList'

export default {
  name: 'App',
  components: {
    NavList,
  },
};
</script>
