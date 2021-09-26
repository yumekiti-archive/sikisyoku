<template>
    <v-container>

        <v-row>
            <v-col cols="12" v-if="this.data">
                <v-card>
                    <v-img class="mx-auto" max-height="400" max-width="600" :src="this.data.image" />
                    <v-card-title>
                        {{this.data.name}}
                    </v-card-title>
                </v-card>
            </v-col>
        </v-row>

        <p class="mt-5">
            以下この食べ物に合う料理
        </p>

    </v-container>
</template>

<script>
  export default {
    name: 'Food',
    computed: {
        data() {
            return this.$store.state.data.filter(data => data.id == this.$route.params.id)[0];
        }
    },
    created(){
        this.$store.dispatch('get', {url: 'food'});
    },
  }
</script>