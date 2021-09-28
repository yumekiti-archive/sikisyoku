<template>
    <v-container>

        <v-row>
            <v-col cols="12">
                <v-text-field
                    class="mt-3"
                    label="検索"
                    outlined
                    v-model="search"
                ></v-text-field>
            </v-col>
        </v-row>

        <v-row class="card">
            <v-col cols="6" md="3" v-for="(food, i) in this.searchData" :key="i">
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
        name: 'Index',
        data: () => ({
            search: '',
        }),
        computed: {
            data() {
                return this.$store.state.data.food
            },
            searchData(){
                if(this.data){
                    return this.data.filter(data => {
                        return data.name.includes(this.search);
                    })
                }else return '';
            }
        },
        created(){
            this.$store.dispatch('get', {url: 'food'});
        },
        watch: {
            data(){}
        },
    }
</script>

<style>
.card{
    display: flex;
    justify-content: space-evenly;
    justify-content: left;
}
</style>