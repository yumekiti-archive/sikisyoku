<template>
    <v-container v-if="this.food">

        <v-row>
            <v-col cols="12">
                <v-card>
                    <v-img class="mx-auto" max-height="400" max-width="600" :src="'/' + this.food.image" />
                    <v-card-title>
                        {{this.food.name}}
                    </v-card-title>
                </v-card>
            </v-col>
        </v-row>

        <v-row class="card">
            <v-col cols="6" md="2" v-for="(food, i) in this.color" :key="i">
                <v-card :to="'/food/' + String(food.id)">
                    <v-img max-height="300" :src="'/' + food.image" />
                    <v-card-title>
                        {{food.name}}
                    </v-card-title>
                </v-card>
            </v-col>
        </v-row>

    </v-container>
</template>

<script>
  export default {
    name: 'Food',
    computed: {
        data() {
            return this.$store.state.data.food;
        },
        food() {
            if(this.data) return this.data.filter(data => data.id == this.$route.params.id)[0];
            else return '';
        },
        color() {
            if(this.data) return this.data.filter(data => data.color != this.food.color);
            else return '';
        },
    },
    created(){
        this.$store.dispatch('get', {url: 'food'});
    },
    watch: {
        data(){},
    },
  }
</script>