<template>
  <v-app>
    <v-app-bar
      app
      color="success"
      dark
    >
      <div class="d-flex align-center">
        <h1>色食</h1>
      </div>

      <v-spacer></v-spacer>
      
      <!-- ナビバー -->
      <v-app-bar-nav-icon @click="$router.push('/signin')"/>

    </v-app-bar>

    <v-main>
      <router-view/>
    </v-main>
  </v-app>
</template>

<script>

export default {
  name: 'App',

  data: () => ({
    //
  }),
};
</script>
