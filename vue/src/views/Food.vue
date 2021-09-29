<template>
    <v-container v-if="this.data">

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

        <FoodList :foods="this.color" />

    </v-container>
</template>

<script>
    import FoodList from '@/components/FoodList'

    export default {
        name: 'Food',
        components: {
            FoodList,
        },
        computed: {
            data() {
                return this.$store.state.data.food;
            },
            food() {
                return this.data.filter(data => data.id == this.$route.params.id)[0];
            },
            color() {
                return this.data.filter(data => data.color != this.food.color);
            },
        },
        created(){
            this.$store.dispatch('get', {url: 'food'});
        },
    }
</script>